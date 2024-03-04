<?php

namespace App\Controllers;
use App\Models\Users;

class Auth extends BaseController
{
    public function signin()
    {
        return view('sign-in');
    }

    public function __construct()
    {
        $this->Users = new \App\Models\Users();
    }
    // public $authModel;

	// public function __construct()
    // {
    //     $this->authModel = new AuthModel();
    // }

    public function auth_signin()
    {
        $input = array(  'username' => $this->request->getPost('username'),
                        'password' => $this->request->getPost('password')                
                );

            $userdetails = $this->Users->get_single_data_where('tbluseraccount',array('username' => $input['username']));
            

            if ($userdetails != null ){
                if ($userdetails['is_active'] == 1) {
                    $verifyuser = password_verify($input['password'],$userdetails['password']);
                        if($verifyuser) {   
                            unset($userdetails['password']);
                            $userdetails['logged_in'] = true;

                            $this->session->set($userdetails);
                            return redirect()->to(base_url('/dashboard'));
                        }
                        else {
                        //if incorrect password
                            echo "ERROR - Wrong password";
                            exit();
                        }
                }else{
                //if account is inactive
                    echo "ERROR-Account Inactive";
                    exit();
                }
            }else{
                echo "wala";
            }
        }
    
    public function logout(){
        $this->session->destroy();
        return redirect()->to(base_url('')); 
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
