<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutismLiveContentSeeder extends Seeder
{
    public function run()
    {
        $osb1 = <<<'HTML'
<p>Otizm Spektrum Bozukluğu (OSB) sosyal etkileşim ve sosyal iletişimde sorunlar ile sınırlı/yinelenen ilgi ve davranışlarla gözlenen nöro-gelişimsel bir bozukluktur. Her bir Otizm Spektrum Bozukluğu olan birey başlıca Otizm Spektrum Bozukluğu belirtilerinin yanı sıra kendine özgü farklılıklar gösterir. Dolayısıyla, Otizm Spektrum Bozukluğu olan bireyler öğrenme, düşünme ve problem çözme becerilerindeki özellikleri bakımından oldukça geniş bir yelpazede yer alır ve farklılıklar gösterirler. Otizm Spektrum Bozukluğu olan bazı bireyler yaşamlarını sürdürmek için yoğun desteğe gereksinim duyarken bazıları daha az desteğe gereksinim duymakta, bazı bireylerse bağımsız yaşayabilmektedir. Aşağıda sıralanan özellikler Otizm Spektrum Bozukluğundan etkilenen bireylerde farklı düzey ve bileşkelerle ortaya çıkabilir.</p>
<p><strong>Sosyal etkileşim ve sosyal iletişim sorunlarıyla ilgili bazı özellikler:</strong></p>
<p>Sözel ve sözel olmayan dili anlamada güçlükler (göz kontağı kurmaktan kaçınmak, jestleri, yüz ifadelerini anlama ve ses tonunu ayırt etme konusunda sorunlar yaşama, konuşmama ya da konuşmayı etkili bir iletişim aracı olarak kullanamama)<br>Kendisinin ve diğerlerinin duygularının farkına varma ve duyguları ifade etmede zorlanma<br>Diğer insanların niyetlerini anlamada sorunlar<br>Sosyal etkinliklerden sıkılma<br>Karşılıklı iletişimde sıra alma sorunları<br>Kişisel alanı belirlemede yaşanılan sorunlar</p>
<p><strong>Sınırlı/yinelenen ilgi ve davranışlarla ilgili bazı özellikler:</strong></p>
<p>Sallanma, el çırpma, ileri geri koşma gibi tekrarlayıcı vücut hareketleri<br>Nesnelerle tekrarlanan vücut hareketleri,<br>Belirli konulara sınırlı ya da yoğun ilgi göstermek<br>Rutinlere bağlılık<br>Işıklara ya da dönen nesnelere bakmak<br>Bazı seslerden ya da kokulardan beklenmedik ölçüde rahatsız olmak gibi duyusal uyaranlara gösterilen sıra dışı tepkiler </p>
HTML;

        $osb2 = <<<'HTML'
<p>Otizm Spektrum Bozukluğunun her yaşta görülebilen belirtilerinin yanı sıra erken gelişim dönemlerinde dikkate alınması gerekebilecek bazı belirtileri de vardır.</p>
<p>Otizm Spektrum Bozukluğunun her yaşta görülebilen belirtileri şu şekilde sıralanabilir:</p>
<p>-Daha önce edinilmiş babıldama, konuşma gibi davranışların ve sosyal becerilerin kaybı,</p>
<p>-Göz kontağı kurmadan kaçınmak</p>
<p>-Adı söylendiğinde bakmamak</p>
<p>-Diğerlerinin gösterdikleriyle ilgilenmemek ya da ilgisini çeken nesne veya olayları diğerlerine göstermemek</p>
<p>-Hayali oyunlar oynamamak,</p>
<p>-Yalnız kalmayı tercih etmek</p>
<p>-Başkalarının duygularını anlamada zorluk çekmek,</p>
<p>-Arkadaşlık kurmada ve sürdürmede sorunlar yaşamak</p>
<p>-Dil gelişiminde gecikme</p>
<p>-Sözcüklerin ya da cümlelerin sürekli tekrarlanması (ekolali)</p>
<p>-Nesnelerle sıraya dizmek gibi sıradışı bir şekilde ilgilenmek</p>
<p>-Rutinlere aşırı bağlılık ya da değişikliklere aşırı tepki göstermek,</p>
<p>-Sınırlı ilgi alanlarına sahip olmak</p>
<p>-Kolları çırpma, sallanma, kendi etrafında dönme, gibi tekrarlanan davranışlar sergilemek</p>
<p>-Seslere, kokulara, tatlara, dokulara, ışıklara ve/veya renklere sıra dışı tepkiler vermek. </p>
<p>Yukarıda sıralanan belirtilerin yanı sıra erken gelişim dönemlerinde gözlenebilecek ve erken tanıya hizmet edebilecek belirtiler şunlar olabilir:</p>
<p><em><strong>6. ayda</strong></em></p>
<p>-Başkalarının tepkilerine gülümseme ya da az gülme</p>
<p>-Göz kontağından kaçınma ya da çok az göz kontağı kurma</p>
<p><em><strong>9. ayda</strong></em></p>
<p>-Mutlu, üzgün, kızgın olma gibi duyguları belirten yüz ifadelerini göstermeme,</p>
<p>-Başkalarının ses ya da mimiklerine benzer şekilde karşılık vermeme</p>
<p><em><strong>12. ayda</strong></em></p>
<p>-Babıldamaların, agulamaların çok sınırlı olması ya da hiç olmaması</p>
<p>-Basit etkileşimli oyunlar oynamama,</p>
<p>-Adına tepki vermeme,</p>
<p>-İşaret etme, gösterme, ulaşma ya da bay bay yapma gibi jestlerin çok sınırlı olması ya da hiç olmaması</p>
<p><em><strong>18. ayda</strong></em></p>
<p>-Sözcük çıktısının çok sınırlı düzeyde olması ya da hiç olmaması</p>
<p>-İşaret edilen yere bakmama</p>
<p>-İlginç durum ya da olaylara diğerlerinin dikkatini çekmeye çalışmak için girişimde bulunmama</p>
<p><em><strong>24. ayda</strong></em></p>
<p>-İki sözcükten oluşan anlamlı cümlelerin çok sınırlı olması ya da hiç olmaması</p>
<p>-Diğerlerinin kırıldığının, üzüldüğünün ya da korktuğunun farkına varmama</p>
HTML;

        $osb3 = <<<'HTML'
<p><strong>OTİZM SPEKTRUM BOZUKLUĞUNUN NEDENLERİ</strong></p>
<p>Otizm Spektrum Bozukluğunun nedenleri henüz tam olarak belirlenebilmiş değildir. Nedeni tam olarak bilinmeyen diğer birçok durumda olduğu gibi Otizm Spektrum Bozukluğunun nedenlerine ilişkin de çok sayıda iddia ortaya konmaktadır. Bu iddiaların bir bölümü bilimsel yaklaşımdan uzak bir anlayışla üretilirken; özellikle genetik ve nöroloji alanında yapılan bilimsel çalışmalarla Otizm Spektrum Bozukluğunun nedenleri anlaşılmaya çalışılmaktadır. Bugüne değin Otizm Spektrum Bozukluğuna büyük ölçüde genetik ve çevresel etmenlerin neden olduğu düşünülmüştür. </p>
<p><strong>Genetik Faktörler</strong></p>
<p>Otizm Spektrum Bozukluğunun genetik temellerinin nörolojik bozukluklara neden olduğu düşünülmektedir. Bazı genetik bozukluklar kalıtım yoluyla aktarılırken bazıları bireye özgüdür. Genetik bozukluklar beynin yapısında ve işleyişinde sorunlara neden olabilmektedir. Otizm Spektrum Bozukluğuna bazı ailelerde daha sık rastlanması Otizm Spektrum Bozukluğu ile ilişkili genetik bozuklukların kalıtsal bağlantılarının olduğunu düşündürtmektedir. Ayrıca, bir kardeşte OSB görülmesi diğer kardeşte de Otizm Spektrum Bozukluğunun ortaya çıkma olasılığını artırmaktadır. Ancak, günümüzde Otizm Spektrum Bozukluğunu aktaran gen belirlenemediği için bu nörolojik sorunun kalıtsal olarak aktarıldığı henüz kesinleşmemiştir. İkizler üzerinde yürütülen çalışmalarda tek yumurta ikizlerinden birinde Otizm Spektrum Bozukluğun görülürken diğer ikizde görülmediği durumlarla da karşılaşılmaktadır. Bu durum, kalıtsal nedenler dışında başka faktörlerin de Otizm Spektrum Bozukluğunun ortaya çıkmasına katkı sağlayabileceği düşüncesine neden olmaktadır. Otizm Spektrum Bozukluğunun oluşmasında kalıtım ve çevrenin ne düzeyde katkısı olduğu henüz tam olarak aydınlatılamamıştır.</p>
<p><strong>Çevresel Faktörler</strong></p>
<p>Otizm Spektrum Bozukluğuna neden olabileceği düşünülen çevresel faktörler, fiziksel ve sosyal faktörler olarak iki başlık altında ele alınabilir. Bugüne değin fiziksel çevreye ilişkin bazı etmenlerin Otizm Spektrum Bozukluğuna neden olma ihtimali üzerinde durulmuştur. Bunlar arasında çevresel toksinler (örn, ağır metaller), civa bulunduran aşılar ve buğday, yulaf, çavdar gibi besinlerde bulunan gluten ve sütte bulunan kazein proteinleri bulunmaktadır. Ancak, örnekleri sıralanan bu çevresel faktörlerin hiçbiri ile Otizm Spektrum Bozukluğu arasında ilişki bulunamamıştır. Anne-babaların çocuk yetiştirme yaklaşımları, kişilik özellikleri, ailenin sosyoekonomik düzeyi gibi sosyal çevreye ilişkin faktörlerle de Otizm Spektrum Bozukluğu arasında ilişki olabileceği düşünülmüş olsa da böyle bir ilişki bulunamamıştır. Ancak, son yıllarda aile özelliklerine ilişkin bir risk faktörü olarak ileri anne-baba yaşına dikkat çekilmekte; bir başka deyişle, ileri anne-baba yaşının Otizm Spektrum Bozukluğu riskini artırabileceği ifade edilmektedir. Ayrıca annelerin özellikle hamilelik sırasında kullandıkları ilaçların Otizm Spektrum Bozukluğuna neden olabileceğine ilişkin bazı araştırma bulguları olmasına rağmen bu bulguların yeni araştırmalarla desteklenmesine gereksinim duyulmaktadır.</p>
<p><strong>Tanı Ölçütleri</strong></p>
<p>DSM-5'te belirtilen otizm spektrum bozukluğu tanı ölçütleri şu şekildedir: </p>
<p><strong>Sosyal etkileşim ve iletişimde kalıcı yetersizlikler</strong></p>
<p>* Sosyal-duygusal karşılık vermede yetersizlik (Örneğin, karşılıklı diyalog yürütmede güçlük; ilgi ve duygularını paylaşmada yetersizlik)<br>* Toplumsal etkileşimde sözel olmayan davranışlarda yetersizlik (Örneğin, zayıf sözel ve sözel olmayan iletişim, anormal göz kontağı ve beden dili, jestleri ve yüz ifadelerini anlama ve kullanmada yetersizlik)<br>* İlişkileri başlatmak, sürdürmek ve anlatmakta güçlük (Örneğin, arkadaş edinememe, hayali oyun paylaşamama, toplumsal ortama uygun davranamama)</p>
<p><strong>Sınırlı, yineleyici davranışlar</strong></p>
<p>* Basmakalıp veya yineleyici motor hareketler, obje kullanımı ve konuşma (Örneğin, basit motor stereotipiler, oyuncakları dizme veya çevirme, ekolali)<br>* Aynı olmakta ısrar, rutine sıkı sıkıya bağlılık veya ritüelleşmiş sözel ve sözel olmayan davranışlar (Örneğin, ufak değişimlerde aşırı stres, sert düşünce tarzı, her gün aynı yolu kullanma)<br>* Konu veya yoğunluk açısından anormal sınırlı, sabitlenmiş ilgiler (Örneğin, yaygın olmayan nesnelere aşırı bağlılık, aşırı tekrarlayıcı eylemler)<br>* Duygusal olarak aşırı ya da az duyarlılık veya çevrenin duyusal boyutuna aşırı ilgi (Örneğin, acıya/sıcağa duyarsızlık, belirli ses ve dokunuşlara hassasiyet, beklenmeyen tepki verme, nesneleri aşırı koklama, onlara aşırı dokunma, ışık veya hareketle aşırı meşgul olma).</p>
<p><strong>Belirtiler gelişimin erken evrelerinde ortaya çıkmalıdır.</strong> (Ancak toplumsal beklentiler sınırları aşıncaya dek fark edilmemiş veya daha sonra hayatta öğrendiği stratejilerle gizlenmiş olabilir).</p>
<p><strong>Belirtiler sosyal, mesleki ve başka önemli alanlarda klinik olarak anlamlı düzeyde bozukluğa yol açmalıdır.</strong></p>
<p><strong>Bu bozukluk zihin yetersizliği veya genel gelişimsel yetersizlik nedeniyle ortaya çıkmış olmamalıdır.</strong></p>
<p><strong>Sosyal iletişimsel alanda problem olan ancak OSB tanısı almayanlar sosyal-iletişimsel bozukluk açısından değerlendirilmelidir.</strong></p>
<p>Bunun için;<br>*Zihin yetersizliğinin eşlik edip etmediği,<br>*Dil yetersizliğinin eşlik edip etmediği<br>*Bilinen bir tıbbi, genetik veya çevresel faktörün eşlik edip etmediği,<br>*Başka nörogelişimsel, ruhsal veya davranışsal durumların olup olmadığı,<br>*Katatoninin eşlik edip etmediği incelenmelidir.</p>
<p><strong>FARK EDİLMESİ ve TANILANMASI</strong></p>
<p>Kendine özgü ve oldukça karmaşık nörolojik nedenleri henüz aydınlatılamadığı için Otizm Spektrum Bozukluğunun tanılanmasında tıbbi testler kullanılamamaktadır. Dolayısıyla, Otizm Spektrum Bozukluğu büyük ölçüde bireyin davranışsal özelliklerinin gözlenmesiyle belirlenebilmektedir. Otizm Spektrum Bozukluğunun belirtileri oldukça çeşitli ve karmaşık biçimde ortaya çıkabildiği için tanılamanın deneyimli uzmanlar tarafından gerçekleştirilmesi önemlidir. Tanılama çoğunlukla Amerikan Psikiyatri Birliği (American Psychiatric Association; APA) tarafından 2013 yılında yayımlanan Ruhsal Bozukluklara İlişkin Tanı ve İstatistik El Kitabı'nda (DSM-V-TR) belirtilen ölçütler dikkate alınarak uzman hekimler tarafından yapılmaktadır. Türkiye'de Otizm Spektrum Bozukluğu tanısı koyabilecek uzmanlar, çocuk ve ergen psikiyatristleri ile çocuk nörologlarıdır.</p>
HTML;

        $osb4 = <<<'HTML'
<p>Otizmin görülme sıklığı günümüzde çok büyük bir hızla artıyor. 1985 yılında her 2.500 çocuktan 1'ine otizm tanısı konulduğu tahmin edilirken, günümüzde her 36 çocuktan 1'inin otizm tanısı aldığı tahmin edilmektedir.</p>
<p>Amerika Birleşik Devletleri'nde yürütülen araştırmalar ve sistematik olarak tutulan kayıtlar OSB olan bireylerin sayısının yıllar içinde ciddi düzeyde arttığını göstermektedir. Amerikan Hastalıkları Kontrol ve Önleme Merkezi (Center for Desease Control and Prevention; CDC) tarafından yayımlanan son raporda 1985 yılında 2500'de bir olan yaygınlık oranının 2023 yılı itibariyle 36'da 1 olduğu görülmektedir.</p>
HTML;

        $osb5 = <<<'HTML'
<p>OSB olan bireyler ve ailelerine çok sayıda ve farklı özelliklerde uygulamalar önerilmektedir. Bu uygulamalar arasında tıbbi tedavi çalışmaları, çeşitli terapiler ve eğitim amaçlı uygulamalar bulunmaktadır. Dolayısıyla, OSB olan bireylerin anne-babalarının ve bu alanda hizmet sunan uygulamacıların çok sayıda seçenek arasından en doğru olanı seçmesi gerekmektedir.</p>
<p>Otizm Spektrum Bozukluğu (OSB) olan bireyler için doğru uygulamaya karar verirken, önerilen uygulamanın bilimsel dayanaklı olup olmadığını incelemek öncelikle yapılması gerekenlerden biridir. OSB'li bireyler için yıllardır kullanılan yöntemlerin birçoğu, bilimsel dayanaktan tümüyle yoksundur. Bu nedenle OSB, bilimsel dayanak aramayı en çok gerektiren alanlardan biridir. Bilimsel dayanaklı olmayan uygulamaların tercih edilmesi, OSB olan bireyler için etkili uygulamaların gecikmesine ve birey için çok değerli olan zaman ve diğer kaynakların boşa harcanmasına neden olabilir. Bir uygulamanın bilimsel dayanaklı olabilmesi için bugüne değin farklı ölçütler benimsenmiş olsa da bilimsel dayanaklı uygulamalar kısaca, vaat ettiği sonuçları gerçekten sağladığına ilişkin yeterli düzeyde bilimsel araştırma bulgusu ile desteklenen uygulamalardır. <strong>Bilimsel dayanak olarak, genellikle aynı uygulamaya ilişkin birden fazla deneysel araştırmanın benzer sonuçlar vermesi kabul edilir</strong>. Bu araştırmaların ise, genelde hakemli dergilerde makale olarak yayımlanması beklenir. Bugün OSB olan bireyler için kullanılan uygulamalar arasında bilimsel dayanakları en güçlü olan uygulamaların uygulamalı davranış analizine dayalı yoğun eğitim çalışmaları olduğu söylenebilir.</p>
<p>2000'li yılların başından bu yana OSB olan bireyler için bilimsel dayanaklı uygulama arayışı giderek artmaktadır. Meslek örgütleri ve araştırma derleme örgütleri tarafından OSB'den etkilenen bireylere yönelik bilimsel dayanaklı uygulamaların belirlenmesi için bu alanda yayımlanmış bilimsel çalışmalar incelenerek bazı araştırma derleme çalışmaları yayımlanmıştır. Aşağıda OSB alanında bilimsel dayanaklı uygulamaların belirlenmesi için etkinlik gösteren kuruluşlardan bazıları örneklendirilmektedir.</p>
<p>National Autism Center (NAC)<br>National Clearinghouse on Autism Evidence and Practice<br>Association for Science in Autism Treatment (ASAT)</p>
HTML;

        $rows = [
            1 => ['title' => 'Otizm Spektrum Bozukluğu Nedir?', 'content' => $osb1],
            2 => ['title' => 'Otizm Spektrum Bozukluğu Belirtileri Nelerdir?', 'content' => $osb2],
            3 => ['title' => 'Otizm Spektrum Bozukluğunun Nedenleri', 'content' => $osb3],
            4 => ['title' => 'İstatistikler', 'content' => $osb4],
            5 => ['title' => 'Bilimsel Dayanaklı Uygulamalar', 'content' => $osb5],
        ];

        foreach ($rows as $id => $data) {
            DB::table('autisms')->where('id', $id)->update([
                'title' => $data['title'],
                'content' => $data['content'],
                'updated_at' => now(),
            ]);
        }
    }
}
