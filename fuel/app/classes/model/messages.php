<?php 

class Model_Messages extends Orm\Model {

protected static $_table_name = 'messages';
protected static $_primary_key = array('id');

protected static $_properties = array(
        'id',
        'description' => array(
            'data_type' => 'varchar'
        ),
        'date' => array(
               'data_type' => 'varchar'
        ),
        'fk_user' => array(
               'data_type' => 'int'
        )
    );
}