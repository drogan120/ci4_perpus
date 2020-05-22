<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
	public function up()
	{
		$this->forge->addField([

			'id_buku' 	=> [

				'type'			=> 'INT',
				'constraint'	=> 11,
				'auto_increment' => true,
			],

			'judul_buku' => [

				'type'			=> 'VARCHAR',
				'constraint'	=> 255,
			],

			'pengarang_buku' => [

				'type'			=> 'VARCHAR',
				'constraint'	=> 100,
			],
			'isbn_buku' => [

				'type'			=> 'VARCHAR',
				'constraint'	=> 14,
			],
			'penerbit_buku' => [

				'type'			=> 'VARCHAR',
				'constraint'	=> 100,
			],
			'cover_buku' => [

				'type'			=> 'VARCHAR',
				'constraint'	=> 100,
			],
		]);

		$this->forge->addKey('id_buku', true);
		$this->forge->createTable('buku');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
