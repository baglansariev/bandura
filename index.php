<?php
	session_start();
	
	require_once('application/core/lib/devtools.php');
	require_once('application/core/lib/define.php');
	require_once('application/core/lib/autoload.php');

	$router = new application\core\Router;
	$router->run();