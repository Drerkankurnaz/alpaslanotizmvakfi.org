<footer class="footer_area bg_cover" style="background-image: url({{asset('storage/app/public/site/images/footer_bg.jpg')}})">
    <div class="footer_widget pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer_about mt-50">
                        @if(app()->getLocale() == 'tr')
                                <a href="#"><img src="{{asset('assets/images/logo-white-2.png')}}" alt="logo" style="max-width: 90%;"></a>
                        @else
                            <a href="#"><img src="{{asset('assets/images/logo-white-2-en.png')}}" alt="logo" style="max-width: 90%;"></a>
                        @endif
                        <ul class="footer_social">
                            <li><a target="_blank" href="https://instagram.com/alpaslanotizmvakfi?igshid=MzRlODBiNWFlZA=="><i class="fa fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/alpaslanotizm"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/alpaslanotizm"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/alpaslanotizmvakfi "><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="footer_widget_wrapper d-flex flex-wrap">
                        <div class="footer_link mt-50">
                            <h5 class="footer_title">{{__('lang.hizli_menu')}}</h5>

                            <div class="footer_link_wrapper d-flex">
                                <ul class="link">
                                    <li><a href="{{'/'}}">{{__('lang.ana_sayfa')}}</a></li>
                                    <li><a href="{{route('hikayemiz')}}">{{ __('lang.hikayemiz') }}</a></li>
                                    <li><a href="{{route('vakif-bilim-kurulu')}}">{{ __('lang.vakif_bilim_kurulu') }}</a></li>
                                    <li><a href="{{route('vizyonumuz')}}">{{ __('lang.vizyon') }}</a></li>
                                    <li><a href="{{route('misyonumuz')}}">{{ __('lang.misyon') }}</a></li>
                                </ul>
                                <ul class="link">
                                    <li><a href="{{route('otizmspektrumbozuklugunedir')}}">{{ __('lang.otizm_spektrum_bozuklugu') }}</a></li>
                                    <li><a href="{{route('otizmspektrumbozuklugubelirtilerinelerdir')}}">{{ __('lang.otizm_spektrum_bozuklugu_belirtileri_nedir') }}</a></li>
                                    <li><a href="{{route('otizmspektrumbozuklugunedenleri')}}">{{ __('lang.otizm_spektrum_bozuklugu_nedenleri') }}</a></li>
                                    <li><a href="{{route('istatistik')}}">{{ __('lang.istatistik') }}</a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="footer_contact mt-50">
                            <h5 class="footer_title">{{__('lang.iletisim')}}</h5>

                            <ul class="contact">
                                <li>{{ __('lang.adres_c') }} </li>
                                <li>{{ __('lang.eposta') }} : info@alpaslanegitim.com</li>
                                <li>{{ __('lang.mobil_telefon') }}: 0533 051 30 19</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_copyright">
        <div class="container">
            <div class="footer_copyright_wrapper text-center d-md-flex justify-content-between">
                <div class="copyright">
                    <p>{{__('lang.tasarım_programlama')}} Otimeta</p>
                </div>
                <div class="copyright">
                    <p> {{__('lang.hak')}}</p>
                </div>
            </div>
        </div>
    </div>
</footer>
