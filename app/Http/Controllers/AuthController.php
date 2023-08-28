<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userList;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = userList::where('email', $request->email)->where('password', md5($request->password))->get();
        $userCount = userList::where('email', $request->email)->where('password', md5($request->password))->count();
        if ($userCount > 0) {

            $request->session()->put('userData', $user);
            return response()->json(['success' => true, 'message' => "Login Successful."]);
        } else {
            return response()->json(['success' => false, 'message' => "Invalid Credentials"]);
        }
    }

    public function signup(Request $request)
    {
        $checkUser = userList::where('email', $request->email)->count();
        if ($checkUser > 0) {
            return response()->json(['success' => false, 'message' => "Account already exists."]);
        } else {
            $user = new userList;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->password = md5($request->password);
            $user->email = $request->email;
            $user->save();
            return response()->json(['success' => true, 'message' => "account created successfully"]);
        }
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        // Check if the user exists, and either log them in or create a new account.

        // Example of logging in the user
        auth()->login($user);

        return redirect()->intended('/home');
    }
}
