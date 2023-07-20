<?php

use Concrete\Core\Application\Application;

/*
 * ----------------------------------------------------------------------------
 * Instantiate Concrete
 * ----------------------------------------------------------------------------
 */
$app = new Application();

/*
 * ----------------------------------------------------------------------------
 * Detect the environment based on the hostname of the server
 * ----------------------------------------------------------------------------
 */
$app->detectEnvironment(
    array(
        'local' => array(
            $_SERVER['CONCRETE5_ENV'],
        ),
        'production' => array(
            $_SERVER['CONCRETE5_ENV'],
        ),
    ));

return $app;
