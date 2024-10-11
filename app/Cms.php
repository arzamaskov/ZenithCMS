<?php

// vim: set ts=4 sw=4 sts=4 et:

namespace App;

use App\DI\DI;

class Cms
{
    /**
     * @var DI
     */
    private $di;

    /**
     * Cms constructor.
     */
    public function __construct(DI $di): void
    {
        $this->di = $di;
    }

    /**
     * Run CMS.
     */
    public function run()
    {
        // code...
    }
}
