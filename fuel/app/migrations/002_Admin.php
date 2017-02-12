<?php
namespace Fuel\Migrations;

class Admin
{
	function up()
	{
		\DBUtil::create_table('admin',array(
			'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),

			), array('id'));
	}
	function down(){
		\DBUtil::drop_table('admin');
	}

}