# Polimorfisme (Polymorphism)

Polimorfisme berarti objek yang berbeda dapat digunakan melalui tipe yang sama namun memberikan perilaku yang berbeda.

Sebagai contoh, hewan yang berbeda dapat memiliki implementasi speak() yang berbeda pula.

## Contoh Dasar (Basic Example)

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

class Cat extends Animal
{
    public function speak(): void
    {
        echo "Meow";
    }
}
```

Baik Dog maupun Cat adalah objek Animal, tetapi perilakunya berbeda.

```php
$dog = new Dog();
$cat = new Cat();

$dog->speak();
$cat->speak();
```

Output:

```bash
Guk guk
Meow
```

## Menggunakan Tipe Induk (Using a Parent Type)

Sebuah metode dapat menerima kelas induk sebagai tipenya.

```php
function makeAnimalSpeak(Animal $animal): void
{
    $animal->speak();
}
```
Sekarang kita dapat memasukkan objek anak yang berbeda:

```php
makeAnimalSpeak(new Dog());
makeAnimalSpeak(new Cat());
```

Fungsi tersebut tidak perlu tahu apakah ia menerima Dog atau Cat.

Fungsi itu hanya perlu tahu bahwa objek tersebut adalah Animal.

## Mengapa Polimorfisme?

Polimorfisme memungkinkan kode bekerja dengan objek yang berbeda melalui tipe yang umum.

Daripada menulis:

```php
if ($animal instanceof Dog) {
    // ...
}

if ($animal instanceof Cat) {
    // ...
}
```

kita cukup memanggil:

```php
$animal->speak();
```

Setiap objek menyediakan perilakunya sendiri.

## Poin Penting:
- Objek yang berbeda dapat membagikan tipe yang sama.
- Kelas anak dapat menyediakan implementasi yang berbeda dari metode yang sama.
- Kode dapat bekerja dengan tipe induk tanpa harus mengetahui kelas anak secara pasti.
- Polimorfisme mengurangi kebutuhan akan logika yang spesifik berdasarkan tipe.

## Example

```php
--8<-- "examples/08-polymorphism.php"
```