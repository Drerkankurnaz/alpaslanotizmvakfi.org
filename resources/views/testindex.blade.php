@extends('site.layouts.master')

@section('maincontent')
    <main>
        <section class="header-video">
            <div id="hero_video">
                <div>
                    <h3><strong>Welcome To</strong><br>PearQuest</h3>
                    <p>"<strong>Real </strong>experiences from <strong>real </strong>college students." </p>
                </div>
                <a href="#first_section" class="btn_explore hidden_tablet"><i class="ti-arrow-down"></i></a>
            </div>
            <img src="{{asset('storage/app/public/site/img/video_fix.png')}}" alt="" class="header-video--media" data-video-src="storage/app/public/site/video/intro" data-teaser-source="storage/app/public/site/video/intro" data-provider="" data-video-width="1920" data-video-height="960">
        </section>

        <ul id="grid_home" class="clearfix">
            <li>
                <a href="{{route('applicant')}}" class="img_container">
                    <img src="storage/app/public/site/1.jpg" alt="">
                    <div class="short_info">
                        <h3><strong>I am applying for college</strong></h3>
                        <div><span class="btn_1 rounded">Register Now</span></div>
                    </div>
                </a>
            </li>

            <li>
                <a href="{{route('mentor')}}" class="img_container">
                    <img src="{{asset('storage/app/public/site/2.jpg')}}" alt="">
                    <div class="short_info">
                        <h3><strong>I am a current college student</strong></h3>
                        <div><span class="btn_1 rounded">Register Now</span></div>
                    </div>
                </a>
            </li>

            <li>
                <a href="{{route('applicant')}}" class="img_container">
                    <img src="{{asset('storage/app/public/site/3.jpg')}}" alt="">
                    <div class="short_info">
                        <h3><strong>I am a parent</strong></h3>
                        <div><span class="btn_1 rounded">Register Now</span></div>
                    </div>
                </a>
            </li>
        </ul>

    </main>

@stop
