# Polymorphism

Polymorphism means that different objects can be used through the same type while providing different behavior.

For example, different animals can have different implementations of speak().

## Basic Example

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

class Cat extends Animal
{
    public function speak(): void
    {
        echo "Meow";
    }
}
```

Both Dog and Cat are Animal objects, but they behave differently.

```php
$dog = new Dog();
$cat = new Cat();

$dog->speak();
$cat->speak();
```


Output:
```bash
Woof
Meow
```

## Using a Parent Type

A method can accept the parent class as a type.

```php
function makeAnimalSpeak(Animal $animal): void
{
    $animal->speak();
}
```

Now we can pass different child objects:

```php
makeAnimalSpeak(new Dog());
makeAnimalSpeak(new Cat());
```

The function does not need to know whether it received a Dog or a Cat.

It only needs to know that the object is an Animal.

## Why Polymorphism?

Polymorphism allows code to work with different objects through a common type.

Instead of writing:
```php
if ($animal instanceof Dog) {
    // ...
}

if ($animal instanceof Cat) {
    // ...
}
```

we can simply call:

```php
$animal->speak();
```

Each object provides its own behavior.

## Key Points
- Different objects can share a common type.
- Child classes can provide different implementations of the same method.
- Code can work with the parent type without knowing the exact child class.
- Polymorphism reduces the need for type-specific logic.

## Example

```php
--8<-- "examples/08-polymorphism.php"
```