<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_anggota;
use CodeIgniter\Debug\Toolbar\Collectors\Views;

class Anggota extends Controller
{
    public function __construct()
    {

        helper('fungsi');
        check_login();
    }


    function index()
    {
        $anggota = new Model_anggota();
        $data['anggota'] = $anggota->tampil_anggota();
        echo View('admin/header');
        echo View('admin/sidebar');
        echo View('admin/anggota', $data);
        echo View('admin/footer');
    }

    function ubah_anggota($id)
    {
        $angota = new Model_anggota();
        $data['anggota'] = $angota->getbyID($id);
        echo View('admin/header');
        echo View('admin/sidebar');
        echo View('admin/ubah_anggota', $data);
        echo View('admin/footer');
    }

    function add_anggota()
    {
        $post =  $this->request->getPost();
        if ($post) {

            if (empty($post['foto'])) {
                echo 'ga ada foto';
                echo "<pre>";
                print_r($post);
                echo "</pre>";

                $data = [
                    'nim_anggota' => $post['nim'],
                    'nama_anggota' => $post['nama'],
                    'email_anggota' => $post['email'],
                    'password_anggota' => $post['password'],
                    'telepon_anggota' => $post['telepon'],
                    'kelas_anggota' => $post['kelas'],
                    'jurusan_anggota' => $post['jurusan'],
                    'alamat_anggota' => $post['alamat'],

                ];

                $anggota =  new Model_anggota();
                $proses = $anggota->add_anggota($data);
                if ($proses) {
                    return redirect()->to('/anggota');
                }
            } else {
                echo 'ada foto';
            }
        }
    }
    function tambah_anggota()
    {
        echo View('admin/header');
        echo View('admin/sidebar');
        echo View('admin/tambah_anggota');
        echo View('admin/footer');
    }

    public function update_anggota()
    {
        $post = $this->request->getPost(null);
        if ($post) {

            if (empty($post['vpassword'])) {

                $data = [
                    'nim_anggota' => $post['nim'],
                    'nama_anggota' => $post['nama'],
                    'email_anggota' => $post['email'],
                    'nim_anggota' => $post['nim'],
                    'telepon_anggota' => $post['telepon'],
                    'kelas_anggota' => $post['kelas'],
                    'jurusan_anggota' => $post['jurusan'],
                    'alamat_anggota' => $post['alamat'],

                ];

                $anggota =  new Model_anggota();
                $id = $post['id_anggota'];
                $proses = $anggota->update_data($data, $id);
                if ($proses) {
                    return redirect()->to('/anggota');
                }
            } else {

                $data = [
                    'nim_anggota' => $post['nim'],
                    'nama_anggota' => $post['nama'],
                    'email_anggota' => $post['email'],
                    'password_anggota' => $post['vpassword'],
                    'nim_anggota' => $post['nim'],
                    'telepon_anggota' => $post['telepon'],
                    'kelas_anggota' => $post['kelas'],
                    'jurusan_anggota' => $post['jurusan'],
                    'alamat_anggota' => $post['alamat'],

                ];
                $anggota =  new Model_anggota();
                $id = $post['id_anggota'];
                $proses = $anggota->update_data($data, $id);
                if ($proses) {
                    return redirect()->to('/anggota');
                }
            }
        }
    }
    function hapus_anggota($id)
    {
        $anggota = new Model_anggota();
        $proses = $anggota->hapus($id);
        if ($proses) {
            return redirect()->to('/anggota');
        }
    }
}
