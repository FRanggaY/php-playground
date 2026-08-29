<?php

class Animal
{
    public function eat(): void
    {
        echo "Eating..." . PHP_EOL;
    }

    public function speak(): void
    {
        echo "Some sound" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function speak(): void
    {
        parent::speak();

        echo "Woof!" . PHP_EOL;
    }

    public function bark(): void
    {
        echo "Dog is barking!" . PHP_EOL;
    }
}

$dog = new Dog();

$dog->eat();
$dog->speak();
$dog->bark();
