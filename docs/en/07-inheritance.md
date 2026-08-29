# Inheritance

*Inheritance* allows a class to inherit properties and methods from another class.

The existing class is called the *parent class*.

The new class is called the *child class*.

In PHP, inheritance uses the extends keyword.

## Basic Inheritance

```php
class Animal
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

Dog inherits the eat() method from Animal.

```bash
Animal
   ↑
  Dog
```

## Adding New Behavior

A child class can have its own properties and methods.

```php
class Animal
{
    public function eat(): void
    {
        echo "Eating";
    }
}

class Dog extends Animal
{
    public function bark(): void
    {
        echo "Woof";
    }
}

$dog = new Dog();

$dog->eat();
$dog->bark();
```

The Dog object can use both the inherited eat() method and its own bark() method.

## Method Overriding
A child class can provide its own implementation of an inherited method.

```php
class Animal
{
    public function speak(): void
    {
        echo "Some sound";
    }
}

class Dog extends Animal
{
    public function speak(): void
    {
        echo "Woof";
    }
}

$dog = new Dog();

$dog->speak();
```

The Dog version of speak() replaces the inherited implementation.

## parent
The parent keyword can be used to access the parent class.

```php
class Animal
{
    public function speak(): void
    {
        echo "Some sound";
    }
}

class Dog extends Animal
{
    public function speak(): void
    {
        parent::speak();

        echo " Woof";
    }
}

$dog = new Dog();

$dog->speak();
```

## Key Points
- extends creates an inheritance relationship.
- A child class inherits accessible properties and methods from its parent.
- A child class can add its own behavior.
- A child class can override inherited methods.
- parent:: accesses the parent class.

## Example

```php
--8<-- "examples/07-inheritance.php"
```