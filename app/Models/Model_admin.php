<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_admin extends Model
{

    function admin_list()
    {
        return $this->db->table('admin')->get()->getResult();
    }

    function new_admin($post)
    {

        echo "<pre>";
        print_r($post);
        echo "</pre>";
    }
}
