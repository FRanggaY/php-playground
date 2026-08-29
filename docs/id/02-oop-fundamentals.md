# Dasar-Dasar OOP

Pemrograman Berorientasi Objek (Object-Oriented Programming/OOP) adalah gaya pemrograman yang mengorganisasikan kode di sekitar objek.

Sebuah objek berisi:

- Data — apa yang dimiliki oleh objek tersebut.
- Perilaku (Behavior) — apa yang dapat dilakukan oleh objek tersebut.

Sebagai contoh, seorang User (Pengguna) mungkin memiliki nama dan email, serta dapat masuk (login) atau keluar (logout).

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

## Kelas dan Objek (Class and Object)

Sebuah *kelas* adalah cetak biru (blueprint) untuk membuat objek.

Sebuah *objek* adalah instans yang dibuat dari sebuah kelas.

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

## Mengapa OOP?

OOP membantu kita mengorganisasikan program yang lebih besar dengan menjaga data dan perilaku yang saling berkaitan agar tetap berada di satu tempat.

Daripada memiliki variabel dan fungsi yang tidak saling berkaitan di mana-mana:

```bash
User data
User functions
Product data
Product functions
Order data
Order functions
```
kita dapat mengorganisasikannya ke dalam objek:

```bash
User
Product
Order
```

Hal ini membuat kode lebih mudah diorganisasikan, digunakan kembali, dan dipelihara.

## Example

```php
--8<-- "examples/02-oop-fundamentals.php"
```