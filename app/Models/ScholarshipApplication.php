<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ScholarshipApplication extends Model
{
    protected $fillable = [
        'track',
        'scholarship_type',
        'first_name',
        'last_name',
        'birth_year',
        'institution_name',
        'education_level',
        'grade_year',
        'gpa_scale',
        'gpa_value',
        'other_scholarship_info',
        'province',
        'study_country',
        'study_city',
        'study_language',
        'enrollment_status',
        'annual_tuition_amount',
        'annual_tuition_currency',
        'guardian_relationship',
        'guardian_email',
        'guardian_phone',
        'support_need_description',
        'consent_accuracy',
        'consent_document_transfer',
    ];

    protected $casts = [
        'consent_accuracy' => 'boolean',
        'consent_document_transfer' => 'boolean',
        'annual_tuition_amount' => 'decimal:2',
        'reviewed_at' => 'datetime',
    ];

    public function documents(): HasMany
    {
        return $this->hasMany(ScholarshipApplicationDocument::class);
    }

    public function getFullNameAttribute(): string
    {
        return trim("{$this->first_name} {$this->last_name}");
    }
}
