<?php

namespace App\Models;

use CodeIgniter\Model;


class Model_buku extends  Model
{

    public function __construct()
    {
        $this->db = db_connect();
    }

    function tampil_buku()
    {
        return $this->db->table('buku')->get()->getResult();
    }

    function tampil_bukuById($id)
    {
        $builder = $this->db->table('buku');
        $builder->where('id_buku', $id);
        return $builder->get()->getResult();
    }

    function delete_buku($id)
    {
        $builder = $this->db->table('buku');
        $builder->where('id_buku', $id);
        $builder->delete();
        return redirect()->to('/buku');
    }

    function tambah_buku($data)
    {
        $builder = $this->db->table('buku');
        $builder->insert($data);
        return redirect()->to('/buku');
    }
    function ubah_buku($data, $id)
    {
        $builder = $this->db->table('buku');
        $builder->where('id_buku', $id);
        $builder->update($data);
        return redirect()->to('/buku');
    }

    function getbyISBN($isbn)
    {
        $builder =  $this->db->table('buku');
        $builder->where('isbn_buku', $isbn);
        return $builder->get()->getResult();
    }
}
