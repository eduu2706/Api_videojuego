<?php 

class Model_Difficulties extends Orm\Model {

protected static $_table_name = 'difficulties';
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
        )
    );
}