<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutLiveContentSeeder extends Seeder
{
    public function run()
    {
        $hikayemiz = <<<'HTML'
<p class="p1">Aras Marine Yatırım Holding Onursal Başkanı Mustafa Alpaslan, 2019 yılında   Alpaslan Otizm Vakfı ile Alpaslan Özel Eğitim ve Rehabilitasyon Merkezi'ni kurmuştur. Sakarya'nın Sapanca ilçesinde faaliyet gösteren Alpaslan Otizm Vakfı, otizmden etkilenen bireylere, ailelerine ve diğer paydaşlara yönelik, yenilikçi ve disiplinler arası hizmetler sunarak otizm spektrum bozukluğu alanında ulusal ve uluslararası düzeyde model bir vakıf olmayı amaçlamaktadır. </p>
<p class="p1">Alpaslan Otizm Vakfı kâr amacı gütmeden hizmetlerini sürdürmektedir. Bu hizmetler; otizmli bireyler için gelişimsel ve eğitsel değerlendirme yapma, anne-babalara, otizm alanında çalışan araştırmacı ve uygulamacılara danışmanlık hizmeti sunma, okul çağı eğitimi ve yetişkinlik eğitimi, mesleki eğitim hizmetleri ve izleme hizmetlerini kapsamaktadır. Alpaslan Otizm Vakfı'nda otizmli ya da gelişimsel gerilik riski altında olan okul öncesi dönemindeki çocuklar için bilimsel dayanaklı yöntemler kullanılarak erken müdahale uygulamaktadır. Alpaslan Otizm Vakfı, kaynaştırma hizmetlerinden yararlanmayan ve özel eğitim uygulama merkezlerine devam eden otizmli okul çapı öğrencilerine, işlevsel akademik beceriler, sosyal etkileşim, iletişim becerileri, günlük yaşam becerileri, sosyal beceriler ve hareket becerilerini geliştirmeyi hedefleyen kapsamlı eğitim modeli sunmaktadır.</p>
<p class="p1">Alpaslan Otizm Vakfı, yetişkinlik dönemindeki otizmli bireyler için bağımsız yaşam becerileri kazandırmayı, fiziksel aktivite alışkanlıklarını sürdürmeyi ve amaçlı serbest zaman etkinliklerinin öğretimiyle beceri repertuvarlarını genişletmeyi, destekli istihdam uygulamalarıyla mesleki beceriler geliştirmeyi ve yaşamın içinde üretken olmayı hedefleyen kapsamlı bir modeli sunmaktadır.</p>
<p class="p1">Tüm bu bilimsel çalışmaların desteklenmesi ve yaygınlaştırılabilmesi amacıyla 2021 yılında Alpaslan Otizm Vakfı Yayınevi kurulmuştur. Yayınevi başta Alpaslan Otizm Vakfı'nın bilimsel çalışmaları olmak üzere, Türkiye ve dünya genelinde otizm konusunda bilimsel eserler üreten ve eserlerini yayımlamak isteyen akademisyenleri desteklemek üzere faaliyetlerini yürütmektedir.</p>
<p class="p1">Alpaslan Otizm Vakfı'nda, eğitsel etkinliklerin yürütüldüğü alanlar dışında otizmli bireylere fiziksel aktivite için fırsatlar sunan çeşitli iç ve dış mekânlar bulunmaktadır. Fiziksel aktivite için iç mekânda; çok amaçlı kapalı salon ve fitness salonu bulunmaktadır. Dış mekânda; yüzme havuzu, basketbol-voleybol-tenis gibi spor branşları için açık alan ve yürüyüş-koşu-bisiklet için bir parkur yer almaktadır.</p>
HTML;

        $vizyonumuz = <<<'HTML'
<p class="p1">Otizm Spektrum Bozukluğundan etkilenen bireylere, ailelerine ve ilgili paydaşlara yönelik, yenilikçi ve bilgi-iletişim teknolojileri tabanlı disiplinlerarası hizmetler sunarak gelişime katkı sağlamayı hedefliyoruz.</p>
<p class="p1">Alpaslan Otizm Vakfı'nın 2030 vizyonu:   </p>
<p class="p1">"Otizm Spektrum Bozukluğundan etkilenen bireylere, ailelerine ve ilgili paydaşlara yönelik, yenilikçi ve bilgi-iletişim teknolojileri tabanlı disiplinlerarası hizmetler sunarak ulusal ve uluslararası düzeyde model bir vakıf ve otizm mükemmeliyet merkezi olmak"</p>
HTML;

        $misyonumuz = <<<'HTML'
<p class="p1">"Otizm Spektrum Bozukluğundan (OSB) etkilenen bireylere, disiplinlerarası kanıt temelli hizmetler sunarak işlev düzeylerini arttırma, ev-okul-sınıf ve diğer toplumsal ortamlarda bu işlevlerin kullanımını sağlayarak aktivite ve katılım düzeylerini geliştirme, ailelerin ve uzmanların bilgilerini yaşam boyu kullanabilecekleri becerilere dönüştürmektir"</p>
<p class="p1">Bu misyon kapsamında aşağıda sıralanan çalışmalar yürütülme sürecindedir:  </p>
<p class="p1">• Toplumun ve ailelerin otizm konusunda bilinçlendirilmesi, </p>
<p class="p1">• OSB'li bireylerin erken çocukluk döneminden itibaren eğitim, sağlık bakım ve psikososyal hizmetlere ulaşmalarının sağlanması, </p>
<p class="p1">• Bilimsel dayanaklı hizmetlerin sunulabilmesi için bilimsel araştırma ve çalışmaların yapılması, </p>
<p class="p1">• Yapılan bilimsel çalışmalar sonucunda eğitim modellerinin ve müfredatların geliştirilmesi, </p>
<p class="p1">• OSB'li bireylerin olabildiğince bağımsız olarak yaşamlarını sürdürebilmeleri için mesleki beceriler kazandırılması, </p>
<p class="p1">• OSB'li bireylerin eğitiminde sorumlu insan kaynağının yetiştirilmesi, </p>
<p class="p1">• OSB'li bireylerin eğitiminde sürekliliği sağlamak üzere ailelerin eğitilerek güçlendirilmesi, </p>
<p class="p1">• OSB'li bireylerin artan işlev düzeylerinin aktivite ve katılıma dönüşümü için çevresel bariyerlerin azaltılması, </p>
<p class="p1">• Bakımı aileleri tarafından yeterince sağlanamayan OSB'li bireyler için eğitim ve bakım hizmetlerinin erişebilir hale getirilmesi,   </p>
<p class="p1">• OSB'li bireylerin ve ailelerinin, yasal haklarının belirlenmesi, bu haklara ulaşmalarını kolaylaştıracak yasal düzenlemelerin çıkarılmasının sağlanması için gerekli çalışmaların yapılması.</p>
HTML;

        $temeldegerler = <<<'HTML'
<p>Alpaslan Otizm Vakfı, vizyon ve misyonunu gerçekleştirirken,   <br><strong>1.</strong> Yaş, ırk, inanç, yetersizlik düzeyi, cinsiyet ve gelir düzeyine bakmaz.  <br><strong>2. </strong>Liyakat ve adalet esaslarına göre hareket eder.  <br><strong>3.</strong> Düşünce ve ifade hürriyetine önem verir. <br><strong>4.</strong> Faaliyetlerini bilimsel doğrular üzerine inşa eder.  <br><strong>5.</strong> Birimlerinde kalite sistemlerini oluşturarak güvenirliğini ortaya koyar. <br><strong>6.</strong> Tüm iş ve işlemlerinde şeffaflık ve hesap verebilirlik ilkesini temel alır. <br><strong>7. </strong>Tüm paydaşlarının her alanda yönetim süreçlerine aktif katılımcılığına önem verir.  <br><strong>8.</strong> Daha iyi bir eğitim için AR-GE faaliyetlerini destekler. <br><strong>9. </strong>Öğrenci ve aile odaklı bir yaklaşım izler. <br><strong>10.</strong> Her türlü iş ve işlemlerde etik değerlere bağlıdır. <br><strong>11. </strong>Atatürk ilkelerini kendine kılavuz edinmiş, yurttaşlık bilincine sahip uzmanlar ve öğrenciler<br>yetişmesine önem verir. <br><strong>12.</strong> Türkiye Cumhuriyeti Devleti'ne karşı görev ve sorumluluklarını bilir. <br><strong>13.</strong> Hizmet verdiği kişilere, destekleyenlere ve paydaşlarına  karşı şeffaf, sorumlu ve hesap verilebilir bir sistem kurar. <br><strong>14.</strong> Hür ve bilimsel düşünce gücüne, geniş bir dünya görüşüne sahip ve insan haklarına saygılıdır.<br><strong>15.</strong> Hizmetlerin gizliliğini sağlar, gizlilik ile ilgili yasalara ve düzenlemelere uyar. <br><strong>16.</strong> Siyasi düşünce ve mali çıkarlardan uzak durur.</p>
HTML;

        $ilkeler = <<<'HTML'
<p><strong>  1</strong>. Bilimsel olma<br><strong>  2.</strong> Evrensel olma<br><strong>  3.</strong> İnsan odaklı olma<br><strong>  4.</strong> Veriye dayalı olma<br><strong>  5.</strong> Disiplinlerarası olma<br><strong>  6.</strong> Aile merkezli olma<br><strong>  7.</strong> Bilgi İletişim Teknolojileri (BİT) tabanlı olma<br><strong>  8.</strong> Yenilikçi olma<br><strong>  9. </strong>Kaynaştırma/bütünleştirme odaklı olma<br><strong>10.</strong> Kurumsal ve sürdürülebilir olma</p>
HTML;

        $kalite = <<<'HTML'
<p>ALPASLAN OTİZM VAKFI, otizm spektrum bozukluğundan (OSB) etkilenmiş bireylerin özel eğitim ve rehabilitasyon gereksinimlerini, bilimsel dayanaklı yöntemler kullanarak disiplinler arası hizmet anlayışı ile karşılamayı benimsemektedir. Vakıf, OSB'den etkilenen bireylere sunulan hizmetlerin kapsamlı ve bütünleştirici olması için Dünya Sağlık Örgütü tarafından önerilen biopsikososyal modeli temel alarak, bireylerin çevresel unsurlarını bariyerden kolaylaştırıcı hale dönüştürmeyi ve böylece aktivite ve katılım düzeylerini arttırmayı hedeflemektedir. Her bir OSB'li bireyi kendi kapasitesi çerçevesinde en verimli hale getirerek günlük yaşamını en az destekle yürütebilmesini sağlamak ve toplumsal yaşamın içerisinde yer alabilecek otonomiye sahip olabilmeleri amaçlanmaktadır.<br>ALPASLAN OTİZM VAKFI, benimsediği model ve hedefleri doğrultusunda OSB'li bireyler için "önce sağlık" anlayışı ile güvenli bir çevrede özel eğitim ve habilitasyon hizmeti almaları amacıyla Kalite, Çevre, İş Sağlığı ve Güvenliği Entegre Yönetim Sistemi kurmuştur. Entegre Yönetim Sistemi ile vakıf;</p>
<p>-Çevre, iş sağlığı ve güvenliği ile ilgili tehlikeleri ve bunların önem durumunu değerlendirerek çevre ve iş kazalarını önleyeceğini,<br>-Doğal kaynakların en verimli ve etkin şekilde kullanılacağını,<br>-Atıkları en aza indireceğini ve atıkları çevreye zarar vermeden bertaraf edeceğini,<br>-Her türlü kirliliği kaynağında önleyerek ve azaltarak çevreyle uyumlu ve duyarlı hizmet vereceğini,<br>-Çalışan tüm vakıf personeli ve ilgili tarafları eğiteceğini, sorumluluk bilincini ve yetkinliğini arttıracağını ve çalışanların sisteme katılımını sağlayacağını,<br>-Ulusal ve uluslararası yasa, yönetmelik ve konvansiyonlar ile diğer gerekliliklere uyacağını,<br>-Tüm paydaşlarının isteklerini ve ilgili standartların gereklerini beklentiyi aşarak karşılayacağını,<br>-Riskleri etkin bir biçimde yöneterek Entegre Yönetim Sistemi'ni sürekli iyileştirmeyi,<br>-Bu politikanın tüm vakıf çalışanlarınca anlaşılmasının sağlanacağını taahhüt eder.</p>
HTML;

        $kvkk = <<<'HTML'
<div><strong>ALPASLAN EĞİTİM VE DANIŞMANLIK A.Ş. KİŞİSEL VERİ BAŞVURU FORMU GENEL AÇIKLAMALAR</strong></div>
<div><strong>Haklarınız</strong></div>
<div>6698 Sayılı Kişisel Verilerin Korunması Kanunu'nun ("Kanun") 11. Maddesinde, ilgili kişi olarak tanımlanan kişisel veri sahiplerine (bundan sonra "Başvuru Sahibi" olarak anılacaktır), kendisiyle ilgili kişisel verilerin işlenip işlenmediğini öğrenme, işlenen kişisel veriler varsa bunlar hakkında bilgi talep etme, kişisel verilerin işlenme amacını ve bu amaçlar doğrultusunda kullanılıp kullanılmadığını öğrenme, yurt içinde veya yurt dışında kişisel verilerin aktarıldığı üçüncü kişileri bilme, kişisel verilerin eksik veya yanlış işlenmiş olması halinde bunların düzeltilmesini isteme, kişisel verilerin silinmesini veya yok edilmesini isteme gibi bir takım haklar tanınmıştır.</div>
<div>İşbu kapsamdaki taleplerinizi Alpaslan Eğitim ve Danışmanlık A.Ş.'ye aşağıda detaylı olarak açıklanan usul ve yöntemlerle iletebilirsiniz.</div>
<div><strong>Başvuru Kanalları</strong></div>
<div>Yazılı Başvuru: Hasanpaşa, Fatih Cd. No:41, 54600 Kırkpınar/Sapanca/Sakarya, Türkiye — zarfın üzerine "KVKK Bilgi Talebi" yazılacaktır.</div>
<div>Güvenli elektronik imza, Mobil İmza ya da sistemimizde kayıtlı e-posta adresi yoluyla: kvkk@alpaslanegitim.com — e-postanın konu kısmına "KVKK Bilgi Talebi" yazılacaktır.</div>
<div><strong>Başvuru Usulü</strong></div>
<div>Başvurularınızda adınızın, soyadınızın ve imzanızın, T.C. kimlik numarasının (yabancılar için pasaport numarası), tebligata esas adresinizin, varsa e-posta adresi/telefon/faks numaranızın, talep konunuzun ve ilgili bilgi/belgelerin başvuruya eklenmesi gerekmektedir.</div>
<div>Tarafımıza iletilmiş olan başvurularınız, talebin niteliğine göre en geç otuz gün içinde yazılı olarak ücretsiz yanıtlandırılacaktır.</div>
HTML;

        $rows = [
            1 => ['title' => 'Hikayemiz', 'content' => $hikayemiz],
            2 => ['title' => 'Vizyon', 'content' => $vizyonumuz],
            3 => ['title' => 'Misyon', 'content' => $misyonumuz],
            4 => ['title' => 'Temel Değerler', 'content' => $temeldegerler],
            5 => ['title' => 'İlkeler', 'content' => $ilkeler],
            6 => ['title' => 'Kalite, Çevre, İş Sağlığı ve Güvenlik Politikası', 'content' => $kalite],
            7 => ['title' => 'Kişisel Verileri Koruma Kanunu', 'content' => $kvkk],
        ];

        foreach ($rows as $id => $data) {
            DB::table('abouts')->where('id', $id)->update([
                'title' => $data['title'],
                'content' => $data['content'],
                'updated_at' => now(),
            ]);
        }
    }
}
