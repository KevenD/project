<?php


require 'vendor/autoload.php';


$app = new \Slim\App;

$app->get('/', function($req, $res)
	{
	return $response->write('Home');
	});
$app->get('/contact', function($req, $res)
	{
	return $response->write('This is the contact page.');
	});

$all->run();


