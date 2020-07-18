<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_users'         => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'username'   => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'email'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'password'   => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'alamat'     => [
				'type'           => 'TEXT',
				'constraint'     => '255',
			],
			'level'      => [
				'type'           => 'INT',
				'constraint'     => 1,
				'null'				   => false,
			],
			'created_at' => [
				'type'					 => 'DATETIME',
				'null'					 => false,
			],
			'updated_at' => [
				'type'					 => 'DATETIME',
				'null'					 => true,
			]
		]);
		$this->forge->addKey('id_users', true);
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
