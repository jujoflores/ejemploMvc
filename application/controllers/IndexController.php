<?php
require_once $config->get('modelsFolder') . 'IndexModel.php';

class IndexController extends ControllerBase{

    private $_model;

    public function init(){
        $this->_model = new IndexModel();
    }

    public function index(){
        $data['lang'] = $this->_model->getLang();
        $data['users'] = $this->_model->getUsers();
        $this->_view->show('index/main.php', $data);
    }
    
}
