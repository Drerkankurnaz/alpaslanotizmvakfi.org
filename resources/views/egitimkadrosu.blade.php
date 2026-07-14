@extends('site.layouts.master')

@section('maincontent')
<style>
    .courses_image img {
        width: 100%; /* Konteynere sığdır */
        height: 200px; /* Sabit bir yükseklik belirle */
        object-fit: cover; /* Görüntüyü kırpmadan orantılı şekilde sığdır */
        border-radius: 8px; /* Kenarları yuvarlatmak için */
    }
</style>

    <section class="page_banner bg_cover" style="background-image: url(assets/images/about_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title">{{__('lang.egitim_kadromuz')}}</h4>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="#">{{__('lang.ana_sayfa')}}</a></li>
                            <li><a class="active" href="#">{{__('lang.egitim_kadromuz')}}</a></li>
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
                        <h3 class="main_title">{{__('lang.egitim_kadromuz')}}</h3>
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
                            <div class="courses_content">

                                <h4 class="title">{{$team->name}}</h4>
                                <div class="courses_author d-flex">
                                    <div class="author_name media-body" >
                                      <i class="fa fa-map-marker "></i> {!! $team->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') !!}
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
