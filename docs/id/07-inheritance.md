# Pewarisan (Inheritance)

*Pewarisan* memungkinkan sebuah kelas untuk mewarisi properti dan metode dari kelas lain.

Kelas yang sudah ada disebut sebagai *kelas induk (parent class)*.

Kelas baru disebut sebagai *kelas anak (child class)*.

Di PHP, pewarisan menggunakan kata kunci extends.

## Pewarisan Dasar (Basic Inheritance)

```php
class Animal
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
Dog mewarisi metode eat() dari Animal.

```bash
Animal
   ↑
  Dog
```

## Menambahkan Perilaku Baru (Adding New Behavior)

Sebuah kelas anak dapat memiliki properti dan metodenya sendiri.

```php
class Animal
{
    public function eat(): void
    {
        echo "Sedang makan";
    }
}

class Dog extends Animal
{
    public function bark(): void
    {
        echo "Guk guk";
    }
}

$dog = new Dog();

$dog->eat();
$dog->bark();
```

Objek Dog dapat menggunakan metode eat() yang diwarisi maupun metode bark() miliknya sendiri.

## Menimpa Metode (Method Overriding)

Sebuah kelas anak dapat menyediakan implementasinya sendiri untuk metode yang diwarisi.

```php
class Animal
{
    public function speak(): void
    {
        echo "Membuat suara";
    }
}

class Dog extends Animal
{
    public function speak(): void
    {
        echo "Guk guk";
    }
}

$dog = new Dog();

$dog->speak();
```

Versi speak() milik Dog menggantikan implementasi yang diwarisi.

## Kata Kunci parent

Kata kunci parent dapat digunakan untuk mengakses kelas induk.

```php
class Animal
{
    public function speak(): void
    {
        echo "Membuat suara";
    }
}

class Dog extends Animal
{
    public function speak(): void
    {
        parent::speak();

        echo " Guk guk";
    }
}

$dog = new Dog();

$dog->speak();
```

## Poin Penting:

- extends membuat hubungan pewarisan.
- Kelas anak mewarisi properti dan metode yang dapat diakses dari induknya.
- Kelas anak dapat menambahkan perilakunya sendiri.
- Kelas anak dapat menimpa (override) metode yang diwarisi.
- parent:: mengakses kelas induk.

## Example

```php
--8<-- "examples/07-inheritance.php"
```