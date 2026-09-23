@extends('site.layouts.master')

@section('maincontent')
    <section class="page_banner bg_cover" style="background-image: url(assets/images/about_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title">Başvurunuz Alındı</h4>
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
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h3 class="main_title mb-20">Teşekkürler!</h3>
                    <p>
                        Başvurunuz başarıyla alınmıştır. Başvurunuz ekibimiz tarafından incelenecek
                        olup, gerekli durumlarda belirttiğiniz e-posta veya telefon üzerinden
                        sizinle iletişime geçilecektir.
                    </p>
                    <a href="{{ route('scholarshipApplication.index') }}" class="main-btn mt-20">Başvuru Sayfasına Dön</a>
                </div>
            </div>
        </div>
    </section>
@stop
