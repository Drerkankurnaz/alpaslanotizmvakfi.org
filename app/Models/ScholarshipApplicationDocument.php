<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScholarshipApplicationDocument extends Model
{
    protected $fillable = [
        'scholarship_application_id',
        'document_type',
        'original_filename',
        'stored_path',
        'file_size',
    ];

    public function scholarshipApplication(): BelongsTo
    {
        return $this->belongsTo(ScholarshipApplication::class);
    }

    public function getDownloadUrlAttribute(): string
    {
        return route('admin.scholarship-documents.download', $this);
    }
}
