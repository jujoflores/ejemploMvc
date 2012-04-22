<?php
require_once '../application/models/InicioModel.php';

class IndexController extends ControllerBase{

    private $_inicio;

    public function init(){
        $this->_inicio = new InicioModel();
    }

    public function index(){
        $data['lang'] = $this->_inicio->getLang();
        $data['usuarios'] = $this->_inicio->getUsers();
        $this->_view->show('inicio/principal.php', $data);
    }
    
}