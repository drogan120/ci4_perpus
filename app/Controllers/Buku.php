<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_buku;

class Buku extends Controller
{


    public function index()
    {
        $buku = new Model_buku();
        $data['buku'] = $buku->tampil_buku();
        echo View('admin/header');
        echo View('admin/sidebar');
        echo View('admin/buku', $data);
        echo View('admin/footer');
    }

    function ubah_buku($id)
    {
        $buku =  new Model_buku();
        $data['buku'] = $buku->tampil_bukuByID($id);
        echo View('admin/header');
        echo View('admin/sidebar');
        echo View('admin/ubah_buku', $data);
        echo View('admin/footer');
    }

    function hapus_buku($id)
    {
        $buku = new Model_buku();
        $hapus = $buku->delete_buku($id);
        if ($hapus) {
            return redirect()->to('/buku');
        }
    }

    function tambah_buku()
    {
        $post =  $this->request->getGetPost(null);
        if ($post) {
            $buku = new Model_buku();

            $data =
            [
                'judul_buku'         => $post['judul'],
                'pengarang_buku'     => $post['pengarang'],
                'isbn_buku'         => $post['isbn'],
                'penerbit_buku'     => $post['penerbit'],
            ];
            $tambah = $buku->tambah_buku($data);
            if ($tambah) {
                return redirect()->to('/buku');
            }
        }
    }

    function update_buku()
    {
        helper('url');
        $post =  $this->request->getGetPost(null);
        if ($post) {
            $buku = new Model_buku();
            $id = $post['id_buku'];
            $data =
            [
                'judul_buku'         => $post['judul'],
                'pengarang_buku'     => $post['pengarang'],
                'isbn_buku'         => $post['isbn'],
                'penerbit_buku'     => $post['penerbit'],
            ];
            $simpan = $buku->ubah_buku($data, $id);
            if ($simpan) {
                return redirect()->to('/buku');
            }
        }
    }

    function cari($keyword = null)
    {
        $buku =  new Model_buku();
        $data['buku'] = $buku->search($keyword);
     
        echo View('user/search_buku', $data);
        
    }
}
