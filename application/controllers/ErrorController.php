<?php
require_once $config->get('modelsFolder') . 'LoginModel.php';

class ErrorController extends ControllerBase{

    private $_loginModel;

    public function init(){
        $this->_loginModel = new LoginModel();
    }

    public function index(){
    	$lang = $this->_loginModel->getLang();
        $data['lang'] = $lang;
        $data['error'] = $lang->translate('appError');
        $this->_view->show('common/error.php', $data);
    }
}