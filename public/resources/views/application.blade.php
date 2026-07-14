@extends('site.layouts.master')

@section('maincontent')
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <h3>Uygulama Alanları</h3>
                <ul>
                    <li><a href="{{'/'}}">Ana Sayfa</a></li>
                    <li>-</li>
                    <li>Uygulama Alanları</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="singel-class padding-120">
        <div class="container">
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-content">
                            <h3>{{$application->title}}</h3>

                            <p>{!! $application->content !!}</p>
                        </div>
                        <div class="content-bottom">
                            <ul class="post-share">
                                <li><span class="flaticon-share"></span> Share :</li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </section>
@stop
