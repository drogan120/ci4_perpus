<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_admin;

class Admin extends Controller
{

    public function index()
    {
        $admin =  new Model_admin();
        $data['admin'] = $admin->admin_list();
        echo View('admin/header');
        echo View('admin/sidebar');
        echo View('admin/admin', $data);
        echo View('admin/footer');
    }

    public function do_register()
    {
        $post = $this->request->getPost(null);

        if ($post) {

            $user =  new Model_admin;
            $user->new_admin($post);
            return redirect()->to('/admin');
        }
    }
}
