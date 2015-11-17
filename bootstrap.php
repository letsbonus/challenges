<?php
// bootstrap.php

// Dependencies
use Silex\Provider\TwigServiceProvider;

// Defines config
define('basedir', __DIR__);
date_default_timezone_set('Europe/Madrid');
$config = require basedir . '/config.php';
require basedir . '/vendor/autoload.php';

$app = new Silex\Application($config);

$app->register(new TwigServiceProvider(), [
    'twig.path' => basedir . '/views',
    'twig.options' => [
        'cache' => false,
    ],
]);

$app['debug'] = true;

return $app; 