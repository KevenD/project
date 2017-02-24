<?php


require 'vendor/autoload.php';


$app = new \Slim\App;

$app->get('/', function($req, $res)
	{
	return $response->write('Home');
	});

$all->run();


