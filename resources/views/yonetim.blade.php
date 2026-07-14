@extends('site.layouts.master')

@section('maincontent')

    <section class="page_banner bg_cover" style="background-image: url(assets/images/about_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title">{{__('lang.yonetim')}}</h4>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="#">{{__('lang.ana_sayfa')}}</a></li>
                            <li><a class="active" href="#">{{__('lang.yonetim')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="courses_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-20">
                        <h3 class="main_title">{{__('lang.yonetim_kurulu')}}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($teams as $team)
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_courses courses_gray mt-30">
                            <div class="courses_image">
                                <img src="{{asset('storage/'.$team->photo)}}" alt="courses">
                            </div>
                            <div class="courses_content" style="height: 110px;">

                                <h4 class="title"><a href="javascript:;">{{$team->name}}</a></h4>
                                <div class="courses_author d-flex">
                                    <div class="author_name media-body" >
                                        <a href="javascript:;"><i class="fa fa-map-marker "></i> {!! $team->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') !!}</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@stop
