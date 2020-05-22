<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{

    function index()
    {
        echo View('admin/header');
        echo View('admin/sidebar');
        echo View('admin/home');
        echo View('admin/footer');
    }
}
?>