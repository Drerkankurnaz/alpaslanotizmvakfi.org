@extends('site.layouts.master')

@section('maincontent')
    <section class="page_banner bg_cover" style="background-image: url(assets/images/about_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title">Öğrenci Başvurusu</h4>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="{{'/'}}">Ana Sayfa</a></li>
                            <li><a class="active" href="#">Öğrenci Başvurusu</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact_area pt-80 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section_title text-center pb-40">
                        <h3 class="main_title">Başvuru Türünüzü Seçin</h3>
                        <p>Burs başvurunuza başlamak için aşağıdaki iki seçenekten size uygun olanı seçin.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 mb-4">
                    <div class="single_form text-center p-40" style="border:1px solid #eee; border-radius:8px; height:100%;">
                        <h4 class="mb-20">Yurt İçi Öğrenci Başvurusu</h4>
                        <p>Türkiye'de öğrenim gören lise, lisans veya lisansüstü öğrencileri için burs başvurusu.</p>
                        <a href="{{ route('scholarshipApplication.domestic') }}" class="main-btn mt-20">Başvuruya Başla</a>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="single_form text-center p-40" style="border:1px solid #eee; border-radius:8px; height:100%;">
                        <h4 class="mb-20">Yurt Dışı Öğrenci Başvurusu</h4>
                        <p>Yurt dışında öğrenim gören/görecek öğrenciler, değişim programı ve dil/hazırlık desteği başvuruları.</p>
                        <a href="{{ route('scholarshipApplication.international') }}" class="main-btn mt-20">Başvuruya Başla</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
