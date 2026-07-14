@extends('site.layouts.master')

@section('maincontent')
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <h3>KİD-GED İşlevleri</h3>
                <ul>
                    <li><a href="{{'/'}}">Ana Sayfa</a></li>
                    <li>-</li>
                    <li>KİD-GED İşlevleri</li>
                </ul>
            </div><!-- container -->
        </div><!-- overlay -->
    </section><!-- page header -->


    <section class="singel-class padding-120">
        <div class="container">
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-content">
                            <h3>{{$functions->title}}</h3>

                            <p>{!! $functions->content !!}</p>
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
                        </div><!-- content-bottom -->
                    </div><!-- single post -->
                </div>
        </div>
    </section>
@stop
