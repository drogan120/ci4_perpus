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

    function getbyNIM($nim)
    {
        $builder =  $this->db->table('anggota');
        $builder->where('nim_anggota', $nim);
        return $builder->get()->getResult();
    }
}
