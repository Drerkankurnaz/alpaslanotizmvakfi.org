<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Storage;

// Kariyer başvuru route'u
Route::post('/kariyer-basvuru', [SiteController::class, 'careerStore'])->name('careerStore');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/storage/{path}', function ($path) {
    $file = Storage::disk('public')->get($path);
    $type = Storage::disk('public')->mimeType($path);
    return response($file, 200)->header("Content-Type", $type);
})->where('path', '.*');

Route::get('/',[SiteController::class, 'home']);
Route::get('/lang/{lang}',[\App\Http\Controllers\LanguageController::class, 'switchLang'])->name('lang.switch');
Route::get('/home',[SiteController::class, 'home']);
Route::get('/hikayemiz', [SiteController::class, 'hikayemiz'])->name('hikayemiz');
Route::get('/yonetim', [SiteController::class, 'yonetim'])->name('yonetim');
Route::get('/egitim-kadromuz', [SiteController::class, 'egitimKadrosu'])->name('egitimKadrosu');
Route::get('/idari-kadromuz', [SiteController::class, 'idariKadro'])->name('idariKadro');
Route::get('/yonetim/{id}', [SiteController::class, 'yonetimSıngle'])->name('yonetimSıngle');
Route::get('/vakif-bilim-kurulu', [SiteController::class, 'bilimKurulu'])->name('vakif-bilim-kurulu');
Route::get('/vakif-bilim-kurulu/{id}', [SiteController::class, 'bilimKuruluDetay'])->name('bilimKuruluDetay');
Route::get('/vizyonumuz', [SiteController::class, 'vizyonumuz'])->name('vizyonumuz');
Route::get('/misyonumuz', [SiteController::class, 'misyonumuz'])->name('misyonumuz');
Route::get('/temeldegerler', [SiteController::class, 'temeldegerler'])->name('temeldegerler');
Route::get('/ilkeler', [SiteController::class, 'ilkeler'])->name('ilkeler');
Route::get('/kalite-cevre-is-sagligi-ve-guvenligi-politikasi', [SiteController::class, 'kalite'])->name('kalite');
Route::get('/kisisel-verileri-koruma-kanunu', [SiteController::class, 'kisiselverilerikorumakanunu'])->name('kisiselverilerikorumakanunu');

Route::get('/otizm-spektrum-bozuklugu-nedir', [SiteController::class, 'otizmspektrumbozuklugunedir'])->name('otizmspektrumbozuklugunedir');
Route::get('/otizm-spektrum-bozuklugu-belirtileri-nelerdir', [SiteController::class, 'otizmspektrumbozuklugubelirtilerinelerdir'])->name('otizmspektrumbozuklugubelirtilerinelerdir');
Route::get('/otizm-spektrum-bozuklugu-nedenleri', [SiteController::class, 'otizmspektrumbozuklugunedenleri'])->name('otizmspektrumbozuklugunedenleri');
Route::get('/istatistik', [SiteController::class, 'istatistik'])->name('istatistik');
Route::get('/bilimsel-dayanakli-uygulamalar', [SiteController::class, 'bilimseldayanakliuygulamalar'])->name('bilimseldayanakliuygulamalar');
Route::get('/uzmanlar-icin-egitimler', [SiteController::class, 'uzmanlaregitimler'])->name('uzmanlaregitimler');
Route::get('/uzmanlar-icin-egitim/{educationId}', [SiteController::class, 'uzmanlaregitim'])->name('uzmanlaregitim');
Route::get('/aileler-icin-egitimler', [SiteController::class, 'aileleregitimler'])->name('aileleregitimler');
Route::get('/aileler-icin-egitim/{parentId}', [SiteController::class, 'aileleregitim'])->name('aileleregitim');
Route::post('/iletisim-kaydet', [SiteController::class, 'contactStore'])->name('contactStore');
Route::get('/hizmetler', [SiteController::class, 'hizmetler'])->name('hizmetler');
Route::get('/hizmet/{serviceId}', [SiteController::class, 'hizmet'])->name('hizmet');
Route::get('/arastırmalar', [SiteController::class, 'arastırmalar'])->name('arastırmalar');
Route::get('/arastırma/{id}', [SiteController::class, 'arastırma'])->name('arastırma');
Route::get('/okulumuz/{id}', [SiteController::class, 'okulumuz'])->name('okulumuz');
Route::get('/burs-ve-egitim-destegi', [SiteController::class, 'burs-ve-egitim-destegi'])->name('burs-ve-egitim-destegi');
Route::get('/erken-ve-yogun-egitim-calismalari', [SiteController::class, 'erken-ve-yogun-egitim-calismalari'])->name('erken-ve-yogun-egitim-calismalari');
Route::get('/okul-cagi-ogrencileri-icin-egitim-calismalari-7-18-yas', [SiteController::class, 'okul-cagi-ogrencileri-icin-egitim-calismalari-7-18-yas'])->name('okul-cagi-ogrencileri-icin-egitim-calismalari-7-18-yas');
Route::get('/yetiskin-otizmli-bireyler', [SiteController::class, 'yetiskin-otizmli-bireyler'])->name('yetiskin-otizmli-bireyler');
Route::get('/aov-de-uygulanan-egitimler', [SiteController::class, 'aov-de-uygulanan-egitimler'])->name('aov-de-uygulanan-egitimler');
Route::get('/etkinliklerimiz', [SiteController::class, 'etkinliklerimiz'])->name('etkinliklerimiz');
Route::get('/etkinliklerimiz/{id}', [SiteController::class, 'etkinlik'])->name('etkinlik');
Route::get('/duyurular', [SiteController::class, 'duyurular'])->name('duyurular');
Route::get('/duyuru/{id}', [SiteController::class, 'duyuru'])->name('duyuru');
Route::get('/haberler', [SiteController::class, 'haberler'])->name('haberler');
Route::get('/haber/{id}', [SiteController::class, 'haber'])->name('haber');
Route::get('/egitim_kadromuz', [SiteController::class, 'egitim_kadromuz'])->name('egitim_kadromuz');
Route::get('/idari_kadromuz', [SiteController::class, 'idari_kadromuz'])->name('idari_kadromuz');
Route::get('/yayınlarımız', [SiteController::class, 'yayınlarımız'])->name('yayınlarımız');
Route::get('/sanal_gezinti', [SiteController::class, 'sanal_gezinti'])->name('sanal_gezinti');

Route::get('/download-pdf', [SiteController::class, 'downloadPDF'])->name('download.pdf');

Route::get('/belgeler', [SiteController::class, 'belgeler'])->name('belgeler');
Route::get('/belge/{id}', [SiteController::class, 'belge'])->name('belge');



Route::get('/alpaslan_ozel_egitim_rehabilitasyon_merkezi', [SiteController::class, 'alpaslan_ozel_egitim_rehabilitasyon_merkezi'])->name('alpaslan_ozel_egitim_rehabilitasyon_merkezi');
Route::get('/alpaslan_otizm_yayınları', [SiteController::class, 'alpaslan_otizm_yayınları'])->name('alpaslan_otizm_yayınları');
Route::get('/alpaslan_otizm_egitim_danismanlik', [SiteController::class, 'alpaslan_otizm_egitim_danismanlik'])->name('alpaslan_otizm_egitim_danismanlik');


Route::get('/kariyer', [SiteController::class, 'kariyer'])->name('kariyer');
Route::get('/iletisim', [SiteController::class, 'iletisim'])->name('iletisim');

Route::get('/applicant', [SiteController::class, 'applicant'])->name('applicant');
Route::get('/successful', [SiteController::class, 'successful'])->name('successful');

Route::post('applicant_form', function (\Illuminate\Http\Request $request){


    $add= \App\Models\Applicant::insert([
        'name' => $request->name,
        'surname' => $request->surname,
        'email' => $request->email,
        'phone' => $request->phone,
        'high_school' => $request->high_school,
        'gpa' => $request->gpa,
        'sat' => $request->sat,
        'act' => $request->act,
        'dream_school' => $request->dream_school,
        'like_school_one' => $request->like_school_one,
        'like_school_two' => $request->like_school_two,
        'like_school_three' => $request->like_school_three,
        'like_school_four' => $request->like_school_four,
        'like_school_five' => $request->like_school_five,
        'interested' => $request->interested,
        'created_at' => date('Y-m-d')
    ]);

    if($add){
        return redirect(\route('successful'))->with('message','Sucsess');
    }


})->name('applicant_forms');

Route::get('/mentor', [SiteController::class, 'mentor'])->name('mentor');

Route::post('mentor_form', function (\Illuminate\Http\Request $request){

    $add= \App\Models\Mentor::insert([
        'name' => $request->name,
        'surname' => $request->surname,
        'email' => $request->email,
        'phone' => $request->phone,
        'school' => $request->school,
        'collage' => $request->collage,
        'major' => $request->major,
        'minor' => $request->minor,
        'expertise' => $request->expertise,
        'created_at' => date('Y-m-d')
    ]);

    if($add){
        return redirect(\route('match_mentor'))->with('message','Sucsess');
    }

})->name('mentor_forms');


Route::get('/match_mentor', [SiteController::class, 'match_mentor'])->name('match_mentor');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

?>
