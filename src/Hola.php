<?php
namespace Danielm\Hola;

class Hola
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet()
    {
        return "Hola, {$this->name}";
    }
}