<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
	public function up()
	{

		$this->forge->addField([

			'id_admin' => [

				'type' 				=> 'INT',
				'constraint'		=> '11',
				'auto_increment'	=> true
			],

			'email_admin' => [

				'type' 				=> 'VARCHAR',
				'constraint'		=> '255',

			],

			'password_admin' => [

				'type' 				=> 'VARCHAR',
				'constraint'		=> '255',
			],

			'nama_admin' => [

				'type' 				=> 'VARCHAR',
				'constraint'		=> '100',
			],

			'telepon_admin' => [

				'type' 				=> 'VARCHAR',
				'constraint'		=> '14',
			],

			'foto_admin' => [

				'type' 				=> 'VARCHAR',
				'constraint'		=> '100',
			]
		]);

		$this->forge->addKey('id_admin', true);
		$this->forge->createTable('admin');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
