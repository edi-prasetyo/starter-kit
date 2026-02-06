<?php

/**
 * @author Edi Prasetyo
 * @license MIT
 * @link https://github.com/edi-prasetyo/starter-kit
 * @see https://grahastudio.com
 */

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use App\Helpers\EmailSettingsHelper;

class ResetPassword extends Notification
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        // Set mail config dari database
        EmailSettingsHelper::setMailConfig();

        $url = url(route('password.reset', ['token' => $this->token, 'email' => $notifiable->email], false));

        return (new MailMessage)
            ->subject('Reset Password Anda')
            ->view('emails.reset-password', [
                'url' => $url,
                'notifiable' => $notifiable,
            ]);
    }
}
