<?php

namespace App\Controllers;

use App\Models\Model_buku as ModelsModel_buku;
use CodeIgniter\Controller;
use CodeIgniter\Model_buku;

class Home extends BaseController
{
	public function index()
	{
		$buku =  new ModelsModel_buku();
		$data['buku'] = $buku->tampil_buku();

		echo View('user/header');
		echo View('user/buku', $data);
		echo View('user/footer');
	}

	//--------------------------------------------------------------------

}
