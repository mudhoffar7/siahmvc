<?php

$router = new Phalcon\Mvc\Router();

$router->add('/login', array(
	'controller' => 'pengguna' , 
	'action' => 'login',
));

return $router;