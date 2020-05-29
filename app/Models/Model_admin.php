<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_admin extends Model
{

    function admin_list()
    {
        return $this->db->table('admin')->get()->getResult();
    }

    function new_admin($data)
    {
        $builder = $this->db->table('admin');
        $builder->insert($data);
        return redirect()->to('/admin');
    }

    function getAdminById($id)
    {
        return $this->db->table('admin')->where('id_admin', $id)->get()->getResult();
    }

    function admin_update($id, $data)
    {

        $builder = $this->db->table('admin');
        $builder->where('id_admin', $id);
        $builder->update($data);
        return redirect()->to('/admin');
    }

    public function delete_admin($id)
    {
        return $this->db->table('admin')->where('id_admin', $id)->delete();
    }
}
