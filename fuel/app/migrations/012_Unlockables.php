<?php
namespace Fuel\Migrations;

class Unlockables
{

    function up()
    {
        \DBUtil::create_table('unlockables', array(
            'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),

            
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('unlockables');
    }
}