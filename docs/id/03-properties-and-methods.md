## Properti dan Metode (Properties and Methods)

Properti dan metode adalah dua bagian utama yang mendefinisikan data dan perilaku sebuah objek.

- Properti — menyimpan data tentang suatu objek.
- Metode — mendefinisikan apa yang dapat dilakukan oleh suatu objek.

### Properti (Properties)

Sebuah properti adalah variabel yang menjadi milik sebuah kelas.

```php
class User
{
    public string $name;
    public string $email;
}
```
Sebuah objek dapat memiliki nilai tersendiri untuk properti-properti ini:

```php
$user = new User();

$user->name = "John";
$user->email = "john@example.com";
```

Setiap objek dapat memiliki nilai properti yang berbeda-beda.

```php
$user1->name = "John";
$user2->name = "Jane";
```

### Metode (Methods)

Sebuah metode adalah fungsi yang menjadi milik sebuah kelas.

```php
class User
{
    public function login(): void
    {
        echo "User logged in";
    }
}
```
Sebuah metode dipanggil melalui sebuah objek:

```php
$user = new User();

$user->login();
```

Metode juga dapat menerima parameter dan mengembalikan nilai.

```php
class User
{
    public function greet(string $name): string
    {
        return "Halo, " . $name;
    }
}

$user = new User();

echo $user->greet("John");
```

## Example

```php
--8<-- "examples/03-properties-and-methods.php"
```