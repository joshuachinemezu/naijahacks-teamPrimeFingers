<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'social.connect']);
    }

    public function index()
    {
        $user = Auth::user();
//   dd($user);

        return view('dashboard.home.index', compact('user'));

    }

}
