<?php 

class Model_RelDiffEne extends Orm\Model {

protected static $_table_name = 'rel_difficulties_enemies';
protected static $_primary_key = array('fk_difficulties');
protected static $_primary_key = array('fk_enemies');

protected static $_properties = array(
        'fk_difficulties',
        'fk_enemies'
    );
}