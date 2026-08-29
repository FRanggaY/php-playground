# Full Practice — Mini Bank
Dalam praktik ini, Anda akan membangun sistem akun bank kecil menggunakan konsep-konsep OOP yang telah dipelajari pada materi sebelumnya.

## Tujuan
Membuat sistem sederhana yang dapat:

- Membuat akun bank
- Menyetor uang
- Menarik uang
- Mengecek saldo
- Menampilkan informasi akun

## Persyaratan
Buat kelas dasar BankAccount dengan:

- Nomor akun
- Pemilik akun
- Saldo
- Metode deposit
- Metode penarikan
- Metode pengecekan saldo

Saldo tidak boleh dapat diakses secara langsung dari luar kelas.

Kemudian buat setidaknya dua jenis akun, seperti:

- SavingsAccount (Akun Tabungan)
- CurrentAccount (Akun Giro)

Setiap jenis akun harus memiliki perilaku yang berbeda.

Gunakan konsep-konsep OOP yang telah Anda pelajari:

- Kelas dan objek (Class and object)
- Properti dan metode (Properties and methods)
- Tipe objek (Object types)
- Konstruktor (Constructor)
- Visibilitas (Visibility)
- Enkapsulasi (Encapsulation)
- Pewarisan (Inheritance)
- Polimorfisme (Polymorphism)
- Abstraksi (Abstraction)

## Contoh Penggunaan
Program akhir Anda seharusnya dapat melakukan sesuatu yang mirip dengan:

```php
$account = new SavingsAccount(
    "ACC-001",
    "John",
    1000
);

$account->deposit(500);
$account->withdraw(200);

echo $account->getBalance();
```

Hasil yang diharapkan:

```bash
1300
```

## Tantangan
Cobalah membangun aplikasi sendiri sebelum melihat solusinya.

Tujuannya bukan hanya sekadar membuat program berjalan. Cobalah tentukan:

- Kelas mana yang harus memiliki setiap bagian data?
- Properti mana yang harus bersifat privat (private)?
- Perilaku mana yang harus menjadi milik kelas induk?
- Perilaku mana yang harus berbeda untuk setiap jenis akun?
- Di mana pewarisan (inheritance) harus digunakan?
- Di mana polimorfisme (polymorphism) harus digunakan?

Saran Struktur Kelas
Anda dapat mulai dengan:

```bash
BankAccount
├── SavingsAccount
└── CurrentAccount
```

Anda bebas merancang kelas secara berbeda jika memiliki pendekatan yang lebih baik.

## Sumber Code untuk dikerjakan

```php
--8<-- "examples/10-full-practice-mini-bank/index.php"
```