# Constructor

A constructor is a special method that runs automatically when an object is created.

In PHP, the constructor is named __construct().

```php
class User
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
$user = new User("John");

echo $user->name;
```

When we write:

```php
$user = new User("John");
```

PHP automatically calls:

```php
__construct("John");
```

## Why Use a Constructor?

A constructor is commonly used to initialize an object with the data it needs.

Without a constructor:

```php
$user = new User();
$user->name = "John";
```

With a constructor:

```php
$user = new User("John");
```

The second approach makes the required data clear when creating the object.

## $this

Inside a class, $this refers to the current object.

```php
$this->name = $name;
```

Here:

- $name is the constructor parameter.
- $this->name is the object's property.

## Constructor Without Parameters

A constructor can also have no parameters:

```php
class User
{
    public function __construct()
    {
        echo "User created";
    }
}

$user = new User();
```

## Key Points
- __construct() is called automatically when an object is created.
- It is commonly used to initialize object properties.
- Constructor parameters can require data when creating an object.
- $this refers to the current object.

## Example

```php
--8<-- "examples/05-constructor.php"
```