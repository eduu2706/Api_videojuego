<?php 

class Model_Users extends Orm\Model {

protected static $_table_name = 'users';
protected static $_primary_key = array('id');

protected static $_properties = array(
        'id',
        'username' => array(
            'data_type' => 'varchar'
        ),
        'password' => array(
            'data_type' => 'varchar'
        ),
        'email' => array(
               'data_type' => 'varchar'
        ),
        'image' => array(
                'data_type' => 'varchar'
        )
        // 'fk_admin' => array(
        //         'data_type' => 'int'
        // ),
        // 'fk_player' => array(
        //         'data_type' => 'int'
        // )
    );
}