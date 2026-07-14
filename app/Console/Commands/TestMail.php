<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Mail\ContactFormMail;

class TestMail extends Command
{
    protected $signature = 'mail:test';
    protected $description = 'Test mail gönderimi';

    public function handle()
    {
        $data = [
            'name' => 'Test User',
            'email' => 'test@test.com',
            'phone' => '1234567890',
            'content' => 'Test mesajı'
        ];

        try {
            Mail::to('info@alpaslanotizmvakfi.org')->send(new ContactFormMail($data));
            $this->info('Mail başarıyla gönderildi!');
        } catch (\Exception $e) {
            $this->error('Mail gönderilirken hata oluştu: ' . $e->getMessage());
        }
    }
} 