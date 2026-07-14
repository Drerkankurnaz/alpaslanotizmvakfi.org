<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PearQuest Demo V1">
    <meta name="author" content="Ansonika">
    <title>Pear Quest | Home Page</title>

    <link rel="shortcut icon" href="{{asset('storage/app/public/site/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('storage/app/public/site/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('storage/app/public/site/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('storage/app/public/site/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('storage/app/public/site/img/apple-touch-icon-144x144-precomposed.png')}}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="{{asset('storage/app/public/site/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('storage/app/public/site/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('storage/app/public/site/css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('storage/app/public/site/css/icon_fonts/css/all_icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('storage/app/public/site/css/custom.css')}}" rel="stylesheet">
    <script src="{{asset('storage/app/public/site/js/modernizr.js')}}"></script>

</head>

<body>

<div id="page">

    @include('site.layouts.header')

    @yield('maincontent')

    @include('site.layouts.footer')

</div>

<script src="{{asset('storage/app/public/site/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('storage/app/public/site/js/common_scripts.js')}}"></script>
<script src="{{asset('storage/app/public/site/js/main.js')}}"></script>
<script src="{{asset('storage/app/public/site/assets/validate.js')}}"></script>


<script src="{{asset('storage/app/public/site/js/video_header.js')}}"></script>
<script>
    HeaderVideo.init({
        container: $('.header-video'),
        header: $('.header-video--media'),
        videoTrigger: $("#video-trigger"),
        autoPlayVideo: true
    });
</script>

</body>

</html>
