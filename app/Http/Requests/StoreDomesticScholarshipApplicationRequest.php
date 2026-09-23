<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDomesticScholarshipApplicationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'scholarship_type' => ['required', 'in:lise,lisans,lisansustu'],

            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'birth_year' => ['required', 'integer', 'digits:4', 'between:1950,' . date('Y')],
            'province' => ['required', 'string', 'in:' . implode(',', config('turkey_provinces'))],
            'institution_name' => ['required', 'string', 'max:255'],
            'education_level' => ['required', 'in:Lise,Ön Lisans,Lisans,Yüksek Lisans,Doktora'],
            'grade_year' => ['required', 'string', 'max:255'],
            'gpa_scale' => ['required', 'in:4.00,100,diger'],
            'gpa_value' => ['required', 'string', 'max:50'],
            'other_scholarship_info' => ['nullable', 'string', 'max:1000'],

            'guardian_relationship' => ['required', 'in:anne,baba,yasal_vasi,kendisi'],
            'guardian_email' => ['required', 'email', 'max:255'],
            'guardian_phone' => ['required', 'string', 'max:50'],
            'support_need_description' => ['required', 'string', 'max:1000'],

            'ogrenci_belgesi' => ['required', 'file', 'mimes:pdf', 'max:5120'],
            'transkript' => ['required', 'file', 'mimes:pdf', 'max:5120'],
            'hane_gelir_belgesi' => ['required', 'file', 'mimes:pdf', 'max:5120'],
            'referans_mektubu' => ['nullable', 'file', 'mimes:pdf', 'max:5120'],

            'consent_accuracy' => ['required', 'accepted'],
        ];
    }

    public function messages(): array
    {
        return [
            'consent_accuracy.accepted' => 'Devam etmek için bu kutuyu işaretlemelisiniz.',
            '*.mimes' => 'Belgeler yalnızca PDF formatında yüklenebilir.',
            '*.max' => 'Dosya boyutu en fazla 5MB olabilir.',
        ];
    }
}
