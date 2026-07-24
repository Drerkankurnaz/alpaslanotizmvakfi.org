#!/bin/bash
# Alpaslan Otizm Vakfı — Local'den tek komutla canlıya deploy
# Kullanım: ./deploy-remote.sh
# Mac'ten çalıştırılır — önce git push, sonra sunucuda deploy

set -e

SERVER="root@31.42.127.138"
SSH_KEY="$HOME/.ssh/alpaslan_deploy_ed25519"
REMOTE_DIR="/var/www/alpaslanotizmvakfi.org"
BRANCH="main"
COMPOSE="docker compose -f docker-compose.prod.yml --env-file .env.docker.prod"

# Deploy zaman damgası (başlangıç)
DEPLOY_START_EPOCH=$(date +%s)
DEPLOY_START=$(date '+%d.%m.%Y %H:%M:%S')

echo "🚀 Alpaslan Otizm Vakfı Remote Deploy"
echo "========================"
echo "🕒 Başlangıç: $DEPLOY_START"

# 1. Local'de commit + push
echo "📤 Git push..."
cd "$(dirname "$0")"
git add -A
git diff --cached --quiet 2>/dev/null || git commit -m "deploy: $(date '+%Y-%m-%d %H:%M')"
git push origin $BRANCH
echo "✅ Push tamamlandı"

# 2. Sunucuda kod güncelle + container'ları tazele (down yok -> kesintisiz)
echo "🖥️  Sunucuya bağlanılıyor..."
ssh -i "$SSH_KEY" $SERVER "cd $REMOTE_DIR && git pull --ff-only origin $BRANCH && $COMPOSE up -d --build"

# 3. Migrasyon (mysql hazır olana kadar retry'lı)
echo "🗄️  Migrasyon çalıştırılıyor..."
ssh -i "$SSH_KEY" $SERVER "cd $REMOTE_DIR && \
  for i in \$(seq 1 12); do \
    $COMPOSE exec -T app php artisan migrate --force && break || { echo '⏳ DB bekleniyor...'; sleep 5; }; \
  done && \
  $COMPOSE exec -T app php artisan optimize"
echo "✅ Migrasyon tamamlandı"

# 4. Docker çöp temizliği — her deploy `--build` build cache biriktirir.
#    Son ~3GB cache'i tut, gerisini (dangling image + eski cache) temizle.
echo "🧹 Docker çöpü temizleniyor..."
ssh -i "$SSH_KEY" $SERVER "docker image prune -f >/dev/null 2>&1; docker builder prune -f --keep-storage 3GB >/dev/null 2>&1; echo '   temizlik tamam'"

# 5. Canlı doğrulama — site 200 dönmüyorsa deploy başarısız say
echo "🔎 Canlı kontrol..."
HTTP_CODE=$(curl -s -o /dev/null -w "%{http_code}" https://alpaslanotizmvakfi.org/ --connect-timeout 15)
if [ "$HTTP_CODE" != "200" ]; then
  echo "❌ UYARI: Site $HTTP_CODE döndürdü! Kontrol edin: https://alpaslanotizmvakfi.org"
  exit 1
fi

# Deploy zaman damgası (bitiş) + süre
DEPLOY_END=$(date '+%d.%m.%Y %H:%M:%S')
DEPLOY_DURATION=$(( $(date +%s) - DEPLOY_START_EPOCH ))

# Yerel deploy günlüğü — her başarılı deploy bir satır
echo "$DEPLOY_START → $DEPLOY_END (${DEPLOY_DURATION} sn)" >> "$(dirname "$0")/deploy.log"

echo ""
echo "========================"
echo "✅ Deploy tamamlandı! (site 200 OK)"
echo "🕒 Başlangıç: $DEPLOY_START"
echo "🕒 Bitiş:     $DEPLOY_END  (${DEPLOY_DURATION} sn)"
echo "🌐 https://alpaslanotizmvakfi.org"
