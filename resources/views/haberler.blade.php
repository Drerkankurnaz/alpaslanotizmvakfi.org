@extends('site.layouts.master')

@section('maincontent')


    <section class="page_banner bg_cover" style="background-image: url(assets/images/about_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title">{{__('lang.haberler')}}</h4>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="{{'/'}}">{{__('lang.ana_sayfa')}}</a></li>
                            <li><a class="active" href="#">{{__('lang.haberler')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($contents as $content)
                    <div class="col-lg-4 col-md-7">
                        <div class="single_blog mt-30">
                            <div class="blog_image">
                                <img src="{{asset('storage/'.$content->photo)}}" alt="blog">

                            </div>
                            <div class="blog_content" style="padding-top: 90px;">
                                <div class="blog_content_wrapper">
                                    <h4 class="blog_title"><a href="{{route('haber', ['id' => $content->title])}} ">{!! $content->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') !!}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
