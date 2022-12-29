<?php 

class Person {
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function job() {
        return 'software developer';
    }
    
    public function favoriteTeam() {
        
    }
    private function thingsThatKeepMeUpAtNight() {
        return 'We are all going to die and that is terrifying';
    }
}

$method = new \ReflectionMethod(Person::class, 'thingsThatKeepMeUpAtNight');
$method->setAccessible(true);

$person = new Person('Brad');

var_dump($method->invoke($person));