<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Hash;

class AccountController extends Controller
{
    public function storeUser(Request $request) {
        $rules = [
            'username' => 'required|unique:users,email',
            'firstName' => 'required',
            'lastName' => 'required',
            'password' => 'required|min:8|same:password2',
        ];
        $messages = [
            'password.same' => 'Passwords need to match',
            'username.required' => 'Please insert username',
            'firstName.required' => "Whats you'r First name?",
        ];
        $request->validate($rules, $messages);

        $userData = [
            'email' => $request->get('username'),
            'password' => Hash::make($request->get('password')),
            'name' => $request->get('firstName'),
            'surname' => $request->get('lastName'),
        ];
        DB::table('users')->insert($userData);
        Session::flash('success','yay, you are now registered!');
        return redirect()->back();
    }

    public function saveChatMessage(Request $request){
        $messageData = [
            'username' => $request->get('username'),
            'text' => $request->get('text'),
            // 'created_at' => $request->get(new Data()),
        ];
        DB::table('messages')->insert($messageData);
        return ['status' => 'ok'];
    }

    public function getChatMessages() {
        return DB::table('messages')->get();
    }
}