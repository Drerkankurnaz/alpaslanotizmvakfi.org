<section class="header_area">
    <div class="header_top">
        <div class="container">
            <div class="header_top_wrapper d-flex justify-content-center justify-content-md-between">
                <div class="header_top_info d-none d-md-block">
                    <ul>
                        <li><img src="{{asset('assets/images/call.png')}}" alt="call"><a href="#">+90 533 051 30 19</a></li>
                        <li><img src="{{asset('assets/images/mail.png')}}" alt="mail"><a href="#">info@alpaslanotizm.com</a></li>
                    </ul>
                </div>
                <div class="header_top_login">
                    <ul>
                        <li><a class="main-btn" href="{{route('iletisim')}}"><i class="fa fa-user-o"></i>{{ __('lang.bize_ulasin') }}</a></li>
                        <li><a href="{{ route('lang.switch', 'en') }}">{{ __('lang.english') }}</a></li>
                        <li><a href="{{ route('lang.switch', 'tr') }}">{{ __('lang.turkish') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header_menu">
        <div class="container" style="max-width: max-content;">
            <nav class="navbar navbar-expand-lg">
               
                <a class="navbar-brand" href="{{'/'}}">
                    @if(app()->getLocale() == 'tr')
                        <img src="{{ asset('assets/images/logotr.png') }}" alt="Türkçe Logo">
                    @else
                        <img src="{{ asset('assets/images/logoen.png') }}" alt="İngilizce Logo">
                    @endif
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">

                        <li>
                            <a href="{{'/'}}">{{ __('lang.ana_sayfa') }}</a>
                        </li>
                        <li>
                            <a href="javascript:;">{{ __('lang.hakkimizda') }} <i class="fa fa-chevron-down"></i></a>

                            <ul class="sub-menu">
                                <li><a href="{{route('hikayemiz')}}">{{ __('lang.hikayemiz') }}</a></li>
                                <li><a href="{{route('yonetim')}}">{{ __('lang.yonetim') }}</a></li>
                                <li><a href="{{route('vakif-bilim-kurulu')}}">{{ __('lang.vakif_bilim_kurulu') }}</a></li>
                                <li><a href="{{route('vizyonumuz')}}">{{ __('lang.vizyon') }}</a></li>
                                <li><a href="{{route('misyonumuz')}}">{{ __('lang.misyon') }}</a></li>
                                <li><a href="{{route('temeldegerler')}}">{{ __('lang.temel_degerler') }}</a></li>
                                <li><a href="{{route('ilkeler')}}">{{ __('lang.ilkeler') }}</a></li>
                                <li><a href="{{route('kalite')}}">{{ __('lang.kalite_cevre_is_sagligi_ve_guvenlik_politikasi') }}</a></li>
                                <li><a href="{{route('kisiselverilerikorumakanunu')}}">{{ __('lang.kisisel_verileri_koruma_kanunu') }}</a></li>
                                 <li><a href="{{route('belgeler')}}">Belgeler</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">{{ __('lang.otizm_spektrum_bozuklugu') }} <i class="fa fa-chevron-down"></i></a>

                            <ul class="sub-menu">

                                <li><a href="{{route('otizmspektrumbozuklugunedir')}}">{{ __('lang.otizm_spektrum_bozuklugu') }}</a></li>
                                <li><a href="{{route('otizmspektrumbozuklugubelirtilerinelerdir')}}">{{ __('lang.otizm_spektrum_bozuklugu_belirtileri_nedir') }}</a></li>
                                <li><a href="{{route('otizmspektrumbozuklugunedenleri')}}">{{ __('lang.otizm_spektrum_bozuklugu_nedenleri') }}</a></li>
                                <li><a href="{{route('istatistik')}}">{{ __('lang.istatistik') }}</a></li>
                                <li><a href="{{route('bilimseldayanakliuygulamalar')}}">{{ __('lang.bilimsel_kaynakli_uygulamalar') }}</a></li>
                                <li><a href="{{route('uzmanlaregitimler')}}">{{ __('lang.uzmanlar_icin_egitim_icerikleri') }}</a></li>
                                <li><a href="{{route('aileleregitimler')}}">{{ __('lang.aileler_icin_egitim_icerikleri') }}</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">{{ __('lang.hizmetlerimiz') }} <i class="fa fa-chevron-down"></i></a>

                            <ul class="sub-menu">
                                @foreach($common->services as $service)
                                    <li><a href="{{route('hizmet', ['serviceId' => $service->title])}}">{!! $service->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') !!}</a></li>
                                @endforeach

                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">{{ __('lang.okulumuz') }} <i class="fa fa-chevron-down"></i></a>

                            <ul class="sub-menu">
                                @foreach($common->schools as $school)
                                <li><a href="{{route('okulumuz', ['id' => $school->title])}}">{!! $school->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') !!}</a></li>
                                @endforeach
                                <li>
                                    <a href="{{route('egitimKadrosu')}}">{{ __('lang.egitim_kadromuz') }}</a>
                                </li>
                                <li>
                                    <a href="{{route('idariKadro')}}">{{ __('lang.idari_kadromuz') }}</a>
                                </li>
                                <li>
                                    <a href="https://aovyayinevi.com" target="_blank">{{ __('lang.aov_yayinevi') }}</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="{{route('duyurular')}}">{{ __('lang.duyurular') }}</a>
                        </li>
                        <!--====== Blog List Page PART START
                        <li>
                            <a href="javascript:;">{{ __('lang.kuruluslarimiz') }} <i class="fa fa-chevron-down"></i></a>

                            <ul class="sub-menu">
                                <li><a href="courses.html">{{ __('lang.alpaslan_ozel_egitim_ve_rehabilitasyon_merkezi') }}</a></li>
                                <li><a href="courses-details.html">{{ __('lang.alpaslan_otizm_vakfi_yayinlari') }}</a></li>
                                <li><a href="courses-details.html">{{ __('lang.alpaslan_egitim_ve_danismanlik_as') }}</a></li>
                            </ul>
                        </li>
                        ======-->
                        <li>
                            <a href="{{route('kariyer')}}">{{ __('lang.kariyer') }}</a>
                        </li>
                        <li>
                            <a href="{{route('iletisim')}}">{{ __('lang.iletisim') }}</a>
                        </li>
                    </ul>


                    


                </div>


            </nav>
        </div>
    </div>
</section>
