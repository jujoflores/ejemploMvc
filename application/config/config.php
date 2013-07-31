<?php
$config = Config::getInstance();

$config->set('configFolder', '../application/config/');
$config->set('libsFolder', '../application/libs/');
$config->set('controllersFolder', '../application/controllers/');
$config->set('modelsFolder', '../application/models/');
$config->set('viewsFolder', '../application/views/');
$config->set('imagesFolder', 'images/');
$config->set('langFolder', '../application/lang/');
$config->set('includeFolder', '../include/');
$config->set('defaultLang', 'es');
$config->set('projectName', 'Example');
$config->set('projectClient', '');
$config->set('projectVersion', '1.0.0');
$config->set('projectLastUpdate', '31/07/2013');
$config->set('projectEmailFrom', '');
$config->set('sessionName', 'test');

//[Development]
$config->set('dbhost', 'localhost');
$config->set('dbname', 'test');
$config->set('dbuser', 'user');
$config->set('dbpass', 'password');
