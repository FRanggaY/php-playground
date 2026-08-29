# Properties and Methods
Properties and methods are the two main parts that define an object's data and behavior.

- Property — stores data about an object.
- Method — defines what an object can do.

### Properties
A property is a variable that belongs to a class.

```php
class User
{
    public string $name;
    public string $email;
}
```

An object can have its own values for these properties:

```php
$user = new User();

$user->name = "John";
$user->email = "john@example.com";
```
Each object can have different property values.
```php
$user1->name = "John";
$user2->name = "Jane";
```

### Methods
A method is a function that belongs to a class.

```php
class User
{
    public function login(): void
    {
        echo "User logged in";
    }
}
```

A method is called through an object:

```php
$user = new User();

$user->login();
```

Methods can also accept parameters and return values.

```php
class User
{
    public function greet(string $name): string
    {
        return "Hello, " . $name;
    }
}

$user = new User();

echo $user->greet("John");
```

## Example

```php
--8<-- "examples/03-properties-and-methods.php"
```