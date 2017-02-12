<?php
namespace Fuel\Migrations;

class RelStageDiff
{
	function up()
	{
		\DBUtil::create_table('rel_stages_difficulties',array(
			'fk_stages' => array('type' => 'int', 'constraint' => 11),
			'fk_difficulties' => array('type' => 'int', 'constraint' => 11),

			), array('fk_stages','fk_difficulties'));
	}
	function down()
	{
		\DBUtil::drop_table('rel_stages_difficulties');
	}

}