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


    function edit_admin($id)
    {
        $admin =  new Model_admin();
        $data['admin'] = $admin->getAdminById($id);
        echo View('admin/header');
        echo View('admin/sidebar');
        echo View('admin/edit_admin', $data);
        echo View('admin/footer');
    }


    public function update_admin()
    {
        $post = $this->request->getPost(null);

        if ($post) {

            $user =  new Model_admin;


            if (empty($post['vpassword'])) {
                $id = $post['id_admin'];
                $data = [
                    'nama_admin' => $post['nama'],
                    'email_admin' => $post['email'],
                    'telepon_admin' => $post['telepon'],
                    'foto_admin' => $post['foto'],

                ];
                $user->admin_update($id, $data);
                return redirect()->to('/admin');
            } else {
                $id = $post['id_admin'];
                $data = [
                    'nama_admin' => $post['nama'],
                    'email_admin' => $post['email'],
                    'telepon_admin' => $post['telepon'],
                    'password_admin' => password_hash($post['vpassword'], PASSWORD_DEFAULT),
                    'foto_admin' => $post['foto'],

                ];
                $user->admin_update($id, $data);
                return redirect()->to('/admin');
            }
            return redirect()->to('/admin');
        }
    }

    public function hapus_admin($id)
    {
        $admin =  new Model_admin();
        $delete =  $admin->delete_admin($id);
        if ($delete) {
            return redirect()->to('/admin');
        }
    }

    public function do_register()
    {
        $post = $this->request->getPost(null);

        if ($post) {

            $user =  new Model_admin;
            $data = [
                'nama_admin'        => $post['nama'],
                'email_admin'       => $post['email'],
                'password_admin'    => $post['vpassword'],
            ];
            $user->new_admin($data);
            return redirect()->to('/admin');
        }
    }
}
