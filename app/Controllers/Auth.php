<?php namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\Model_auth;

class Auth extends Controller
{

    public function __construct()
    {
        
        helper('fungsi');
        is_login();
    }
    
    public function index()
    {
        echo View('user/header');
        echo View('auth/login');
        echo View('user/footer');
    }

    public function do_login()
    {
        $post = $this->request->getPost(null);

        if (!empty($post)) {
            $user = new Model_auth();

            $data = [
                'email_admin'       => $post['email'],
                'password_admin'    => $post['password']
            ];

            $user->login($data);
            return redirect()->to('/dashboard');
        }
    }

    public function register()
    {
        echo View('user/header');
        echo View('auth/login');
        echo View('user/footer');
    }

    public function logout()
    {
        $session = session();
        session_destroy();
        return redirect()->to('/auth');
    }
}
