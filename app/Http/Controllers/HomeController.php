<?php

/**
 * @author Edi Prasetyo
 * @license MIT
 * @link https://github.com/edi-prasetyo/starter-kit
 * @see https://grahastudio.com
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
