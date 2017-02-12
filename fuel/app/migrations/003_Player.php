<?php
namespace Fuel\Migrations;

class Player
{
	function up()
	{
		\DBUtil::create_table('player',array(
			'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
			'gems' => array('type' => 'int', 'constraint' => 11, 'null'=>true),

			), array('id'));
	}
	function down(){
		\DBUtil::drop_table('player');
	}

}