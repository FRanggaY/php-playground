# Abstraksi (Abstraction)

*Abstraksi* berarti mendefinisikan apa yang harus dilakukan oleh sebuah objek tanpa harus merinci bagaimana cara melakukannya.
Di PHP, abstraksi dapat dibuat menggunakan kelas abstrak (abstract class).

## Kelas Abstrak (Abstract Class)

Sebuah kelas abstrak tidak dapat dibuat (diinstansiasi) secara langsung.

```php
abstract class Animal
{
}
```

Hal ini tidak diizinkan:

```php
$animal = new Animal();
```
Sebagai gantinya, kelas lain dapat memperluasnya (extends):

```php
abstract class Animal
{
    public function eat(): void
    {
        echo "Sedang makan";
    }
}

class Dog extends Animal
{
}

$dog = new Dog();

$dog->eat();
```

## Metode Abstrak (Abstract Methods)

Sebuah kelas abstrak dapat mendefinisikan sebuah metode tanpa menyediakan implementasinya.

```php
abstract class Animal
{
    abstract public function speak(): void;
}
```
Kelas anak wajib mengimplementasikan metode abstrak tersebut:

```php
class Dog extends Animal
{
    public function speak(): void
    {
        echo "Guk guk";
    }
}
```
Sekarang:

```php
$dog = new Dog();

$dog->speak();
```

## Mengapa Menggunakan Abstraksi?

Abstraksi berguna ketika beberapa kelas memiliki konsep umum yang sama tetapi memerlukan implementasi yang berbeda.
Sebagai contoh:

```bash
Animal
  ├── Dog
  ├── Cat
  └── Bird
```
Semua hewan mungkin memerlukan metode speak(), tetapi setiap hewan dapat mengimplementasikannya dengan cara yang berbeda.

## Poin Penting:

- Kelas abstrak tidak dapat diinstansiasi secara langsung.
- Kelas abstrak dapat berisi metode normal.
- Metode abstrak tidak memiliki implementasi di kelas induk.
- Kelas anak wajib mengimplementasikan metode abstrak yang diwarisi.
- Abstraksi mendefinisikan struktur umum sekaligus menyerahkan perilaku spesifik kepada kelas anak.

## Example

```php
--8<-- "examples/09-abstraction.php"
```