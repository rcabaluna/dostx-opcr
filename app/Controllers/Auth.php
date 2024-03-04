<?php

namespace App\Controllers;
use App\Models\Users;

class Auth extends BaseController
{
    public function signin()
    {
        return view('sign-in');
    }

    // public $authModel;

	// public function __construct()
    // {
    //     $this->authModel = new AuthModel();
    // }

    public function auth_signin()
    {
    $session = \Config\Services::session();
    $message = $session->getFlashdata('message');

    // Check if the form is submitted
    if ($this->request->getMethod() === 'post') {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Assuming you have a database table called 'users' with 'username' and 'password' columns
        $userModel = new Users();
        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Login successful, set user session and redirect
            $session->set('useraccountid', $user['useraccountid']);
            return redirect()->to('/dashboard'); // Redirect to dashboard or any other page
        } else {
            $message = 'Invalid username or password';
        }
    }

    $data['message'] = $message;
    return redirect()->to(base_url('/dashboard')); // Assuming you have a view file called 'login'
        }
    

//     public array $redirects = [
//         'login'             => 'dashboard',
//         'logout'            => 'login',
//         'force_reset'       => 'reset',
//     ];

//     public array $validFields = [
//         'username',
//     ];

//     public array $sessionConfig = [
//         'field'              => 'username',
//         'allowRemembering'   => true,
//         'rememberCookieName' => 'remember',
//         'rememberLength'     => 30 * DAY,
//     ];

//     public string $defaultAuthenticator = 'session';


//     public function loginRedirect(): string
//     {
//         $session = session();
//         $url     = $session->getTempdata('beforeLoginUrl') ?? setting('Auth.redirects')['login'];

//         return $this->getUrl($url);
//     }

//     public function forcePasswordResetRedirect(): string
//     {
//         $url = setting('Auth.redirects')['force_reset'];

//         return $this->getUrl($url);
//     }
}
