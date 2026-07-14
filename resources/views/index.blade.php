@extends('site.layouts.master')

@section('maincontent')
    <section class="slider_area slider-active">
        @foreach($slides as $slide)
            <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url({{asset('assets/images/slide/slide-1.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider_content text-center">
                                <h4 class="sub_title" data-animation="fadeInUp" data-delay="0.2s">{{ __('lang.welcome') }}
                                </h4>
                                <h2 class="main_title" data-animation="fadeInUp" data-delay="0.5s"> <span>Alpaslan</span> {{ __('lang.otizm_vakfi') }}</h2>
                                <p data-animation="fadeInUp" data-delay="0.8s">
                                    {!! $slide->getTranslatedAttribute('content', app()->getLocale(), 'fallbackLocale') !!}
                                </p>
                                <a class="main-btn" href="{{route('hikayemiz')}}" data-animation="fadeInUp" data-delay="1.1s">{{ __('lang.hakkimizda') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <section class="features_area ">
        <div class="container">
            <div class="features_wrapper">
                <div class="row no-gutters">
                    <div class="col-md-4 features_col">
                        <div class="single_features text-center"  style="height: 350px;">
                            <div class="features_icon">
                                <img src="{{asset('assets/images/f-icon-1.png')}}" alt="Icon">
                            </div>
                            <div class="features_content">
                                <h4 class="features_title"><a href="#">{{__('lang.1_title')}}</a></h4>
                                <p>{{__('lang.1_content')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 features_col">
                        <div class="single_features text-center"  style="height: 350px;">
                            <div class="features_icon">
                                <img src="{{asset('assets/images/f-icon-2.png')}}" alt="Icon">
                            </div>
                            <div class="features_content">
                                <h4 class="features_title"><a href="#">{{__('lang.2_title')}}</a></h4>
                                <p>{{__('lang.2_content')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 features_col" >
                        <div class="single_features text-center" style="height: 350px;">
                            <div class="features_icon">
                                <img src="{{asset('assets/images/f-icon-3.png')}}" alt="Icon">
                            </div>
                            <div class="features_content">
                                <h4 class="features_title"><a href="#">{{__('lang.3_title')}}</a></h4>
                                <p>{{__('lang.3_content')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-20">
                        <h3 class="main_title">{{ __('lang.hizmetlerimiz') }}</h3>
                        <p>{{ __('lang.hizmetSubTitle') }}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-7">
                        <div class="single_blog mt-30">
                            <div class="blog_image">
                                <img src="{{asset('storage/'.$service->photo)}}" alt="blog">
                            </div>
                            <div class="blog_content" style="padding-top: 90px;">
                                <div class="blog_content_wrapper">
                                    <h4 class="blog_title"><a href="{{route('hizmet', ['serviceId' => $service->title])}}"> {!! $service->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') !!} </a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    

    <section class="about_area pt-80">
        <img class="shap_1" src="{{asset('assets/images/shape/shape-1.png')}}" alt="shape">
        <img class="shap_2" src="{{asset('assets/images/shape/shape-2.png')}}" alt="shape">
        <img class="shap_3" src="{{asset('assets/images/shape/shape-3.png')}}" alt="shape">
        <img class="shap_4" src="{{asset('assets/images/shape/shape-4.png')}}" alt="shape">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_content mt-45">
                        <h5 class="about_title">{{ __('lang.alpaslan_vakif') }}</h5>
                        <p class="text">{{ __('lang.alpaslan_vakif_content') }}</p>
                        <a href="{{route('hikayemiz')}}" class="main-btn">{{__('lang.hakkimizda')}}</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_image mt-50">
                        <img src="{{asset('assets/images/about-1.jpg')}}" alt="about" class="about_image-1">
                        <img src="{{asset('assets/images/about-2.jpg')}}" alt="about" class="about_image-2">
                        <img src="{{asset('assets/images/about-3.jpg')}}" alt="about" class="about_image-3">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="about_area_2 d-flex flex-wrap ">
        <div class="about_video bg_cover" style="background-image: url({{asset('assets/images/video-bg.jpg')}})">
            <div class="video">
                <a class="video_play" href="https://www.youtube.com/watch?v=JuKV8X1F_ZU&ab_channel=AlpaslanOtizmVakf%C4%B1" target="_blank"><i class="fa fa-play"></i></a>
            </div>
        </div>

        <div class="about_content_2">
            <div class="single_about_2 d-flex flex-wrap">
                <div class="about_2_content">
                    <div class="about_2_content_wrapper">
                        <h4 class="title"><a href="#">{{__('lang.hp_title_one')}}</a></h4>
                        <p>{{__('lang.hp_content_one')}}</p>
                    </div>
                </div>
                <div class="about_2_image bg_cover" style="background-image: url({{asset('assets/images/about-4.jpg')}})"></div>
            </div>

            <div class="single_about_2 d-flex flex-wrap">
                <div class="about_2_content order-md-last">
                    <div class="about_2_content_wrapper">
                        <h4 class="title"><a href="#">{{__('lang.hp_title_two')}}</a></h4>
                        <p>{{__('lang.hp_content_two')}}</p>
                    </div>
                </div>
                <div class="about_2_image bg_cover order-md-first" style="background-image: url({{asset('assets/images/about-5.jpg')}})"></div>
            </div>
        </div>
    </section>

    <section class="why_choose_area pt-120 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why_choose_content">
                        <div class="section_title pb-20">
                            <h3 class="main_title" style="font-size: 36px">{{__('lang.neden_alpaslan')}}</h3>
                            <p>{{__('lang.neden_alpaslan_content')}}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="why_choose_image d-none d-lg-table">
            <div class="image">
                <img src="{{asset('assets/images/choose_bg.png')}}" alt="">
            </div>
        </div>
    </section>

    <section class="program_area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title section_title_2 text-center pb-50">
                        <h3 class="main_title">{{__('lang.vizyon')}}</h3>
                        <p>  {!! $aboutIlke->getTranslatedAttribute('content', app()->getLocale(), 'fallbackLocale') !!}</p>

                    </div>
                </div>
            </div>
            <div class="row no-gutters program_wrapper">
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-1 d-flex flex-wrap">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="{{asset('assets/images/p-icon-1.png')}}" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="javascript:;">{{__('lang.bilimsel')}}</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-2 d-flex flex-wrap program_4">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="{{asset('assets/images/p-icon-2.png')}}" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="javascript:;">{{__('lang.evrensel')}}</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-3 d-flex flex-wrap program_3">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="{{asset('assets/images/p-icon-3.png')}}" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="javascript:;">{{__('lang.veriye_dayali')}} </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-4 d-flex flex-wrap program_2 program_3 program_4">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="{{asset('assets/images/p-icon-4.png')}}" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="javascript:;">{{__('lang.disiplinler_arasi')}}</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-5 d-flex flex-wrap program_2">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="{{asset('assets/images/p-icon-5.png')}}" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="javascript:;">{{__('lang.aile_merkezli')}} </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 program_col">
                    <div class="single_program program_color-6 d-flex flex-wrap program_2 program_4">
                        <div class="program_icon">
                            <div class="icon_wrapper">
                                <img src="{{asset('assets/images/p-icon-6.png')}}" alt="Icon">
                            </div>
                        </div>
                        <div class="program_content">
                            <div class="content_wrapper">
                                <h5 class="title"><a href="javascript:;">{{__('lang.yenilikçi')}}</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="register_area bg_cover" style="background-image: url({{asset('assets/images/register_bg.jpg')}})">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="register_countdown_content">
                        <h4 class="title">{{__('lang.birlikte_gelisiyoruz')}}</h4>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="register_form text-center">
                        <div class="register_form_title">
                            <h4 class="title">{{__('lang.iletisim_formu')}}</h4>
                        </div>
                        <div class="register_form_wrapper">
                            <form action="#">
                                <div class="single_form">
                                    <input type="text" placeholder="{{__('lang.isim_soyisim')}}">
                                </div>
                                <div class="single_form">
                                    <input type="text" placeholder="{{__('lang.eposta')}} ">
                                </div>
                                <div class="single_form">
                                    <input type="text" placeholder="{{__('lang.telefon')}}">
                                </div>
                                <div class="single_form">
                                    <textarea placeholder="{{__('lang.mesaj')}}"></textarea>
                                </div>
                                <div class="single_form">
                                    <button class="main-btn">{{__('lang.gonder')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="cookieAlert" class="fixed-bottom mb-3 mr-3" style="display: none;">
        <div class="alert alert-info rounded-pill d-flex justify-content-between align-items-center">
            Bu web sitesi deneyiminizi geliştirmek için çerezler kullanmaktadır. Devam ederek çerez kullanımımızı kabul etmiş olursunuz.
            <button type="button" class="close" aria-label="Close" onclick="closeCookieAlert()">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <script>
        function closeCookieAlert() {
            document.getElementById("cookieAlert").style.display = "none";
            localStorage.setItem("cookieAlertDismissed", "true");
        }

        window.onload = function() {
            if (!localStorage.getItem("cookieAlertDismissed")) {
                document.getElementById("cookieAlert").style.display = "block";
            }
        };
    </script>






@stop
