<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function showWelcome(Request $request)
    {
        $firstName = $request->first_name;
        $lastName = $request->last_name;
        $gender = $request->gender;
        $nationality = $request->nationality;
        $languages = $request->language ?? []; // array
        $bio = $request->bio;

        return view('welcome', compact(
            'firstName',
            'lastName',
            'gender',
            'nationality',
            'languages',
            'bio'
        ));
    }
}
