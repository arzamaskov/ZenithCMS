<?php

// vim: set ts=4 sw=4 sts=4 et:

use App\Cms;
use App\DI\DI;

try {
    // Dependency injection
    $di = new DI();
    // 
    $cms = new Cms($di);
    $cms->run();
} catch (ErrorException $e) {
    echo $e->getMessage();
}
