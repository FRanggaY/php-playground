# Visibility and Encapsulation

*Visibility* controls where a property or method can be accessed.

PHP has three visibility levels:

- public — accessible from anywhere.
- protected — accessible inside the class and its child classes.
- private — accessible only inside the class.

## Public

A public property or method can be accessed from outside the class.

```php
class User
{
    public string $name;
}

$user = new User();
$user->name = "John";

echo $user->name;
```

## Protected

A protected property or method can be accessed inside the class and its child classes.

```php
class User
{
    protected string $name;
}

class Admin extends User
{
    public function showName(): void
    {
        echo $this->name;
    }
}
```


It cannot be accessed directly from outside:

```php
$user->name; // Error
```

## Private

A private property or method can only be accessed inside the class that defines it.

```php
class User
{
    private string $password;

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}
```

The password cannot be accessed directly:

```php
$user->password; // Error
```

## Encapsulation

Encapsulation means keeping an object's internal data protected and controlling how it is accessed or changed.

For example:

```php
class BankAccount
{
    private float $balance = 0;

    public function deposit(float $amount): void
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}
```

The balance property is private, so outside code cannot change it directly.

Instead, the class controls changes through deposit().

## Key Points
- public → accessible everywhere.
- protected → class and child classes.
- private → only the defining class.
- Visibility controls access to properties and methods.
- Encapsulation protects an object's internal state.

## Example

```php
--8<-- "examples/06-visibility-and-encapsulation.php"
```