<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_anggota extends Model
{

    public function __construct()
    {
        $this->db = db_connect();
    }

    function tampil_anggota()
    {
        return $this->db->table('anggota')->get()->getResult();
    }

    function getbyID($id)
    {
        $builder =  $this->db->table('anggota');
        $builder->where('id_anggota', $id);
        return $builder->get()->getResult();
    }

    function getbyNIM($nim)
    {
        $builder =  $this->db->table('anggota');
        $builder->where('nim_anggota', $nim);
        return $builder->get()->getResult();
    }

    function update_data($data, $id)
    {
        $builder = $this->db->table('anggota');
        $builder->where('id_anggota', $id);
        $builder->update($data);
        return redirect()->to('/anggota');
    }

    function add_anggota($data)
    {
        $builder = $this->db->table('anggota');
        $builder->insert($data);
        return redirect()->to('/anggota');
    }

    function hapus($id)
    {
        $builder = $this->db->table('anggota')->where('id_anggota', $id);
        return $builder->delete();
    }
}
