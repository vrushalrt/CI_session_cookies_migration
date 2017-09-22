<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_users extends CI_Migration 
{
	public function up()
	{
		$this->dbforge->add_field(
			array(
				'id' => array(
					'type' => 'INT',
					'unsigned' => TRUE,
					'auto_increment' => TRUE),

				'name' => array(
					'type' => 'VARCHAR',
					'constraint' => 250),

				'email' => array(
					'type' => 'VARCHAR',
					'constraint' => 250),

				'username' => array(
					'type' => 'VARCHAR',
					'constraint' => 25),

				'password' => array(
					'type' => 'VARCHAR',
					'constraint' => 16)
			));
		
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('users');
		//echo "YOYO";

	}

	public function down()
	{
		$this->dbforge->drop_table('users');
	}
}