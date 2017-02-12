<?php
namespace Fuel\Migrations;

class Difficulties
{

    function up()
    {
        \DBUtil::create_table('difficulties', array(
            'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
            'name' => array('type' => 'varchar', 'constraint' => 255, 'null'=>true),
            'description' => array('type' => 'varchar', 'constraint' => 255, 'null'=>true),
            'image' => array('type' => 'varchar', 'constraint' => 255, 'null'=>true),
            
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('difficulties');
    }
}