<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_peminjaman;
use App\Models\Model_anggota;
use App\Models\Model_buku;
use CodeIgniter\Config\View;

class Peminjaman extends Controller
{

    public function __construct()
    {

        helper('fungsi');
        check_login();
    }

    public function index()
    {
        $peminjaman = new Model_peminjaman();
        $data['peminjaman'] = $peminjaman->tampil_peminjaman();
        echo View('admin/header');
        echo View('admin/sidebar');
        echo View('admin/peminjaman', $data);
        echo View('admin/footer');
    }

    function generate_peminjam()
    {

        $post = $this->request->getPost(null);
        if ($post) {
            $nim = $post['nim_peminjam'];
            $isbn = $post['isbn_buku'];
            $anggota = new Model_anggota();
            $buku = new Model_buku();
            $data['anggota'] = $anggota->getbyNIM($nim);
            $data['buku'] = $buku->getbyISBN($isbn);
            echo View('admin/header');
            echo View('admin/tambah_peminjam', $data);
            echo View('admin/sidebar');
            echo View('admin/footer');
        }
    }

    function proses_pinjam()
    {
        $post = $this->request->getPost(null);
        $peminjaman = new Model_peminjaman();
        if ($post) {
            $data = [
                'id_anggota' => $post['id_anggota'],
                'id_buku' => $post['id_buku'],
                'tgl_pinjam' => date('Y-m-d'),
                'tgl_kembali' => $post['tgl_kembali'],
            ];

            $proses = $peminjaman->input_pinjam($data);
            if ($proses) {
                return redirect()->to('/peminjaman');
            }
        }
    }

    function kembalikan_buku()
    {

        $post = $this->request->getPost(null);
        $peminjaman = new Model_peminjaman();
        if ($post) {
            $proses = $peminjaman->proses_kembalikan_buku($post);
            if ($proses) {
                return redirect()->to('/peminjaman');
            }
        }
    }

    function update_peminjaman($id)
    {
        $peminjaman = new Model_peminjaman();
        $data['peminjaman'] = $peminjaman->getbyID($id);
        echo View('admin/header');
        echo View('admin/sidebar');
        echo View('admin/update_peminjam', $data);
        echo View('admin/footer');
    }

    function proses_update()
    {
        $post = $this->request->getPost(null);
        if ($post) {
            $id = $post['id_peminjaman'];
            $peminjaman = new Model_peminjaman();
            $proses = $peminjaman->update_data($post, $id);
            if ($proses) {
                return redirect()->to('/peminjaman');
            }
        }
    }
}
