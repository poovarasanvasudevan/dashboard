<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Config;
use Curl;
use GuzzleHttp\Client;
use JavaScript;
use Log;
use Parse\ParseClient;
use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseUser;
use Request;
use Validator;

class MobileController extends Controller
{
    //

    function index()
    {
        if (Auth::user()) {
            return response()->redirectTo("/home");
        } else {
            return view('welcome');
        }
    }

    function home()
    {
        if (Auth::user()) {

            $client = new Client();
            $request = $client->get(Config::get('shpt.parse_base') . "/users", [
                'headers' => [
                    'X-Parse-Application-Id' => 'myAppId'
                ]
            ]);


            return view('home')->with('users', json_decode($request->getBody()));
        } else {
            return response()->redirectTo("/");
        }
    }


    function users()
    {
        if (Auth::user()) {
            $client = new Client();
            $request = $client->get(Config::get('shpt.parse_base') . "/users", [
                'headers' => [
                    'X-Parse-Application-Id' => 'myAppId'
                ]
            ]);

            JavaScript::put([
                'users' => json_decode($request->getBody())
            ]);


            return view('users');
        } else {
            return response()->redirectTo("/");
        }
    }

    function logout()
    {
        if (Auth::user()) {
            Auth::logout();
        }

        return response()->redirectTo("/");
    }

    function login(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        } else {

            $user = User::whereEmail(request()->input('username'))
                ->wherePassword(md5(request()->input('password')))
                ->first();
            if ($user) {
                Auth::login($user);
                return response()->redirectTo("/home");
            } else {
                $validator->errors()->add('invalid', "Invalid Email or Password");
                return redirect('/')
                    ->withErrors($validator)
                    ->withInput();
            }
        }
    }
}
