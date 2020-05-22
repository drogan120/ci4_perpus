<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_peminjaman extends Model
{

    public function __construct()
    {
        $this->db = db_connect();
    }

    function tampil_peminjaman()
    {
        $builder = $this->db->table('peminjaman');
        $builder->join('anggota', 'peminjaman.id_anggota=anggota.id_anggota');
        $builder->join('buku', 'peminjaman.id_buku=buku.id_buku');
        return $builder->get()->getResult();
    }

    function input_pinjam($data)
    {
        $builder = $this->db->table('peminjaman');
        $builder->insert($data);
        return redirect()->to('/peminjaman');
    }

    function proses_kembalikan_buku($post)
    {

        $id = $post['id_peminjaman'];
        $builder = $this->db->table('peminjaman');
        $builder->where('id_peminjaman', $id);
        $builder->delete();
        return redirect()->to('/peminjaman');
    }
    function getbyID($id)
    {
        $builder =  $this->db->table('peminjaman');
        $builder->join('anggota', 'peminjaman.id_anggota=anggota.id_anggota');
        $builder->join('buku', 'peminjaman.id_buku=buku.id_buku');
        $builder->where('id_peminjaman', $id);
        return $builder->get()->getResult();
    }
    function update_data($post, $id)
    {
        $data = [

            'tgl_kembali' => $post['ubah_tanggal']
        ];

        $builder = $this->db->table('peminjaman');
        $builder->where('id_peminjaman', $id);
        $builder->update($data);
        return true;
    }
}
