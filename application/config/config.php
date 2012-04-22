<?php
$config = Config::singleton();

$config->set('libsFolder', '../application/libs/');
$config->set('controllersFolder', '../application/controllers/');
$config->set('modelsFolder', '../application/models/');
$config->set('viewsFolder', '../application/views/');
$config->set('imagesFolder', 'images/');
$config->set('langFolder', '../application/lang/');
$config->set('includeFolder', '../include/');
$config->set('defaultLang', 'ES');
$config->set('projectName', 'Ejemplo');
$config->set('projectClient', '');
$config->set('projectVersion', '1.0.0');
$config->set('projectLastUpdate', '02/08/2010');
$config->set('projectEmailFrom', '');
$config->set('sessionName', 'pruebas');

$config->set('dbhost', 'localhost');
$config->set('dbname', 'pruebas');
$config->set('dbuser', 'root');
$config->set('dbpass', '');
