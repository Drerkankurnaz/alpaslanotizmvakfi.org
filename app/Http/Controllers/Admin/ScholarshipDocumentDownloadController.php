<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ScholarshipApplicationDocument;
use Illuminate\Support\Facades\Storage;

class ScholarshipDocumentDownloadController extends Controller
{
    public function download(ScholarshipApplicationDocument $document)
    {
        return Storage::disk('scholarship_documents')->download($document->stored_path, $document->original_filename);
    }
}
