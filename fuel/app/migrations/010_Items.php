<?php
namespace Fuel\Migrations;

class Items
{

    function up()
    {
        \DBUtil::create_table('items', array(
            'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
            'name' => array('type' => 'varchar', 'constraint' => 255, 'null'=>true),
            'description' => array('type' => 'varchar', 'constraint' => 255, 'null'=>true),
            'image' => array('type' => 'varchar', 'constraint' => 255, 'null'=>true),
            'prize' => array('type' => 'int', 'constraint' => 11, 'null'=>true),
            'fk_consumables' => array('type' => 'int', 'constraint' => 11),
            'fk_unlockables' =>array('type' => 'int', 'constraint' => 11),
            
            
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('items');
    }
}