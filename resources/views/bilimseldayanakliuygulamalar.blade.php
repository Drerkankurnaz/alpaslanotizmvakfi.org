@extends('site.layouts.master')

@section('maincontent')

    <section class="page_banner bg_cover" style="background-image: url(assets/images/about_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title">{!! $autism->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') !!}</h4>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="#">{{__('lang.ana_sayfa')}}</a></li>
                            <li><a class="active" href="javascript:;">{!! $autism->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') !!}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog_details_page pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_details mt-50">
                        {!! $autism->getTranslatedAttribute('content', app()->getLocale(), 'fallbackLocale') !!}


                        <div class="details_image" style="margin-top: 30px;">
                            <img src="{{asset('storage/'.$autism->photo)}}" alt="blog">
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="sidebar mt-50">


                        @include('site.layouts.menu')



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
