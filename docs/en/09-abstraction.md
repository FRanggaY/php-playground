# Abstraction

*Abstraction* means defining what an object should do without requiring every detail of how it does it.

In PHP, abstraction can be created using an abstract class.

## Abstract Class

An abstract class cannot be created directly.

```php
abstract class Animal
{
}
```


This is not allowed:
```php
$animal = new Animal();
```

Instead, another class can extend it:

```php
abstract class Animal
{
    public function eat(): void
    {
        echo "Eating";
    }
}

class Dog extends Animal
{
}

$dog = new Dog();

$dog->eat();
```

## Abstract Methods

An abstract class can define a method without providing its implementation.

```php
abstract class Animal
{
    abstract public function speak(): void;
}
```

A child class must implement the abstract method:

```php
class Dog extends Animal
{
    public function speak(): void
    {
        echo "Woof";
    }
}
```


Now:
```php
$dog = new Dog();

$dog->speak();
```

## Why Use Abstraction?

Abstraction is useful when several classes share a common concept but need different implementations.

For example:

```bash
Animal
  ├── Dog
  ├── Cat
  └── Bird
```

All animals might need a speak() method, but each animal can implement it differently.

## Key Points
- An abstract class cannot be instantiated directly.
- An abstract class can contain normal methods.
- An abstract method has no implementation in the parent class.
- Child classes must implement inherited abstract methods.
- Abstraction defines a common structure while leaving specific behavior to child classes.

## Example

```php
--8<-- "examples/09-abstraction.php"
```