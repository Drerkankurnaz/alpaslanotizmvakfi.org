<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SiteContentSeeder extends Seeder
{
    protected function images($folder)
    {
        $path = storage_path("app/public/$folder");
        if (!is_dir($path)) {
            return [];
        }
        $result = [];
        foreach (File::allFiles($path) as $f) {
            if (in_array(strtolower($f->getExtension()), ['jpg', 'jpeg', 'png', 'webp'])) {
                $result[] = $folder . '/' . str_replace('\\', '/', substr($f->getPathname(), strlen($path) + 1));
            }
        }
        return $result;
    }

    public function run()
    {
        $now = now();

        if (DB::table('abouts')->count() === 0) {
            $imgs = $this->images('abouts');
            $titles = [
                1 => 'Hikayemiz', 2 => 'Vizyonumuz', 3 => 'Misyonumuz', 4 => 'Temel Değerlerimiz',
                5 => 'İlkelerimiz', 6 => 'Kalite, Çevre, İş Sağlığı ve Güvenliği Politikamız',
                7 => 'Kişisel Verileri Koruma Kanunu',
            ];
            foreach ($titles as $id => $title) {
                DB::table('abouts')->insert([
                    'id' => $id,
                    'title' => $title,
                    'content' => "<p>{$title} hakkında içerik yakında eklenecektir.</p>",
                    'content_two' => null,
                    'photo' => $imgs ? $imgs[($id - 1) % count($imgs)] : null,
                    'created_at' => $now, 'updated_at' => $now,
                ]);
            }
        }

        if (DB::table('autisms')->count() === 0) {
            $imgs = $this->images('autisms');
            $titles = [
                1 => 'Otizm Spektrum Bozukluğu Nedir?',
                2 => 'Otizm Spektrum Bozukluğu Belirtileri Nelerdir?',
                3 => 'Otizm Spektrum Bozukluğu Nedenleri',
                4 => 'İstatistikler',
                5 => 'Bilimsel Dayanaklı Uygulamalar',
            ];
            foreach ($titles as $id => $title) {
                DB::table('autisms')->insert([
                    'id' => $id,
                    'title' => $title,
                    'content' => "<p>{$title} ile ilgili içerik yakında eklenecektir.</p>",
                    'photo' => $imgs ? $imgs[($id - 1) % count($imgs)] : null,
                    'created_at' => $now, 'updated_at' => $now,
                ]);
            }
        }

        if (DB::table('slides')->count() === 0) {
            for ($i = 1; $i <= 3; $i++) {
                DB::table('slides')->insert([
                    'title' => "Alpaslan Otizm Vakfı $i",
                    'title_two' => null,
                    'content' => '<p>Otizmli bireylerin yaşam kalitesini artırmak için çalışıyoruz.</p>',
                    'created_at' => $now, 'updated_at' => $now,
                ]);
            }
        }

        if (DB::table('services')->count() === 0) {
            $imgs = $this->images('services');
            $names = ['Eğitim Hizmetlerimiz', 'Danışmanlık Hizmetlerimiz', 'Rehabilitasyon Hizmetlerimiz', 'Aile Destek Hizmetlerimiz', 'Erken Tanı ve Değerlendirme'];
            foreach ($names as $i => $title) {
                DB::table('services')->insert([
                    'title' => $title,
                    'content' => "<p>{$title} kapsamında sunduğumuz hizmetler hakkında bilgi.</p>",
                    'content_two' => null,
                    'photo' => $imgs ? $imgs[$i % count($imgs)] : null,
                    'date' => $now->toDateString(),
                    'created_at' => $now, 'updated_at' => $now,
                ]);
            }
        }

        if (DB::table('teams')->count() === 0) {
            $imgs = $this->images('teams');
            $groups = [1 => 'Yönetim Kurulu', 2 => 'Bilim Kurulu', 3 => 'Eğitim Kadrosu', 4 => 'İdari Kadro'];
            $n = 0;
            foreach ($groups as $type => $groupName) {
                for ($i = 1; $i <= 3; $i++) {
                    DB::table('teams')->insert([
                        'title' => "$groupName Üyesi $i",
                        'name' => "$groupName Üyesi $i",
                        'content' => "<p>{$groupName} üyemiz hakkında kısa biyografi.</p>",
                        'content_two' => null,
                        'photo' => $imgs ? $imgs[$n % count($imgs)] : null,
                        'url' => "uye-$type-$i",
                        'order' => $i,
                        'type' => json_encode([(string)$type]),
                        'created_at' => $now, 'updated_at' => $now,
                    ]);
                    $n++;
                }
            }
        }

        if (DB::table('contents')->count() === 0) {
            $imgs = $this->images('contents');
            $n = 0;
            for ($t = 1; $t <= 2; $t++) {
                for ($i = 1; $i <= 3; $i++) {
                    $title = ($t == 1 ? 'Uzmanlar İçin Eğitim ' : 'Aileler İçin Eğitim ') . $i;
                    DB::table('contents')->insert([
                        'title' => $title,
                        'content' => "<p>{$title} içeriği.</p>",
                        'content_two' => null,
                        'photo' => $imgs ? $imgs[$n % count($imgs)] : null,
                        'date' => $now->toDateString(),
                        'type' => $t,
                        'created_at' => $now, 'updated_at' => $now,
                    ]);
                    $n++;
                }
            }
        }

        if (DB::table('researches')->count() === 0) {
            for ($i = 1; $i <= 3; $i++) {
                DB::table('researches')->insert([
                    'title' => "Araştırma $i",
                    'content' => "<p>Araştırma $i içeriği.</p>",
                    'photo' => null,
                    'created_at' => $now, 'updated_at' => $now,
                ]);
            }
        }

        if (DB::table('announcements')->count() === 0) {
            $imgs = $this->images('announcements');
            for ($i = 1; $i <= 3; $i++) {
                DB::table('announcements')->insert([
                    'title' => "Duyuru $i",
                    'content' => "<p>Duyuru $i içeriği.</p>",
                    'photo' => $imgs ? $imgs[($i - 1) % count($imgs)] : null,
                    'date' => $now->toDateString(),
                    'created_at' => $now, 'updated_at' => $now,
                ]);
            }
        }

        if (DB::table('news')->count() === 0) {
            $imgs = $this->images('news');
            for ($i = 1; $i <= 2; $i++) {
                DB::table('news')->insert([
                    'title' => "Haber $i",
                    'content' => "<p>Haber $i içeriği.</p>",
                    'photo' => $imgs ? $imgs[($i - 1) % count($imgs)] : null,
                    'date' => $now->toDateString(),
                    'created_at' => $now, 'updated_at' => $now,
                ]);
            }
        }

        if (DB::table('activities')->count() === 0) {
            $imgs = $this->images('activities');
            for ($i = 1; $i <= 4; $i++) {
                DB::table('activities')->insert([
                    'title' => "Etkinlik $i",
                    'content' => "<p>Etkinlik $i içeriği.</p>",
                    'content_two' => null,
                    'photo' => $imgs ? $imgs[($i - 1) % count($imgs)] : null,
                    'date' => $now->toDateString(),
                    'created_at' => $now, 'updated_at' => $now,
                ]);
            }
        }

        if (DB::table('documents')->count() === 0) {
            for ($i = 1; $i <= 3; $i++) {
                DB::table('documents')->insert([
                    'title' => "Belge $i",
                    'content' => "<p>Belge $i açıklaması.</p>",
                    'photo' => null,
                    'created_at' => $now, 'updated_at' => $now,
                ]);
            }
        }

        if (DB::table('schools')->count() === 0) {
            for ($i = 1; $i <= 2; $i++) {
                DB::table('schools')->insert([
                    'title' => "Okulumuz $i",
                    'content' => "<p>Okulumuz $i açıklaması.</p>",
                    'content_two' => null,
                    'photo' => null,
                    'created_at' => $now, 'updated_at' => $now,
                ]);
            }
        }

        if (DB::table('institutions')->count() === 0) {
            DB::table('institutions')->insert([
                'title' => 'Kurumumuz',
                'content' => '<p>Kurum bilgisi.</p>',
                'photo' => null,
                'created_at' => $now, 'updated_at' => $now,
            ]);
        }
    }
}
