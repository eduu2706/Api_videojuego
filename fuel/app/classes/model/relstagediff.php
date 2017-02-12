<?php 

class Model_RelStageDiff extends Orm\Model {

protected static $_table_name = 'rel_stages_difficulties';
protected static $_primary_key = array('fk_stages');
protected static $_primary_key = array('fk_difficulties');

protected static $_properties = array(
        'fk_stages',
        'fk_difficulties'
    );
}