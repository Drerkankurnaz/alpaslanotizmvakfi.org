@extends('site.layouts.master')

@section('maincontent')
    <section class="page_banner bg_cover" style="background-image: url(assets/images/about_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title">{{__('lang.iletisim')}}</h4>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="{{'/'}}">{{__('lang.ana_sayfa')}}</a></li>
                            <li><a class="active" href="#">{{__('lang.iletisim')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section class="contact_area pt-80 pb-130">
        <div class="services_shape_1" style="background-image: url(assets/images/shape/shape-12.png)"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact_form mt-40">

                        <div class="row">
                            <div class="col-lg-10">
                                <div class="section_title pb-30">
                                    <h3 class="main_title">{{__('lang.bize_ulasin')}}</h3>
                                </div>
                            </div>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contactStore') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="text" name="name" placeholder="{{__('lang.isim_soyisim')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="email" name="email" placeholder="{{__('lang.eposta')}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="text" name="phone" placeholder="{{__('lang.telefon')}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <textarea name="content" placeholder="{{__('lang.mesaj')}}"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <button class="main-btn">{{__('lang.gonder')}}</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div> <!-- contact form -->
                </div>
                <div class="col-lg-4">
                    <div class="contact_info pt-20">
                        <ul>
                            <li>
                                <div class="single_info d-flex align-items-center mt-30">
                                    <div class="info_icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="info_content media-body">
                                        <p> {{ __('lang.adres_c') }}</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>

                            <li>
                                <div class="single_info d-flex align-items-center mt-30">
                                    <div class="info_icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="info_content media-body">
                                        <p>info@alpaslanegitim.com</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                        </ul>
                    </div> <!-- contact info -->
                    <div class="contact_map mt-50">
                        <div class="gmap_canvas">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12100.577693063544!2d30.2268066!3d40.6928168!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cca901b070e4e1%3A0x1d79f483bde9c9d4!2sAlpaslan%20Otizm%20Vakf%C4%B1!5e0!3m2!1str!2str!4v1692806253921!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div> <!-- contact map -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
@stop
