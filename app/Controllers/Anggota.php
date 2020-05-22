<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_anggota;

class Anggota extends Controller
{

    function index()
    {
        $anggota = new Model_anggota();
        $data['anggota'] = $anggota->tampil_anggota();
        echo View('admin/header');
        echo View('admin/sidebar');
        echo View('admin/anggota', $data);
        echo View('admin/footer');
    }
}
