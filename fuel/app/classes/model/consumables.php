<?php 

class Model_Consumables extends Orm\Model {

protected static $_table_name = 'consumables';
protected static $_primary_key = array('id');

protected static $_properties = array(
        'id',
        'quantity' => array(
            'data_type' => 'varchar'
        )
    );
}