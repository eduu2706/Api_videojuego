<?php 

class Model_Stages extends Orm\Model {

protected static $_table_name = 'stages';
protected static $_primary_key = array('id');

protected static $_properties = array(
        'id',
        'stages' => array(
            'data_type' => 'varchar'
        )
    );
}