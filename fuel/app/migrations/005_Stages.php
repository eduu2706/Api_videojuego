<?php
namespace Fuel\Migrations;

class Stages
{
	function up()
	{
		\DBUtil::create_table('stages',array(
			'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
			'stages' => array('type' => 'varchar', 'constraint' => 255, 'null'=>true),

			), array('id'));
	}
	function down(){
		\DBUtil::drop_table('stages');
	}

}