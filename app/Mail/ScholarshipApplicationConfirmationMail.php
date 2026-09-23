<?php

namespace App\Mail;

use App\Models\ScholarshipApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ScholarshipApplicationConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public ScholarshipApplication $application;

    public function __construct(ScholarshipApplication $application)
    {
        $this->application = $application;
    }

    public function build()
    {
        return $this->subject('Öğrenci Bursu Başvurunuz Alındı')
                    ->view('emails.scholarship-application-confirmation');
    }
}
