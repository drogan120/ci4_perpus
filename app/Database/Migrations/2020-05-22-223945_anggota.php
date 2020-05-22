<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Anggota extends Migration
{
	public function up()
	{
		$this->forge->addField([

			'id_anggota' => [

				'type'			=> 'INT',
				'constraint'	=> 11,
				'auto_increment' => true

			],

			'nim_anggota' => [

				'type' 			=> 'VARCHAR',
				'constraint'	=> 14
			],
			'nama_anggota' => [

				'type' 			=> 'VARCHAR',
				'constraint'	=> 100
			],
			'email_anggota' => [

				'type' 			=> 'VARCHAR',
				'constraint'	=> 100
			],
			'password_anggota' => [

				'type' 			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'telepon_anggota' => [

				'type' 			=> 'VARCHAR',
				'constraint'	=> 14
			],
			'kelas_anggota' => [

				'type' 			=> 'VARCHAR',
				'constraint'	=> 20
			],
			'jurusan_anggota'  => [

				'type' 			=> 'VARCHAR',
				'constraint'	=> 20
			],
			'alamat_anggota' => [

				'type' 			=> 'TEXT',

			],
			'foto_anggota' => [

				'type' 			=> 'VARCHAR',
				'constraint'	=> 100
			],
		]);

		$this->forge->addKey('id_anggota', true);
		$this->forge->createTable('anggota');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
