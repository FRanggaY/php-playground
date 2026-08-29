# Object Types

In PHP, a class can be used as a type.

This allows us to specify what kind of object a property, parameter, or return value should contain.

## Class as a Type

```php
class User
{
    public string $name;
}

function showUser(User $user): void
{
    echo $user->name;
}
```

The User type means that $user must be an object created from the User class.

```php
$user = new User();
$user->name = "John";

showUser($user);
```

## Property Type

A property can also use a class as its type.

```php
class User
{
    public string $name;
}

class Profile
{
    public User $user;
}
```

Now $user must contain a User object.

```php
$profile = new Profile();
$profile->user = new User();
```

## Return Type

A method can return an object of a specific class.

```php
class User
{
}

class UserService
{
    public function createUser(): User
    {
        return new User();
    }
}
```

## instanceof

The instanceof operator checks whether an object is an instance of a specific class.

```php
$user = new User();

if ($user instanceof User) {
    echo "This is a User";
}
```

## Key Points
- A class can be used as a type.
- Class types can be used for properties, parameters, and return values.
- instanceof checks an object's type.
- Type declarations help make code more predictable.

## Example

```php
--8<-- "examples/04-object-types.php"
```