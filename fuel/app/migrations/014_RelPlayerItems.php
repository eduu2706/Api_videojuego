<?php
namespace Fuel\Migrations;

class RelPlayerItems
{
	function up()
	{
		\DBUtil::create_table('rel_player_items',array(
			'fk_player' => array('type' => 'int', 'constraint' => 11),
			'fk_items' => array('type' => 'int', 'constraint' => 11),

			), array('fk_player','fk_items'));
	}
	function down()
	{
		\DBUtil::drop_table('rel_player_items');
	}

}