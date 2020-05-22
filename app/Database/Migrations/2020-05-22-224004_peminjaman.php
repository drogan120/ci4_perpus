<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peminjaman extends Migration
{
	public function up()
	{
		$this->forge->addField([

			'id_peminjaman'	=> [
				'type' 			=> 'INT',
				'constraint' 	=> 11,
				'auto_increment' 	=> true
			],
			'id_anggota' => [

				'type' 			=> 'INT',
				'constraint' 	=> 11,
			],
			'id_buku' => [

				'type' 			=> 'INT',
				'constraint' 	=> 11,
			],
			'tgl_pinjam' => [

				'type' 			=> 'DATE',

			],
			'tgl_kembali' => [

				'type' 			=> 'DATE',

			],
		]);

		$this->forge->addKey('id_peminjaman', true);
		$this->forge->createTable('peminjaman');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
