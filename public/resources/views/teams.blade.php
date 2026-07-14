@extends('site.layouts.master')

@section('maincontent')
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <h3>Ekibimiz</h3>
                <ul>
                    <li><a href="{{'/'}}">Ana Sayfa</a></li>
                    <li>-</li>
                    <li>Ekibimiz</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="teachers teachers-page padding-120">
        <div class="container">
            <div class="row">
                @foreach($teams as $team)
                   <div class="col-lg-4 col-xs-12">
                    <div class="teacher-item">
                        <div class="teacher-image">
                            <img src="{{asset('storage/'.$team->photo)}}" alt="teacher image" class="img-responsive">
                        </div>
                        <div class="teacher-content">
                            <h4>{{$team->name}} <span>{{$team->title}}</span></h4>
                            <a href="{{$team->url}}" target="_blank">Hakkında Daha Fazlası</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
