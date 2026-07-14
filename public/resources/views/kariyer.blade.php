@extends('site.layouts.master')

@section('maincontent')
    <section class="page_banner bg_cover" style="background-image: url(assets/images/about_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title">{{__('lang.kariyer')}}</h4>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="{{'/'}}">{{__('lang.ana_sayfa')}}</a></li>
                            <li><a class="active" href="#">{{__('lang.kariyer')}}</a></li>
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
                <div class="col-lg-12">
                    <div class="contact_form mt-40">

                        <div class="row">
                            <div class="col-lg-10">
                                <div class="section_title pb-30">
                                    <h3 class="main_title">{{__('lang.kariyer_formu')}}</h3>
                                    <p>{{__('lang.kariyer_aciklama')}}</p>
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

                        <form action="{{ route('careerStore') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="text" name="name" placeholder="{{__('lang.isim_soyisim')}}">
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="email" name="email" placeholder="{{__('lang.eposta')}}">
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="text" name="phone" placeholder="{{__('lang.telefon')}}">
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <textarea name="content" placeholder="{{__('lang.mesaj')}}"></textarea>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <button class="main-btn">{{__('lang.gonder')}}</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
@stop
