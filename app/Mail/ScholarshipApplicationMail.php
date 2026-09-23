<?php

namespace App\Mail;

use App\Models\ScholarshipApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ScholarshipApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public ScholarshipApplication $application;

    public function __construct(ScholarshipApplication $application)
    {
        $this->application = $application;
    }

    public function build()
    {
        $trackLabel = $this->application->track === 'domestic' ? 'Yurt İçi' : 'Yurt Dışı';

        return $this->subject("Yeni Öğrenci Bursu Başvurusu — {$trackLabel}")
                    ->view('emails.scholarship-application');
    }
}
