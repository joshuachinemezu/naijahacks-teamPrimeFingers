<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Model\Tester;
use App\Model\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
     */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/confirm';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function tester()
    {
        return view('auth.tester', compact('register'));
    }

    public function choose()
    {
        return view('auth.choose', compact('register'));
    }

    public function company()
    {
        return view('auth.company', compact('register'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'password' => 'required|min:6|',
        ]);
    }

    public function signup(Request $request)
    {

        //Validates data
        // return $request;
        $this->validator($request->all())->validate();

        //Create seller
        $user = $this->create($request->all());

        //Authenticates user
        // $this->guard()->login($user);

        //Redirects sellers
        if (!$user) {
            $array = array(
                "status" => "error",
                "message" => "Error in Registration",
            );
            return response()->json($array);
        }
        $array = array(
            "status" => "success",
            "message" => "Registration successful",
        );
        return response()->json($array);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Model\User
     */
    protected function create(array $data)
    {

        do {
            $code = 'PF' . md5(uniqid(mt_rand()));
            $hash = User::where('hash', $code)->first();
        } while (!empty($hash));

        $type = isset($data['type']) ? $data['type'] : "";
        $user = User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
            'type' => $data['type'],
            'hash' => $this->randomId(),
        ]);

        if ($user) {
            if ($type == 'tester') {
                Tester::create([
                    'tester_userid' => $user->id,
                    'tester_name' => $data['fullname'],
                ]);
            } elseif ($type == 'company') {
                Company::create([
                    'company_userid' => $user->id,
                    'company_name' => $data['name'],
                ]);
            } else {
                $array = array(
                    'status' => 'error',
                    'message' => 'Error in creating account, Please choose account type',
                    // 'location' => $response->data->authorization_url,
                );
                return response()->json($array);
            }

            $array = array(
                "status" => "success",
                "message" => "Registration successful",
            );
            return response()->json($array);
        }
    }

    public function randomId()
    {

        $id = uniqid();

        $validator = \Validator::make(['id' => $id], ['id' => 'unique:users,hash']);

        if ($validator->fails()) {
            return $this->randomId();
        }

        return $id;
    }
}
