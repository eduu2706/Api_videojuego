<?php
namespace Fuel\Migrations;

class Messages
{

    function up()
    {
        \DBUtil::create_table('messages', array(
            'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
            'description' => array('type' => 'varchar', 'constraint' => 700, 'null'=>true),
            'date' => array('type' => 'date', 'null'=>true),
            'fk_user' => array('type' => 'int', 'constraint' => 11),
            
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('messages');
    }
}