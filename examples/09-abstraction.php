<?php

abstract class Animal
{
    public function eat(): void
    {
        echo "Eating..." . PHP_EOL;
    }

    abstract public function speak(): void;
}

class Dog extends Animal
{
    public function speak(): void
    {
        echo "Woof!" . PHP_EOL;
    }
}

class Cat extends Animal
{
    public function speak(): void
    {
        echo "Meow!" . PHP_EOL;
    }
}

$dog = new Dog();
$cat = new Cat();

$dog->eat();
$dog->speak();

$cat->eat();
$cat->speak();
