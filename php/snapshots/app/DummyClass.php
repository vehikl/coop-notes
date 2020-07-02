<?php

namespace App;

class DummyClass
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function greet()
    {
        return "Hello, {$this->name}\n";
    }
}