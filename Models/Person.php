<?php
namespace Models;
class Person
{
    private string $name;
    private int $weight;

    public function __construct(string $name, int $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getName(): string
    {
        return $this->name;
    }


}