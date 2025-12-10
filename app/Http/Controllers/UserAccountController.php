<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    //

    public function registerUser(Request $request) {
        //validate data

        $validatedData = $request->validate([
            "fullname" => "required|string|min:4|max:50",
            "email" => "bail|required|email",
            "password" => "required|min:8",
            "password_confirmation" => "required|same:password"
        ]);

        dd($validatedData);

    }
}
