<?php 

class Model_Enemies extends Orm\Model {

protected static $_table_name = 'enemies';
protected static $_primary_key = array('id');

protected static $_properties = array(
        'id',
        'name' => array(
            'data_type' => 'varchar'
        ),
        'description' => array(
               'data_type' => 'varchar'
        ),
        'image' => array(
                'data_type' => 'varchar'
        ),
        'health' => array(
                'data_type' => 'varchar'
        ),
        'attack' => array(
                'data_type' => 'varchar'
        )
    );
}