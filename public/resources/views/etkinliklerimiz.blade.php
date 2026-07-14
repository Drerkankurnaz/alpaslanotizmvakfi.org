

@extends('site.layouts.master')

@section('maincontent')

    <section class="page_banner bg_cover" style="background-image: url(../assets/images/about_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title" style="font-size:26;">  {{__('lang.etkinliklerimiz')}}  </h4>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="{{'/'}}">{{__('lang.ana_sayfa')}}</a></li>
                            <li><a class="active" href="#"> {{__('lang.etkinliklerimiz')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_list_page pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach($services as $service)
                        <div class="single_blog_list mt-50">
                            <div class="blog_list_image">
                                <img src="{{asset('storage/'.$service->photo)}}" alt="etkinlik">
                            </div>
                            <div class="blog_list_content">
                                <div class="blog_content_wrapper">
                                    <ul class="blog_meta">
                                        <li><a href="{{ route('etkinlik', ['id' => $service->title]) }}">{{ Carbon\Carbon::parse($service->date)->format('d.m.Y') }}
                                        </a></li>
                                    </ul>
                                    <h4 class="blog_title"><a href="{{route('etkinlik', ['id' => $service->title])}}">{!! $service->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') !!}</a></h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="col-lg-4">
                    <div class="sidebar mt-50">
                        
                        <div class="sidebar_post mt-30">
                            <h5 class="sidebar_title">{{__('lang.son_etkinlik')}}</h5>
                            <ul>
                                @foreach($services as $service)
                                    <li>
                                        <div class="single_sidebar_post d-flex mt-30">
                                            <div class="post_image">
                                                <img src="{{asset('storage/'.$service->photo)}}" alt="blog">
                                            </div>
                                            <div class="post_content media-body">
                                                <h6 class="title"><a href="{{route('etkinlik', ['id' => $service->title])}}">{!! $service->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') !!}</a></h6>
                                                <p class="date">{{ Carbon\Carbon::parse($service->date)->format('d.m.Y') }}</p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <div class="sidebar_tag mt-30">
                            <h5 class="sidebar_title">Tags</h5>
                            
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
