<?php

/**
 * @author Edi Prasetyo
 * @license MIT
 * @link https://github.com/edi-prasetyo/starter-kit
 * @see https://grahastudio.com
 */

namespace App\Helpers;

use App\Models\EmailSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Config;

class EmailSettingsHelper
{
    public static function setMailConfig()
    {
        if (Schema::hasTable('email_settings')) { // <-- cek dulu
            $email = EmailSetting::first();
            if ($email) {
                Config::set('mail.default', $email->mailer ?? 'smtp');
                Config::set('mail.mailers.smtp.host', $email->host);
                Config::set('mail.mailers.smtp.port', $email->port);
                Config::set('mail.mailers.smtp.username', $email->username);
                Config::set('mail.mailers.smtp.password', $email->password);
                Config::set('mail.mailers.smtp.encryption', $email->encryption);
                Config::set('mail.from.address', $email->from_address);
                Config::set('mail.from.name', $email->from_name);
            }
        }
    }
}
