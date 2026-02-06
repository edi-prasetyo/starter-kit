<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmailSetting;
use Illuminate\Http\Request;

class EmailSettingController extends Controller
{
    public function index()
    {
        $this->authorize('email-edit');
        $emailSetting = EmailSetting::first();
        return view('admin.email_settings.index', compact('emailSetting'));
    }

    public function store(Request $request)
    {
        $this->authorize('email-store');
        $data = $request->validate([
            'mailer'        => 'required',
            'host'          => 'nullable',
            'port'          => 'nullable|integer',
            'username'      => 'nullable',
            'password'      => 'nullable',
            'encryption'    => 'nullable',
            'from_address'  => 'nullable|email',
            'from_name'     => 'nullable',
        ]);

        EmailSetting::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'Email setting berhasil disimpan');
    }
}
