<?php

/**
 * @author Edi Prasetyo
 * @license MIT
 * @link https://github.com/edi-prasetyo/starter-kit
 * @see https://grahastudio.com
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
