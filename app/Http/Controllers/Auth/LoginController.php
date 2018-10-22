<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */
    // use ThrottlesLogins;
    use AuthenticatesUsers;

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('auth.login', compact('login'));
    }

    protected function login(Request $request)
    {
        if ($request->ajax()) {
            // create our user data for the authentication
            // $userdata = array(
            //     'email' => $request->email,
            //     'password' => $request->password,
            // );

            $userdata = $request->only(['email', 'password']);

            // attempt to do the login
            if (auth()->attempt($userdata)) {
                // $user = User::where('id', Auth::user()->id)->first();

                $array = array(
                    "status" => "success",
                    "message" => "Login successful",
                    // "redirectPage" => $redirectPage,
                );
                return response()->json($array);
            } else {
                return response()->json(['status' => 'error', 'message' => 'Invalid login details']);
            }
        }
    }
}
