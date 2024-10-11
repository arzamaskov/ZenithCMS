<?php

namespace App\DI;

class DI
{
    /**
     * @var array
     */
    private $container = [];

    public function set($key, $value): DI
    {
        $this->container[$key] = $value;

        return $this;
    }

    public function get($key)
    {
        return $this->has($key) ?: $this->container[$key];
    }

    public function has($key): bool
    {
        return isset($this->container[$key]);
    }
}
