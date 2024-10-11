<?php

// vim: set ts=4 sw=4 sts=4 et:

namespace App\DI;

class DI
{
    /**
     * @var array
     */
    private $container = [];

    public function set(string $key, array $value): DI
    {
        $this->container[$key] = $value;

        return $this;
    }

    public function get(string $key)
    {
        return $this->has($key) ? $this->container[$key] : null;
    }

    public function has(string $key): bool
    {
        return isset($this->container[$key]);
    }
}
