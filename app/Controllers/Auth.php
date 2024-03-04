<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function signin()
    {
        return view('sign-in');
    }
}
