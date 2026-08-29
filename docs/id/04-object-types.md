# Tipe Objek (Object Types)

Di PHP, sebuah kelas dapat digunakan sebagai tipe data.

Ini memungkinkan kita untuk menentukan jenis objek apa yang harus terkandung dalam properti, parameter, atau nilai kembalian (return value).

## Kelas sebagai Tipe (Class as a Type)

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

Tipe User berarti $user harus berupa objek yang dibuat dari kelas User.

```php
$user = new User();
$user->name = "John";

showUser($user);
```

## Tipe Properti (Property Type)

Sebuah properti juga dapat menggunakan kelas sebagai tipenya.

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

Sekarang $user harus berisi objek User.

```php
$profile = new Profile();
$profile->user = new User();
```

## Tipe Kembalian (Return Type)

Sebuah metode dapat mengembalikan objek dari kelas tertentu.

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

Operator instanceof memeriksa apakah sebuah objek merupakan instans dari kelas tertentu.

```php
$user = new User();

if ($user instanceof User) {
    echo "Ini adalah User";
}
```

## Poin Penting:

- Sebuah kelas dapat digunakan sebagai tipe.
- Tipe kelas dapat digunakan untuk properti, parameter, dan nilai kembalian.
- instanceof memeriksa tipe sebuah objek.
- Deklarasi tipe membantu membuat kode lebih mudah diprediksi.

## Example

```php
--8<-- "examples/04-object-types.php"
```