<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as BaseVerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use App\Helpers\EmailSettingsHelper;

class VerifyEmail extends BaseVerifyEmail
{
    public function toMail($notifiable)
    {
        // Set mail config dari database sebelum kirim
        EmailSettingsHelper::setMailConfig();

        return (new MailMessage)
            ->subject('Verifikasi Email Anda')
            ->view('emails.verify-email', [
                'url' => $this->verificationUrl($notifiable),
                'notifiable' => $notifiable,
            ]);
    }
}
