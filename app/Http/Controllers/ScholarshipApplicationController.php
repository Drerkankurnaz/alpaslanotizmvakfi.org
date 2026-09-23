<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDomesticScholarshipApplicationRequest;
use App\Http\Requests\StoreInternationalScholarshipApplicationRequest;
use App\Mail\ScholarshipApplicationConfirmationMail;
use App\Mail\ScholarshipApplicationMail;
use App\Models\ScholarshipApplication;
use App\Models\ScholarshipApplicationDocument;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ScholarshipApplicationController extends Controller
{
    private const DOMESTIC_DOCUMENTS = [
        'ogrenci_belgesi' => true,
        'transkript' => true,
        'hane_gelir_belgesi' => true,
        'referans_mektubu' => false,
    ];

    private const INTERNATIONAL_DOCUMENTS = [
        'ogrenci_belgesi' => true,
        'transkript' => true,
        'hane_gelir_belgesi' => true,
        'pasaport_kimlik_sayfasi' => true,
        'yabanci_dil_belgesi' => false,
        'ikamet_vize_belgesi' => false,
        'referans_mektubu' => false,
    ];

    public function index()
    {
        return view('ogrenci-basvurusu', [
            'common' => $this->siteCommonData(),
        ]);
    }

    public function domesticForm()
    {
        return view('ogrenci-basvurusu-yurtici', [
            'common' => $this->siteCommonData(),
            'provinces' => config('turkey_provinces'),
        ]);
    }

    public function internationalForm()
    {
        return view('ogrenci-basvurusu-yurtdisi', [
            'common' => $this->siteCommonData(),
            'countries' => config('countries'),
        ]);
    }

    public function storeDomestic(StoreDomesticScholarshipApplicationRequest $request)
    {
        try {
            $validated = $request->validated();

            $application = ScholarshipApplication::create([
                'track' => 'domestic',
                'status' => 'pending',
                'scholarship_type' => $validated['scholarship_type'],
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'birth_year' => $validated['birth_year'],
                'province' => $validated['province'],
                'institution_name' => $validated['institution_name'],
                'education_level' => $validated['education_level'],
                'grade_year' => $validated['grade_year'],
                'gpa_scale' => $validated['gpa_scale'],
                'gpa_value' => $validated['gpa_value'],
                'other_scholarship_info' => $validated['other_scholarship_info'] ?? null,
                'guardian_relationship' => $validated['guardian_relationship'],
                'guardian_email' => $validated['guardian_email'],
                'guardian_phone' => $validated['guardian_phone'],
                'support_need_description' => $validated['support_need_description'],
                'consent_accuracy' => true,
            ]);

            $this->storeDocuments($request, $application, self::DOMESTIC_DOCUMENTS);

            $this->sendNotifications($application);

            return redirect()->route('scholarshipApplication.success')
                ->with('success', 'Başvurunuz başarıyla alındı.');
        } catch (\Exception $e) {
            \Log::error('Yurt içi öğrenci başvurusu gönderme hatası: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Başvurunuz gönderilirken bir hata oluştu: ' . $e->getMessage());
        }
    }

    public function storeInternational(StoreInternationalScholarshipApplicationRequest $request)
    {
        try {
            $validated = $request->validated();

            $application = ScholarshipApplication::create([
                'track' => 'international',
                'status' => 'pending',
                'scholarship_type' => $validated['scholarship_type'],
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'birth_year' => $validated['birth_year'],
                'study_country' => $validated['study_country'],
                'study_city' => $validated['study_city'],
                'study_language' => $validated['study_language'],
                'institution_name' => $validated['institution_name'],
                'education_level' => $validated['education_level'],
                'grade_year' => $validated['grade_year'],
                'gpa_scale' => $validated['gpa_scale'],
                'gpa_value' => $validated['gpa_value'],
                'other_scholarship_info' => $validated['other_scholarship_info'] ?? null,
                'enrollment_status' => $validated['enrollment_status'],
                'annual_tuition_amount' => $validated['annual_tuition_amount'] ?? null,
                'annual_tuition_currency' => $validated['annual_tuition_currency'],
                'guardian_relationship' => $validated['guardian_relationship'],
                'guardian_email' => $validated['guardian_email'],
                'guardian_phone' => $validated['guardian_phone'],
                'support_need_description' => $validated['support_need_description'],
                'consent_accuracy' => true,
                'consent_document_transfer' => true,
            ]);

            $this->storeDocuments($request, $application, self::INTERNATIONAL_DOCUMENTS);

            $this->sendNotifications($application);

            return redirect()->route('scholarshipApplication.success')
                ->with('success', 'Başvurunuz başarıyla alındı.');
        } catch (\Exception $e) {
            \Log::error('Yurt dışı öğrenci başvurusu gönderme hatası: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Başvurunuz gönderilirken bir hata oluştu: ' . $e->getMessage());
        }
    }

    public function success()
    {
        return view('ogrenci-basvurusu-tesekkurler', [
            'common' => $this->siteCommonData(),
        ]);
    }

    private function storeDocuments($request, ScholarshipApplication $application, array $documentTypes): void
    {
        foreach ($documentTypes as $documentType => $required) {
            /** @var UploadedFile|null $file */
            $file = $request->file($documentType);

            if (!$file) {
                continue;
            }

            $storedPath = $file->storeAs((string) $application->id, "{$documentType}.pdf", 'scholarship_documents');

            ScholarshipApplicationDocument::create([
                'scholarship_application_id' => $application->id,
                'document_type' => $documentType,
                'original_filename' => $file->getClientOriginalName(),
                'stored_path' => $storedPath,
                'file_size' => $file->getSize(),
            ]);
        }
    }

    private function sendNotifications(ScholarshipApplication $application): void
    {
        Mail::to('info@alpaslanotizmvakfi.org')->send(new ScholarshipApplicationMail($application));

        if ($application->guardian_email) {
            Mail::to($application->guardian_email)->send(new ScholarshipApplicationConfirmationMail($application));
        }
    }
}
