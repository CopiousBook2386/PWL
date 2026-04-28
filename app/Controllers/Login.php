<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Login'];
        return view('Login_page',$data);
    }
    function auth ()
    {
        $d_email = "user@example.com";
        $d_password = "polke001";
        $email = $this->request->getPost('email');
        $paswd = $this->request->getPost('paswd');
        
        if($d_email == $email AND $d_password == $paswd)
        {
            $datauser = ['userid' => 1, 'email' => $email, 'isloggedin' => true ];
            session()->set($datauser);
            session()->set('member','premium');
            return redirect()->to('/produk');
        }
        else
        {
            echo "user not found";
        }

        function logout()
        {
            session()->destroy();
            return redirect()->to('/');
        }
    }
}
