<?php
// include Composer Autoload file
require 'vendor/autoload.php';

// Define some configuration for database
$database = [
    'host' => 'localhost',
    'name' => 'u166958421_wls',
    'user' => 'u166958421_wls',
    'pass' => 'iocpattern123',
];


$app = new \RKA\Slim();

// Register a Repository to manage movies
$app->container->singleton('FilmsRepository', function ( $container ) {
    return new App\Repository\FilmsRepository();
});

// Register the default Controller 
$app->container->singleton('App\FilmsController', function ( $container ) {
    // Retrieve the required repository from the container and
    // inject it in the controller
    $repo = $container['FilmsRepository'];
    return new \App\Controller\FilmsController( $repo );
});

// Register the ORM
$app->container->singleton('ORM', function ( $container ) use ( $database ) {
    $pdo = new PDO("mysql:host=". $database['host'] .";dbname=". $database['name'], $database['user'], $database['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return new Voodoo\VoodOrm($pdo);
});

$app->get('/films', 'App\FilmsController:index');
$app->get('/films/:id', 'App\FilmsController:show');

$app->run();