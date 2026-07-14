<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Activity;
use App\Models\Announcement;
use App\Models\Autism;
use App\Models\Contact;
use App\Models\Document;
use App\Models\Content;
use App\Models\Education;
use App\Models\Research;
use App\Models\School;
use App\Models\Service;
use App\Models\Slide;
use App\Models\Team;
use App\Models\News;
use App\Models\WebSetting;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\CareerFormMail;

class SiteController extends \App\Http\Controllers\Controller
{

    public function home()
    {
        $slides = Slide::orderBy('id')->get();
        $services = Service::orderBy('id')->get();
        $aboutIlke = About::where('id', 2)->first();

        return view('index', [
            'common' => $this->siteCommonData(),
            'slides' => $slides,
            'services' => $services,
            'aboutIlke' => $aboutIlke,
        ]);
    }


    public function hikayemiz()
    {
        $about = About::where('id', 1)->first();
        return view('hikayemiz', [

            'common' => $this->siteCommonData(),
            'about' => $about,

        ]);
    }

    public function yonetim()
    {
        $teams = Team::whereRaw("JSON_CONTAINS(type, '\"1\"')")->orderBy('id')->get();

        return view('yonetim', [
            'common' => $this->siteCommonData(),
            'teams' => $teams,

        ]);
    }

    public function egitimKadrosu()
    {
        $teams = Team::whereRaw("JSON_CONTAINS(type, '\"3\"')")
                     ->orderBy('order')
                     ->orderBy('id')
                     ->get();

        return view('egitimkadrosu', [
            'common' => $this->siteCommonData(),
            'teams' => $teams,
        ]);
    }

    public function idariKadro()
    {
        $teams = Team::whereRaw("JSON_CONTAINS(type, '\"4\"')")->orderBy('id')->get();

        return view('idariKadro', [
            'common' => $this->siteCommonData(),
            'teams' => $teams,

        ]);
    }

    public function yonetimSıngle($id)
    {
        $team = Team::where('name', $id)->first();

        return view('yonetimSıngle', [
            'common' => $this->siteCommonData(),
            'team' => $team,

        ]);
    }

    public function bilimKurulu()
    {
        $teams = Team::whereRaw("JSON_CONTAINS(type, '\"2\"')")->orderBy('id')->get();


        return view('bilimkurulu', [
            'common' => $this->siteCommonData(),
            'teams' => $teams,

        ]);
    }



    public function vizyonumuz()
    {
        $about = About::where('id', 2)->first();

        return view('vizyonumuz', [

            'common' => $this->siteCommonData(),
            'about' => $about,

        ]);
    }

    public function misyonumuz()
    {

        $about = About::where('id', 3)->first();

        return view('misyonumuz', [
            'common' => $this->siteCommonData(),
            'about' => $about,
        ]);
    }

    public function temeldegerler()
    {
        $about = About::where('id', 4)->first();

        return view('temeldegerler', [
            'common' => $this->siteCommonData(),
            'about' => $about,
        ]);
    }

    public function ilkeler()
    {
        $about = About::where('id', 5)->first();

        return view('ilkeler', [
            'common' => $this->siteCommonData(),
            'about' => $about,
        ]);
    }

    public function kalite()
    {
        $about = About::where('id', 6)->first();

        return view('kalite', [
            'common' => $this->siteCommonData(),
            'about' => $about,
        ]);
    }

    public function kisiselverilerikorumakanunu()
    {
        $about = About::where('id', 7)->first();

        return view('kisiselveri', [
            'common' => $this->siteCommonData(),
            'about' => $about,
        ]);
    }

    public function downloadPDF()
    {
        $about = About::where('id', 7)->first();
    
        $pdf = PDF::loadView('kisiselveri_pdf', [
            'about' => $about,
        ]);
    
        return $pdf->download('kisiselveri.pdf');
    }

    public function otizmspektrumbozuklugunedir()
    {
        $autism = Autism::where('id', 1)->first();
        return view('otizmspektrumbozuklugunedir', [

            'common' => $this->siteCommonData(),
            'autism' => $autism,

        ]);
    }

    public function otizmspektrumbozuklugubelirtilerinelerdir()
    {
        $autism = Autism::where('id', 2)->first();
        return view('otizmspektrumbozuklugubelirtilerinelerdir', [

            'common' => $this->siteCommonData(),
            'autism' => $autism,

        ]);
    }

    public function otizmspektrumbozuklugunedenleri()
    {
        $autism = Autism::where('id', 3)->first();
        return view('otizmspektrumbozuklugunedenleri', [

            'common' => $this->siteCommonData(),
            'autism' => $autism,

        ]);
    }

    public function istatistik()
    {
        $autism = Autism::where('id', 4)->first();
        return view('istatistik', [
            'common' => $this->siteCommonData(),
            'autism' => $autism,

        ]);
    }

    public function bilimseldayanakliuygulamalar()
    {
        $autism = Autism::where('id', 5)->first();
        return view('bilimseldayanakliuygulamalar', [
            'common' => $this->siteCommonData(),
            'autism' => $autism,

        ]);
    }


    public function aileleregitimler()
    {
        $contents = Content::where('type', 2)->orderBy('id')->get();

        return view('aileleregitimler', [
            'common' => $this->siteCommonData(),
            'contents' => $contents,

        ]);
    }

    public function aileleregitim($parentId)
    {
        $ct = Content::where('title', $parentId)->first();

        return view('aileleregitim', [
            'common' => $this->siteCommonData(),
            'ct' => $ct,

        ]);
    }

    public function arastırmalar()
    {
        $contents = Research::orderBy('id')->get();

        return view('arastırmalar', [
            'common' => $this->siteCommonData(),
            'contents' => $contents,

        ]);
    }

    public function arastırma($id)
    {
        $ct = Research::where('title', $id)->first();

        return view('arastırma', [
            'common' => $this->siteCommonData(),
            'ct' => $ct,

        ]);
    }

    public function uzmanlaregitimler()
    {
        $contents = Content::where('type', 1)->orderBy('id')->get();

        return view('uzmanlaregitim', [
            'common' => $this->siteCommonData(),
            'contents' => $contents,

        ]);
    }

    public function uzmanlaregitim($educationId)
    {
        $ct = Content::where('title', $educationId)->first();

        return view('uzmanegitim', [
            'common' => $this->siteCommonData(),
            'ct' => $ct,

        ]);
    }


    public function hizmetler()
    {
        $services = Service::orderBy('id')->get();

        return view('hizmetler', [
            'common' => $this->siteCommonData(),
            'services' => $services,

        ]);
    }


    public function hizmet($serviceId)
    {
        $service = Service::where('title', $serviceId)->first();

        return view('hizmet', [
            'common' => $this->siteCommonData(),
            'service' => $service,

        ]);
    }
    
        public function belgeler()
    {
        $documents = Document::orderBy('id')->get();

        return view('belgeler', [
            'common' => $this->siteCommonData(),
            'documents' => $documents,

        ]);
    }


    public function belge($id)
    {
        $document = Document::where('title', $id)->first();
    
        return view('belge', [
            'common' => $this->siteCommonData(),
            'document' => $document,  // Burada değişken adı 'document' olmalı
        ]);
    }


    public function etkinliklerimiz()
    {
        $services = Activity::orderBy('date', 'desc')->get();
    
        return view('etkinliklerimiz', [
            'common' => $this->siteCommonData(),
            'services' => $services,
        ]);
    }
    

    public function etkinlik($id)
    {
        $activity = Activity::where('title', $id)->first();

        return view('etkinlik', [
            'common' => $this->siteCommonData(),
            'activity' => $activity,

        ]);
    }

    public function duyurular()
    {
        $contents = Announcement::orderBy('date', 'desc')->get();

        return view('duyurular', [
            'common' => $this->siteCommonData(),
            'contents' => $contents,

        ]);
    }

    public function duyuru($id)
    {
        $ct = Announcement::where('title', $id)->first();

        return view('duyuru', [
            'common' => $this->siteCommonData(),
            'ct' => $ct,

        ]);
    }

    public function haberler()
    {
        $contents = News::orderBy('id')->get();

        return view('haberler', [
            'common' => $this->siteCommonData(),
            'contents' => $contents,

        ]);
    }

    public function haber($id)
    {
        $ct = News::where('title', $id)->first();

        return view('haber', [
            'common' => $this->siteCommonData(),
            'ct' => $ct,

        ]);
    }


    public function okulumuz($id)
    {
        $school = School::where('title', $id)->first();

        return view('okulumuz', [
            'common' => $this->siteCommonData(),
            'school' => $school,

        ]);
    }

    public function kariyer()
    {
        return view('kariyer', [
            'common' => $this->siteCommonData(),
        ]);
    }

    public function iletisim()
    {
        $contact = Contact::where('id', 1)->first();

        return view('contact', [
            'common' => $this->siteCommonData(),
            'contact' => $contact,

        ]);
    }

    public function contactStore(Request $request)
    {
        try {
            // Form doğrulama
            $validated = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email',
                'phone' => 'required',
                'content' => 'required'
            ]);

            // Veritabanına kaydet
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->content = $request->content;
            $contact->save();

            // E-posta gönder
            Mail::to('info@alpaslanotizmvakfi.org')->send(new ContactFormMail($request->all()));

            return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi.');
        } catch (\Exception $e) {
            \Log::error('Mail gönderme hatası: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Mesaj gönderilirken bir hata oluştu: ' . $e->getMessage());
        }
    }

    public function careerStore(Request $request)
    {
        try {
            // Form doğrulama
            $validated = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email',
                'phone' => 'required',
                'content' => 'required'
            ]);

            // Veritabanına kaydet
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->content = $request->content;
            $contact->type = 'career'; // Kariyer başvurusu olduğunu belirtmek için
            $contact->save();

            // E-posta gönder
            Mail::to('info@alpaslanotizmvakfi.org')->send(new CareerFormMail($request->all()));

            return redirect()->back()->with('success', 'Başvurunuz başarıyla gönderildi.');
        } catch (\Exception $e) {
            \Log::error('Kariyer formu gönderme hatası: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Başvuru gönderilirken bir hata oluştu: ' . $e->getMessage());
        }
    }

    public function bilimKuruluDetay($id)
    {
        $team = Team::findOrFail($id);
        
        return view('bilimkuruludetay', [
            'common' => $this->siteCommonData(),
            'team' => $team,
        ]);
    }




}
