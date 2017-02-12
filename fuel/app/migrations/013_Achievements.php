<?php
namespace Fuel\Migrations;

class Achievements
{

    function up()
    {
        \DBUtil::create_table('achievements', array(
            'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
            'name' => array('type' => 'varchar', 'constraint' => 255, 'null'=>true),
            'description' => array('type' => 'varchar', 'constraint' => 255, 'null'=>true),
            'image' => array('type' => 'varchar', 'constraint' => 255, 'null'=>true),
            'reward' => array('type' => 'int', 'constraint' => 11, 'null'=>true),
            'fk_player' => array('type' => 'int', 'constraint' => 11),
            
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('achievements');
    }
}