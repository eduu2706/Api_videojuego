<?php 

class Model_Items extends Orm\Model {

protected static $_table_name = 'items';
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
        'prize' => array(
                'data_type' => 'varchar'
        )
        // 'fk_consumables' => array(
        //         'data_type' => 'int'
        // ),
        // 'fk_unlockables' => array(
        //         'data_type' => 'int'
        // )
    );
}