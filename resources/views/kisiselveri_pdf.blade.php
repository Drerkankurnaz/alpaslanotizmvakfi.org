<!DOCTYPE html>
<html>
<head>
    <title>Kişisel Veri Koruma</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif; /* Bu, genel bir fonttur ve çoğu karakter setini destekler. İstediğiniz başka bir fontu da kullanabilirsiniz. */
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: bold;
        }
        .blog_details {
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <div class="header">
        {{__('lang.kisisel_verileri_koruma_kanunu')}}
    </div>

    <div class="blog_details">
        {!! $about->getTranslatedAttribute('content', app()->getLocale(), 'fallbackLocale') !!}
    </div>

</body>
</html>
