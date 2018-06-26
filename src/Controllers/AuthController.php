<?php

namespace TrySpecter\Specter\Controllers;

use Illuminate\Http\Request;
use TrySpecter\Specter\Facades\Specter;

class AuthController extends Controller
{
    /**
     * UsersController constructor.
     */
    public function __construct()
    {
        //
    }

    public function signin(Request $request)
    {
        if ( $request->user() ) {
            return redirect()->route('specter.dashboard');
        }

        return Specter::view('stories');
    }

    public function postSignIn(Request $request)
    {
        dd($request->all());
    }
}
