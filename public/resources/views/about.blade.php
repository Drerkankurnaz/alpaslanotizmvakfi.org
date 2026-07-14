@extends('site.layouts.master')

@section('maincontent')

    <section class="page_banner bg_cover" style="background-image: url(assets/images/about_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title">Hikayemiz</h4>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="#">Ana Sayfa</a></li>
                            <li><a class="active" href="#">Hikayemiz</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner PART ENDS ======-->

    <!--====== Blog List Page PART START ======-->

    <section class="blog_details_page pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_details mt-50">
                        <p>
                            Alpaslan Vakfı'nın kurucusu Mustafa Alpaslan, Sapanca'da aktif bir Otizm Merkezini, ekibi ile birlikte devralarak, 2019 yılında aynı alanda Alpaslan Otizm Vakfı (AOV) ile Alpaslan Özel Eğitim ve Rehabilitasyon Merkezi'ni (AER) kurmuştur.

                            Alpaslan Otizm Vakfı, otizm spektrum bozukluğundan (OSB) etkilenen bireylere, ailelerine ve ilgili paydaşlara yönelik, yenilikçi ve bilgi-iletişim teknolojileri tabanlı disiplinlerarası hizmetler sunarak ulusal ve uluslararası düzeyde model bir vakıf olmayı amaçlamaktadır.

                            Alpaslan Otizm Vakfı (AOV), Sakarya ilinin Sapanca ilçesinde yaklaşık 4500m2’lik doğayla iç içe olan bir alanda hizmetlerini sürdürmektedir. Bu hizmetler; erken eğitim, okul çağı eğitimi ve yetişkinlik eğitimini kapsamaktadır.

                            AOV, OSB’li veya risk altında olan okul öncesi çocuklar için bilimsel dayanakları olan yöntemlerden yararlanarak gelişimsel ve eklektik bir program (uygulamalı davranış analizine dayalı uygulamalar, doğal öğretim vb.) sunmaktadır.

                            AOV, kaynaştırma hizmetlerinden yararlanamayan ve özel eğitim uygulama merkezlerine devam eden OSB’li okul çağı öğrencilere, işlevsel akademik beceriler-sosyal etkileşim & iletişim becerileri-günlük yaşam becerileri, sosyal beceriler ve hareket becerilerini geliştirmeyi hedefleyen kapsamlı eğitim modeli sunmaktadır.

                            AOV, OSB’li yetişkinlik dönemindeki bireyler için günlük yaşam bağımsızlığına yönelik beceriler kazandırma, fiziksel aktivite alışkanlıklarını sürdürme ve amaçlı serbest zaman etkinliklerinin öğretimi ile beceri repertuvarlarının genişletilmesi ve yaşamın içerisinde üretken olmalarını sağlayan kapsamlı eğitim modeli sunmaktadır.

                            AOV bünyesinde, OSB’li bireylere özel eğitim ve fiziksel aktivite için fırsatlar sunan çeşitli iç ve dış mekanlar bulunmaktadır. Fiziksel aktivite için iç mekanda; çok amaçlı kapalı salon ve fitness salonu bulunmaktadır. Dış mekanda; yüzme havuzu, basketbol-voleybol-tenis gibi spor branşları için açık alan ve yürüyüş-koşu-bisiklet için bir parkur yer almaktadır.
                        </p>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="sidebar mt-50">


                        <div class="sidebar_list mt-30">
                            <ul class="archives_list">
                                <li><a href="#"><i class="fa fa-angle-right"></i> Hikayemiz </a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Yönetim</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Vakıf Bilim Kurulu </a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Vizyon</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Misyon </a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Temel Değerler </a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> İlkeler </a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Kalite, Çevre, İş Sağlığı ve Güvenlik Politikası </a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Kişisel Verileri Koruma Kanunu</a></li>
                            </ul>
                        </div>

                        <div class="sidebar_post mt-30">
                            <h5 class="sidebar_title">Öne Çıkan Haberler</h5>
                            <ul>
                                <li>
                                    <div class="single_sidebar_post d-flex mt-30">
                                        <div class="post_image">
                                            <img src="assets/images/blog-1.jpg" alt="blog">
                                        </div>
                                        <div class="post_content media-body">
                                            <h6 class="title"><a href="#">Otizmli Gençlere Üniversite Şansı!</a></h6>
                                            <p class="date">05 Oct 2019</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_sidebar_post d-flex mt-30">
                                        <div class="post_image">
                                            <img src="assets/images/blog-2.jpg" alt="blog">
                                        </div>
                                        <div class="post_content media-body">
                                            <h6 class="title"><a href="#">Otizmli Rabia 25 Yaşında, 23 Enstrüman Çalıyor!</a></h6>
                                            <p class="date">05 Oct 2019</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_sidebar_post d-flex mt-30">
                                        <div class="post_image">
                                            <img src="assets/images/blog-3.jpg" alt="blog">
                                        </div>
                                        <div class="post_content media-body">
                                            <h6 class="title"><a href="#">Türkiye'nin İlk Otizmli İlk Doktora Öğrencisi Buğra</a></h6>
                                            <p class="date">05 Oct 2019</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar_tag mt-30">
                            <h5 class="sidebar_title">{{ __('lang.etiketler') }}</h5>

                            <ul class="archives_tag">
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">LMS</a></li>
                                <li><a href="#">Learning</a></li>
                                <li><a href="#">Social</a></li>
                                <li><a href="#">Course</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
