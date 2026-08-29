<?php

class Animal
{
    public function speak(): void
    {
        echo "Some sound" . PHP_EOL;
    }
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

function makeAnimalSpeak(Animal $animal): void
{
    $animal->speak();
}

$dog = new Dog();
$cat = new Cat();

makeAnimalSpeak($dog);
makeAnimalSpeak($cat);
