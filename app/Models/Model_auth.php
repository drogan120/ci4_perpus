<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_auth extends Model
{

    function login($data)
    {

        $email =  $data['email_admin'];
        $password = $data['password_admin'];

        $user = $this->db->table('admin');
        $user->where('email_admin', $email);
        $row = $user->get()->getResultArray();

        if (!empty($row)) {
            if (password_verify($password, $row[0]['password_admin'])) {
                $session = session();
                $user = [
                    'id' => $row[0]['id_admin'],
                    'username' => $row[0]['email_admin'],
                ];

                $session->set($user);
                echo "<pre>";
                print_r($session->get());
                echo "</pre>";
            }
        } else {
            echo "alert('username/password salah')</script>";
        }
    }
}
