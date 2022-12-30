<?php

class Age
{
    private $age;
    public function __construct($age)
    {
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException(('dude are you benjamin button?'));
        }
        $this->age = $age;
    }

    public function increment()
    {
        return new self($this->age +1);
    }

    public function get()
    {
        return $this->age;
    }
}

$age = new Age(45);
$age = $age->increment();
var_dump($age);
