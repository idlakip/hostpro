<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'         => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nrp'        => [
				'type'           => 'VARCHAR',
				'constraint'     => '25',
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'username'   => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'status'     => [
				'type'           => 'ENUM',
				'constraint'     => ['laki-laki', 'perempuan'],
				'null'					 => false,
			],
			'status'     => [
				'type'           => 'ENUM',
				'constraint'     => ['publish', 'pending', 'draft'],
				'default'        => 'pending',
			],
			'tgl_lahir'  => [
				'type'           => 'DATE',
				'null'					 => false,
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
				'null'           => true,
			],
			'id_jurusan' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'jabatan'    => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'foto'       => [
				'type'           => 'VARCHAR',
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
		$this->forge->addKey('id', true);
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
