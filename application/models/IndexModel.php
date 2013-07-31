<?php
class IndexModel extends ModelBase{

    public function getUsers(){
    	return array(
    		array('name' => 'Juan'),
    		array('name' => 'Alfredo'),
    		array('name' => 'Mauricio'),
    	);
    }    
}
