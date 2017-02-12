<?php
namespace Fuel\Migrations;

class RelDiffEne
{
    function up()
    {
        \DBUtil::create_table('rel_difficulties_enemies', array(
            'fk_difficulties' => array('type' => 'int', 'constraint' => 11),
            'fk_enemies' => array('type' => 'int', 'constraint' => 11),
            
        ), array('fk_enemies','fk_difficulties'));
    }

    function down()
    {
       \DBUtil::drop_table('rel_difficulties_enemies');
    }
}