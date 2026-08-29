# Visibilitas dan Enkapsulasi (Visibility and Encapsulation)

*Visibilitas* mengontrol di mana properti atau metode dapat diakses.
PHP memiliki tiga tingkat visibilitas:

- public — dapat diakses dari mana saja.
- protected — dapat diakses di dalam kelas itu sendiri dan kelas anak (child classes).
- private — hanya dapat diakses di dalam kelas itu sendiri.

## Publik (Public)

Properti atau metode publik dapat diakses dari luar kelas.

```php
class User
{
    public string $name;
}

$user = new User();
$user->name = "John";

echo $user->name;
```

## Dilindungi (Protected)

Properti atau metode yang dilindungi dapat diakses di dalam kelas dan kelas anaknya.

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

Properti ini tidak dapat diakses secara langsung dari luar:

```php
$user->name; // Error
```

## Pribadi (Private)

Properti atau metode privat hanya dapat diakses di dalam kelas yang mendefinisikannya.

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

Password tidak dapat diakses secara langsung:

```php
$user->password; // Error
```

## Enkapsulasi (Encapsulation)

Enkapsulasi berarti menjaga data internal objek tetap terlindungi dan mengontrol bagaimana data tersebut diakses atau diubah.
Sebagai contoh:

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

Properti $balance bersifat privat, sehingga kode luar tidak dapat mengubahnya secara langsung.
Sebagai gantinya, kelas mengontrol perubahan tersebut melalui metode deposit().

## Poin Penting:

- public → dapat diakses di mana saja.
- protected → kelas dan kelas anak.
- private → hanya di dalam kelas pendefinisinya.
- Visibilitas mengontrol akses ke properti dan metode.
- Enkapsulasi melindungi status internal sebuah objek.

## Example

```php
--8<-- "examples/06-visibility-and-encapsulation.php"
```