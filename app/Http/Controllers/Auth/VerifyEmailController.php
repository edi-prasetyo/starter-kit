<?php

/**
 * @author Edi Prasetyo
 * @license MIT
 * @link https://github.com/edi-prasetyo/starter-kit
 * @see https://grahastudio.com
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    public function notice()
    {
        return view('auth.verify-email');
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect('/dashboard')->with('status', 'Email berhasil diverifikasi!');
    }

    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('status', 'Link verifikasi baru dikirim!');
    }
}
