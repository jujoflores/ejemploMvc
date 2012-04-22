<?php
class InicioModel extends ModelBase{

    public function getUsers(){
    	$users = array(
    		array('nombre' => 'Juan'),
    		array('nombre' => 'Alfredo'),
    		array('nombre' => 'Mauricio'),
    	);
    	return $users;
    }    
}