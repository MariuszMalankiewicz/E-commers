<?php

namespace Core;

use Exception;

class Container
{
    protected $bindings = [];

    public function bind(string $key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }

    public function resolve($key)
    {
        if(!array_key_exists($key, $this->bindings))
        {
            throw new Exception("bind not matching for {$key}");
        }
        
        $resolver = $this->bindings[$key];

        return call_user_func($resolver);
    }
}