# OOP Fundamentals

Object-Oriented Programming (OOP) is a programming style that organizes code around objects.

An object contains:

- Data — what the object has.
- Behavior — what the object can do.

For example, a User might have a name and email, and it might be able to log in or log out.

```bash
User
├── Data
│   ├── name
│   └── email
│
└── Behavior
    ├── login()
    └── logout()
```

## Class and Object

A *class* is a blueprint for creating objects.

An *object* is an instance created from a class.

```php
class User
{
    public string $name;

    public function login(): void
    {
        echo "User logged in";
    }
}
$user = new User();
$user->name = "John";

$user->login();
```


Here:

- User is the class.
- $user is an object.
- $name is a property.
- login() is a method.
- new User() creates an object.

## Why OOP?

OOP helps us organize larger programs by keeping related data and behavior together.

Instead of having unrelated variables and functions everywhere:

```bash
User data
User functions
Product data
Product functions
Order data
Order functions
```


we can organize them into objects:

```bash
User
Product
Order
```

This makes code easier to organize, reuse, and maintain.

## Example

```php
--8<-- "examples/02-oop-fundamentals.php"
```