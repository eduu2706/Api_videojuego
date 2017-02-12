<?php 

class Model_Player extends Orm\Model {

protected static $_table_name = 'player';
protected static $_primary_key = array('id');

protected static $_properties = array(
        'id',
        'gems' => array(
            'data_type' => 'varchar'
        )
    );
}