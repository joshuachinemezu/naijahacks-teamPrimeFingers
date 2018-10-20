<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class ConfirmController extends Controller
{

    public function index()
    {
        return view('auth.confirm', compact('confirm'));
    }
}
