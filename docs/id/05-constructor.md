# Konstruktor (Constructor)

Konstruktor adalah metode khusus yang berjalan secara otomatis saat sebuah objek dibuat.
Di PHP, konstruktor dinamai __construct().

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

Saat kita menulis:

```php
$user = new User("John");
```

PHP secara otomatis memanggil:

```php
__construct("John");
```

## Mengapa Menggunakan Konstruktor?

Konstruktor umumnya digunakan untuk menginisialisasi objek dengan data yang dibutuhkannya.

Tanpa konstruktor:

```php
$user = new User();
$user->name = "John";
```

Dengan konstruktor:

```php
$user = new User("John");
```

Pendekatan kedua membuat data yang diperlukan menjadi lebih jelas saat membuat objek.

## $this

Di dalam sebuah kelas, $this merujuk ke objek saat ini.

```php
$this->name = $name;
```

Disini:

- $name adalah parameter konstruktor.
- $this->name adalah properti milik objek tersebut.

## Konstruktor Tanpa Parameter

Sebuah konstruktor juga dapat tidak memiliki parameter:

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

## Poin Penting:

- __construct() dipanggil secara otomatis saat sebuah objek dibuat.
- Ini umumnya digunakan untuk menginisialisasi properti objek.
- Parameter konstruktor dapat mewajibkan adanya data saat membuat objek.
- $this merujuk ke objek saat ini.

## Example

```php
--8<-- "examples/05-constructor.php"
```