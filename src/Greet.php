<?php
namespace Danielm\Hola;

class Greet
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sayit()
    {
        return "Hola, {$this->name}";
    }
}