@extends('site.layouts.master')

@section('maincontent')
    <section class="page_banner bg_cover" style="background-image: url({{ asset('assets/images/about_bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title">{{__('lang.bilim_kurulu')}}</h4>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="{{ url('/') }}">{{ __('lang.ana_sayfa') }}</a></li>
                            <li><a href="{{ route('vakif-bilim-kurulu') }}">{{__('lang.bilim_kurulu')}}</a></li>
                            <li><a class="active" href="#">{!! $team->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale') !!}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about_area pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single_courses courses_gray mt-30">
                        <div class="courses_image">
                            <img src="{{ asset('storage/'.$team->photo) }}" alt="team member">
                        </div>
                        <div class="courses_content">
                            <h4 class="title">{!! $team->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale') !!}</h4>
                            <div class="courses_author">
                                <div class="author_name">
                                    <p><i class="fa fa-map-marker"></i> {!! $team->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about_content mt-30">
                        <h3 class="title">{{ __('lang.ozgecmis') }}</h3>
                        <div class="mt-4">
                            {!! $team->getTranslatedAttribute('content', app()->getLocale(), 'fallbackLocale') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop 