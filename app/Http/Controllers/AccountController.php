<?php

namespace App\Http\Controllers;

use App\Account;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        //   dd($user);

        return view('dashboard.account.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function connect()
    {
        //
        if (request()->post()) {
            // dd(Auth::user()->hash);
            $postdata = ['username' => request()['username'], 'password' => request()['password'], 'hash' => Auth::user()->hash];
            try {
                $client = new Client();
                $request = $client->post(env('INSTAGRAM_LOGIN'), [
                    'form_params' => $postdata,
                    'headers' => [
                        "cache-control" => "no-cache",
                        "content-type: application/json",
                    ],
                ], array());
                $response = json_decode($request->getBody()->getContents());

                $ara = explode(' ', $response->res);

                // var_dump($ara[0]);exit;

                if ($ara[0] != '{"num_results":') {
                    // Delete session directory that was created
                    $directory = base_path() . '/' . env('INSTAGRAM_SESSION_DIRECTORY') . '/' . request()['username'];
                    $this->deleteDir($directory);

                    $array = array(
                        'status' => 'error',
                        'message' => 'Error in connecting account, Please check inputs and try again',
                        // 'location' => $response->data->authorization_url,
                    );
                    return response()->json($array);
                }

                if ($ara[0] == '{"num_results":') {
                    $connect = $this->connectAccount(request());
                    // dd($connect);

                    if ($connect == 'used') {
                        $array = array(
                            'status' => 'failed',
                            'message' => 'Sorry you cannot connect to this account, Please contact support',
                        );
                        return response()->json($array);
                    }

                    $array = array(
                        'status' => $response,
                        'message' => 'Account was connected successfully',
                    );
                    return response()->json($array);
                }

                $array = array(
                    'status' => 'error',
                    'message' => 'Error in connecting account, Please check inputs',
                    // 'location' => $response->data->authorization_url,
                );
                return response()->json($array);

            } catch (RequestException $e) {
                $array = array(
                    "status" => "failed",
                    "location" => false,
                    "message" => "Something went wrong, please try again later",
                    "error" => $e,
                );
                return response()->json($array);
                // echo Psr7\str($e->getResponse());
            }
        }
        return view('dashboard.account.connect', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function connectAccount($request)
    {
        $used = Account::where('account_username', $request['username'])->first();
        if (!empty($used)) {
            return 'used';
        }

        $exists = Account::where(['account_username' => $request['username'], 'account_userid' => Auth::user()->id])->first();
        if (!empty($exists)) {
            return true;
        }

        return Account::create([
            'account_userid' => Auth::user()->id,
            'account_username' => $request['username'],
            'account_password' => $request['password'],
            'account_hash' => uniqid(),
            'account_type' => 'instagram',
        ]);
    }

    public static function deleteDir($dirPath)
    {
        if (!is_dir($dirPath)) {
            throw new InvalidArgumentException("$dirPath must be a directory");
        }
        if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
            $dirPath .= '/';
        }
        $files = glob($dirPath . '*', GLOB_MARK);
        foreach ($files as $file) {
            if (is_dir($file)) {
                self::deleteDir($file);
            } else {
                unlink($file);
            }
        }
        rmdir($dirPath);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
