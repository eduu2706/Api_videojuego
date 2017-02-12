<?php
namespace Fuel\Migrations;

class Consumables
{

    function up()
    {
        \DBUtil::create_table('consumables', array(
            'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
            'quantity' => array('type' => 'int', 'constraint' => 11, 'null'=>true),
            
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('consumables');
    }
}
