<?php 

class Model_Achievements extends Orm\Model {

protected static $_table_name = 'achievements';
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
        'reward' => array(
                'data_type' => 'varchar'
        ),
        'fk_player' => array(
                'data_type' => 'int'
        )
    );
}