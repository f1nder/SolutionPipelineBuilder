<?php
/*
 * This file bootstraps the test environment.
 */
namespace Tests;

error_reporting(E_ALL | E_STRICT);

if (file_exists(__DIR__ . '/../../vendor/autoload.php')) {
    $classLoader = require __DIR__ . '/../../vendor/autoload.php';
} else {
    throw new \Exception('Can\'t find autoload.php. Did you install dependencies via composer?');
}

/* @var $classLoader \Composer\Autoload\ClassLoader */
$classLoader->add('Tests\\', __DIR__ . '/../');