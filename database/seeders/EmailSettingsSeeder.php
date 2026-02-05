<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmailSetting;

class EmailSettingsSeeder extends Seeder
{
    public function run(): void
    {
        EmailSetting::create([
            'mailer' => 'smtp',
            'host' => 'smtp.mailtrap.io',
            'port' => 2525,
            'username' => '0a31e1f5f3722f',
            'password' => 'f8a406abdec806',
            'encryption' => null,
            'from_address' => 'noreply@example.com',
            'from_name' => 'Starter Kit App',
        ]);
    }
}
