<?php

// vim: set ts=4 sw=4 sts=4 et:

require_once __DIR__ . '/../vendor/autoload.php';

use App\Cms;
use App\DI\DI;

try {
    // Dependency injection
    $di = new DI();
    // 
    $di->set('test', ['db' => 'db_object']);
    $di->set('test2', ['mail' => 'mail_object']);

    $cms = new Cms($di);
    $cms->run();
} catch (ErrorException $e) {
    echo $e->getMessage();
}
