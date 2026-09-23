@extends('site.layouts.master')

@section('maincontent')
    <link rel="stylesheet" href="{{ asset('assets/css/scholarship-wizard.css') }}">

    <section class="page_banner bg_cover" style="background-image: url(assets/images/about_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title">Yurt Dışı Öğrenci Başvurusu</h4>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="{{'/'}}">Ana Sayfa</a></li>
                            <li><a href="{{ route('scholarshipApplication.index') }}">Öğrenci Başvurusu</a></li>
                            <li><a class="active" href="#">Yurt Dışı</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact_area pt-80 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="scholarship-wizard">
                        <ul class="wizard-progress">
                            <li data-step="1" class="active">1. Burs Seçenekleri</li>
                            <li data-step="2">2. Öğrenci Bilgileri</li>
                            <li data-step="3">3. Belgeler</li>
                            <li data-step="4">4. Onay ve Sonuç</li>
                        </ul>

                        <form action="{{ route('scholarshipApplication.international.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- ADIM 1: Burs Seçenekleri --}}
                            <div class="wizard-step active" data-step="1">
                                <h4>Burs Seçenekleri</h4>
                                <div class="form-group">
                                    <div class="form-check mb-10">
                                        <input class="form-check-input" type="radio" name="scholarship_type" id="st_lisans" value="yurtdisi_lisans" required data-summary>
                                        <label class="form-check-label" for="st_lisans">Yurt Dışı Lisans Bursu</label>
                                    </div>
                                    <div class="form-check mb-10">
                                        <input class="form-check-input" type="radio" name="scholarship_type" id="st_lisansustu" value="yurtdisi_lisansustu" data-summary>
                                        <label class="form-check-label" for="st_lisansustu">Yurt Dışı Lisansüstü Bursu</label>
                                    </div>
                                    <div class="form-check mb-10">
                                        <input class="form-check-input" type="radio" name="scholarship_type" id="st_degisim" value="degisim_kisa_donem" data-summary>
                                        <label class="form-check-label" for="st_degisim">Değişim ve Kısa Dönem Programı</label>
                                    </div>
                                    <div class="form-check mb-10">
                                        <input class="form-check-input" type="radio" name="scholarship_type" id="st_dil" value="dil_hazirlik" data-summary>
                                        <label class="form-check-label" for="st_dil">Dil ve Hazırlık Desteği</label>
                                    </div>
                                </div>
                                <div class="wizard-actions justify-content-end">
                                    <button type="button" class="main-btn wizard-next" data-next="2">İleri</button>
                                </div>
                            </div>

                            {{-- ADIM 2: Öğrenci Bilgileri --}}
                            <div class="wizard-step" data-step="2">
                                <h4>Öğrenci Bilgileri</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>Adı</label>
                                            <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required data-summary>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>Soyadı</label>
                                            <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required data-summary>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>Doğum Yılı</label>
                                            <input type="number" class="form-control" name="birth_year" min="1950" max="{{ date('Y') }}" value="{{ old('birth_year') }}" required data-summary>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-4">
                                        <div class="single_form">
                                            <label>Öğrenim Görülen Ülke</label>
                                            <select class="form-control" name="study_country" required data-summary>
                                                <option value="">Seçiniz</option>
                                                @foreach($countries as $country)
                                                    <option value="{{ $country }}" {{ old('study_country') === $country ? 'selected' : '' }}>{{ $country }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single_form">
                                            <label>Şehir</label>
                                            <input type="text" class="form-control" name="study_city" value="{{ old('study_city') }}" required data-summary>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single_form">
                                            <label>Öğrenim Dili</label>
                                            <select class="form-control" name="study_language" required data-summary>
                                                <option value="">Seçiniz</option>
                                                <option value="ingilizce" {{ old('study_language') === 'ingilizce' ? 'selected' : '' }}>İngilizce</option>
                                                <option value="almanca" {{ old('study_language') === 'almanca' ? 'selected' : '' }}>Almanca</option>
                                                <option value="fransizca" {{ old('study_language') === 'fransizca' ? 'selected' : '' }}>Fransızca</option>
                                                <option value="turkce" {{ old('study_language') === 'turkce' ? 'selected' : '' }}>Türkçe</option>
                                                <option value="ispanyolca" {{ old('study_language') === 'ispanyolca' ? 'selected' : '' }}>İspanyolca</option>
                                                <option value="diger" {{ old('study_language') === 'diger' ? 'selected' : '' }}>Diğer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>Kayıtlı Olduğu Okul/Kurum</label>
                                            <input type="text" class="form-control" name="institution_name" value="{{ old('institution_name') }}" required data-summary>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>Eğitim Kademesi</label>
                                            <select class="form-control" name="education_level" required data-summary>
                                                <option value="">Seçiniz</option>
                                                <option value="Lise" {{ old('education_level') === 'Lise' ? 'selected' : '' }}>Lise</option>
                                                <option value="Ön Lisans" {{ old('education_level') === 'Ön Lisans' ? 'selected' : '' }}>Ön Lisans</option>
                                                <option value="Lisans" {{ old('education_level') === 'Lisans' ? 'selected' : '' }}>Lisans</option>
                                                <option value="Yüksek Lisans" {{ old('education_level') === 'Yüksek Lisans' ? 'selected' : '' }}>Yüksek Lisans</option>
                                                <option value="Doktora" {{ old('education_level') === 'Doktora' ? 'selected' : '' }}>Doktora</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>Sınıf/Yıl</label>
                                            <input type="text" class="form-control" name="grade_year" value="{{ old('grade_year') }}" required data-summary>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single_form">
                                            <label>Not Ortalaması</label>
                                            <select class="form-control" name="gpa_scale" required data-summary>
                                                <option value="">Seçiniz</option>
                                                <option value="4.00" {{ old('gpa_scale') === '4.00' ? 'selected' : '' }}>4.00 üzerinden</option>
                                                <option value="100" {{ old('gpa_scale') === '100' ? 'selected' : '' }}>100 üzerinden</option>
                                                <option value="diger" {{ old('gpa_scale') === 'diger' ? 'selected' : '' }}>Diğer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single_form">
                                            <label>Not Ortalaması Değeri</label>
                                            <input type="text" class="form-control" name="gpa_value" value="{{ old('gpa_value') }}" required data-summary>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Başka Kurumdan Alınan Burs/Kredi (Varsa)</label>
                                            <textarea class="form-control" name="other_scholarship_info" rows="2" data-summary>{{ old('other_scholarship_info') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>Kayıt Durumu</label>
                                            <select class="form-control" name="enrollment_status" required data-summary>
                                                <option value="">Seçiniz</option>
                                                <option value="kayitli" {{ old('enrollment_status') === 'kayitli' ? 'selected' : '' }}>Kayıtlı Öğrenci</option>
                                                <option value="kabul_bekliyor" {{ old('enrollment_status') === 'kabul_bekliyor' ? 'selected' : '' }}>Kabul Aldı Kayıt Bekliyor</option>
                                                <option value="basvuru_surecinde" {{ old('enrollment_status') === 'basvuru_surecinde' ? 'selected' : '' }}>Başvuru Sürecinde</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single_form">
                                            <label>Yıllık Öğrenim Ücreti</label>
                                            <input type="number" step="0.01" min="0" class="form-control" name="annual_tuition_amount" value="{{ old('annual_tuition_amount') }}" data-summary>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single_form">
                                            <label>Döviz</label>
                                            <select class="form-control" name="annual_tuition_currency" required data-summary>
                                                <option value="">Seçiniz</option>
                                                <option value="EUR" {{ old('annual_tuition_currency') === 'EUR' ? 'selected' : '' }}>EUR</option>
                                                <option value="USD" {{ old('annual_tuition_currency') === 'USD' ? 'selected' : '' }}>USD</option>
                                                <option value="GBP" {{ old('annual_tuition_currency') === 'GBP' ? 'selected' : '' }}>GBP</option>
                                                <option value="TL" {{ old('annual_tuition_currency') === 'TL' ? 'selected' : '' }}>TL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <h4 class="mt-30">Veli/Vasi Bilgileri</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>Yakınlık</label>
                                            <select class="form-control" name="guardian_relationship" required data-summary>
                                                <option value="">Seçiniz</option>
                                                <option value="anne" {{ old('guardian_relationship') === 'anne' ? 'selected' : '' }}>Anne</option>
                                                <option value="baba" {{ old('guardian_relationship') === 'baba' ? 'selected' : '' }}>Baba</option>
                                                <option value="yasal_vasi" {{ old('guardian_relationship') === 'yasal_vasi' ? 'selected' : '' }}>Yasal Vasi</option>
                                                <option value="kendisi" {{ old('guardian_relationship') === 'kendisi' ? 'selected' : '' }}>Öğrencinin Kendisi (18+)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>Aktif e-Posta</label>
                                            <input type="email" class="form-control" name="guardian_email" value="{{ old('guardian_email') }}" required data-summary>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>Aktif Telefon</label>
                                            <input type="tel" class="form-control" name="guardian_phone" value="{{ old('guardian_phone') }}" required data-summary>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Destek İhtiyacının Kısaca Anlatıldığı Alan</label>
                                            <textarea class="form-control" name="support_need_description" rows="4" maxlength="1000" required data-summary data-maxlength-counter="#support-need-counter-international">{{ old('support_need_description') }}</textarea>
                                            <span id="support-need-counter-international" class="char-counter">0/1000</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="wizard-actions">
                                    <button type="button" class="main-btn wizard-prev" data-prev="1">Geri</button>
                                    <button type="button" class="main-btn wizard-next" data-next="3">İleri</button>
                                </div>
                            </div>

                            {{-- ADIM 3: Belgeler --}}
                            <div class="wizard-step" data-step="3">
                                <h4>Belgeler</h4>
                                <p class="text-muted">Belgeler PDF olarak yüklenecek ve en fazla 5MB olacaktır. Eksik belge olması durumunda vakıf yeniden belge isteyebilir.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>Öğrenci Belgesi (Zorunlu)</label>
                                            <small class="d-block text-muted mb-5">Güncel dönem öğrenci/kayıt belgesi.</small>
                                            <input type="file" class="form-control-file" name="ogrenci_belgesi" accept="application/pdf" required data-summary>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>Transkript / Not Belgesi (Zorunlu)</label>
                                            <small class="d-block text-muted mb-5">Son dönem not ortalamasını gösteren belge, hazırlık ve 1. sınıfta giriş puanı sonuç belgesi.</small>
                                            <input type="file" class="form-control-file" name="transkript" accept="application/pdf" required data-summary>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>Hane Gelir Belgesi (Zorunlu)</label>
                                            <small class="d-block text-muted mb-5">Anne ve babanın maaş bordrosu, SGK dökümü veya gelir beyanı.</small>
                                            <input type="file" class="form-control-file" name="hane_gelir_belgesi" accept="application/pdf" required data-summary>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>Pasaport Kimlik Sayfası (Zorunlu)</label>
                                            <small class="d-block text-muted mb-5">Yalnızca T.C. vatandaşlığı ve kimlik doğrulaması için.</small>
                                            <input type="file" class="form-control-file" name="pasaport_kimlik_sayfasi" accept="application/pdf" required data-summary>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>Yabancı Dil Belgesi</label>
                                            <small class="d-block text-muted mb-5">IELTS, TOEFL, TestDaF vb. — lisans ve lisansüstü burslarında istenir.</small>
                                            <input type="file" class="form-control-file" name="yabanci_dil_belgesi" accept="application/pdf" data-summary>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>İkamet veya Vize Belgesi</label>
                                            <small class="d-block text-muted mb-5">Kabul aşamasındaki öğrencilerden istenmez.</small>
                                            <input type="file" class="form-control-file" name="ikamet_vize_belgesi" accept="application/pdf" data-summary>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <label>Referans Mektubu</label>
                                            <small class="d-block text-muted mb-5">İsteğe bağlı — öğretmen, danışman veya işveren.</small>
                                            <input type="file" class="form-control-file" name="referans_mektubu" accept="application/pdf" data-summary>
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-actions">
                                    <button type="button" class="main-btn wizard-prev" data-prev="2">Geri</button>
                                    <button type="button" class="main-btn wizard-next" data-next="4">İleri</button>
                                </div>
                            </div>

                            {{-- ADIM 4: Onay ve Sonuç --}}
                            <div class="wizard-step" data-step="4">
                                <h4>Başvurunuzu Kontrol Edin</h4>
                                <p class="text-muted">Göndermeden önce bilgilerinizi kontrol edin. Değişiklik yapmak isterseniz "Geri" butonuyla ilgili adıma dönebilirsiniz.</p>

                                <div class="summary-box">
                                    <dl class="row">
                                        <div class="col-md-6"><dt>Burs Türü</dt><dd data-summary-for="scholarship_type">-</dd></div>
                                        <div class="col-md-6"><dt>Ad Soyad</dt><dd><span data-summary-for="first_name">-</span> <span data-summary-for="last_name"></span></dd></div>
                                        <div class="col-md-6"><dt>Doğum Yılı</dt><dd data-summary-for="birth_year">-</dd></div>
                                        <div class="col-md-6"><dt>Öğrenim Görülen Ülke / Şehir</dt><dd><span data-summary-for="study_country">-</span> / <span data-summary-for="study_city"></span></dd></div>
                                        <div class="col-md-6"><dt>Öğrenim Dili</dt><dd data-summary-for="study_language">-</dd></div>
                                        <div class="col-md-6"><dt>Okul/Kurum</dt><dd data-summary-for="institution_name">-</dd></div>
                                        <div class="col-md-6"><dt>Eğitim Kademesi</dt><dd data-summary-for="education_level">-</dd></div>
                                        <div class="col-md-6"><dt>Sınıf/Yıl</dt><dd data-summary-for="grade_year">-</dd></div>
                                        <div class="col-md-6"><dt>Not Ortalaması</dt><dd><span data-summary-for="gpa_value">-</span> (<span data-summary-for="gpa_scale"></span>)</dd></div>
                                        <div class="col-md-6"><dt>Kayıt Durumu</dt><dd data-summary-for="enrollment_status">-</dd></div>
                                        <div class="col-md-6"><dt>Yıllık Öğrenim Ücreti</dt><dd><span data-summary-for="annual_tuition_amount">-</span> <span data-summary-for="annual_tuition_currency"></span></dd></div>
                                        <div class="col-md-6"><dt>Veli/Vasi Yakınlığı</dt><dd data-summary-for="guardian_relationship">-</dd></div>
                                        <div class="col-md-6"><dt>E-posta</dt><dd data-summary-for="guardian_email">-</dd></div>
                                        <div class="col-md-6"><dt>Telefon</dt><dd data-summary-for="guardian_phone">-</dd></div>
                                        <div class="col-md-12"><dt>Öğrenci Belgesi</dt><dd data-summary-for="ogrenci_belgesi">-</dd></div>
                                        <div class="col-md-12"><dt>Transkript</dt><dd data-summary-for="transkript">-</dd></div>
                                        <div class="col-md-12"><dt>Hane Gelir Belgesi</dt><dd data-summary-for="hane_gelir_belgesi">-</dd></div>
                                        <div class="col-md-12"><dt>Pasaport Kimlik Sayfası</dt><dd data-summary-for="pasaport_kimlik_sayfasi">-</dd></div>
                                        <div class="col-md-12"><dt>Yabancı Dil Belgesi</dt><dd data-summary-for="yabanci_dil_belgesi">-</dd></div>
                                        <div class="col-md-12"><dt>İkamet/Vize Belgesi</dt><dd data-summary-for="ikamet_vize_belgesi">-</dd></div>
                                        <div class="col-md-12"><dt>Referans Mektubu</dt><dd data-summary-for="referans_mektubu">-</dd></div>
                                    </dl>
                                </div>

                                <div class="consent-box form-check">
                                    <input class="form-check-input" type="checkbox" name="consent_document_transfer" id="consent_document_transfer" value="1" required>
                                    <label class="form-check-label" for="consent_document_transfer">
                                        Belgelerimin değerlendirme amacıyla yurt dışına aktarılabileceğini (ev sahibi kurumla teyit) biliyorum ve kabul ediyorum.
                                    </label>
                                </div>
                                <div class="consent-box form-check">
                                    <input class="form-check-input" type="checkbox" name="consent_accuracy" id="consent_accuracy" value="1" required>
                                    <label class="form-check-label" for="consent_accuracy">
                                        Verdiğim bilgilerin doğru olduğunu, yanlış beyan hâlinde bursun iptal edilebileceğini biliyorum.
                                    </label>
                                </div>

                                <div class="wizard-actions">
                                    <button type="button" class="main-btn wizard-prev" data-prev="3">Geri</button>
                                    <button type="submit" class="main-btn">Başvuruyu Gönder</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/js/scholarship-wizard.js') }}"></script>
@stop
