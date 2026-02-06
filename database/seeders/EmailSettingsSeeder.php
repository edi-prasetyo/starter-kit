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
            'username' => 'xxx',
            'password' => 'xxx',
            'encryption' => null,
            'from_address' => 'noreply@example.com',
            'from_name' => 'Starter Kit App',
        ]);
    }
}
