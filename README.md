# Simple E-Commerce RESTful API

RESTful API sederhana untuk platform *e-commerce* yang dibangun menggunakan **Laravel 11**, **Laravel Sanctum** untuk sistem otentikasi token yang aman, dan **PostgreSQL** sebagai sistem manajemen database relasional yang tangguh.

Proyek ini dirancang dengan standar arsitektur backend modern, pemisahan *logic* yang bersih, serta dokumentasi endpoint yang jelas untuk kebutuhan integrasi aplikasi mobile maupun web.

---

## 🚀 Fitur Utama

- **Otentikasi Token Robust:** Sistem registrasi dan login terproteksi menggunakan Laravel Sanctum guna menghasilkan Bearer Token yang aman.
- **Manajemen Produk Terproteksi (CRUD):** Fitur penambahan, pembacaan, pembaruan, dan penghapusan data produk yang hanya dapat diakses oleh pengguna sah (terautentikasi).
- **Arsitektur Laravel 11 Terpusat:** Memanfaatkan efisiensi struktur routing API terbaru dan manajemen *middleware* yang efisien.
- **Keamanan Database Relasional:** Menggunakan skema PostgreSQL dengan validasi *unique data* untuk menjaga integritas data pengguna dan produk.

---

## 🛠️ Persyaratan Sistem

Sebelum menjalankan proyek ini secara lokal, pastikan lingkungan pengembangan Anda telah memenuhi persyaratan berikut:

- PHP >= 8.2
- Composer (Dependency Manager)
- PostgreSQL Database Server
- Driver PHP PostgreSQL (`php-pgsql` / `pdo_pgsql` aktif)

---

## 💻 Cara Instalasi dan Konfigurasi Lokal

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer Anda:

### 1. Kloning Repositori

```bash
git clone https://github.com
cd Laravel_API
```

### 2. Instal Dependensi Composer

```bash
composer install
```

### 3. Konfigurasi Environment File

Salin file contoh konfigurasi `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

Buka file `.env` yang baru dibuat menggunakan teks editor Anda, lalu sesuaikan kredensial koneksi database PostgreSQL Anda pada bagian berikut:

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=simple_ecommerce_db
DB_USERNAME=username_postgres_anda
DB_PASSWORD=password_postgres_anda
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Jalankan Migrasi Database

Jalankan perintah ini untuk membuat seluruh tabel sistem otentikasi dan tabel produk secara otomatis ke dalam PostgreSQL:

```bash
php artisan migrate
```

### 6. Jalankan Server Lokal

```bash
php artisan serve
```

Aplikasi API Anda sekarang sudah aktif dan dapat diakses melalui alamat lokal: `http://127.0.0.1:8000`

---

## 📡 Dokumentasi Endpoint API

Gunakan *API Client* favorit Anda (seperti Thunder Client atau Postman) dengan menyertakan Header dasar wajib berikut pada setiap request:

- **Accept:** `application/json`

### 1. Jalur Akses Publik (Tanpa Token)

| HTTP Method    | Endpoint          | Deskripsi                                     | Payload (JSON Body)               |
| :------------- | :---------------- | :-------------------------------------------- | :-------------------------------- |
| **POST** | `/api/register` | Mendaftarkan akun developer baru              | `name`, `email`, `password` |
| **POST** | `/api/login`    | Autentikasi akun dan mendapatkan Bearer Token | `email`, `password`           |

### 2. Jalur Akses Terproteksi (Wajib Header: `Authorization: Bearer <token>`)

| HTTP Method         | Endpoint               | Deskripsi                                     | Payload (JSON Body)                                        |
| :------------------ | :--------------------- | :-------------------------------------------- | :--------------------------------------------------------- |
| **GET**       | `/api/products`      | Mengambil seluruh daftar produk dari database | *None*                                                   |
| **POST**      | `/api/products`      | Menambahkan produk baru ke database           | `name`, `description`, `price`, `stock`            |
| **GET**       | `/api/products/{id}` | Melihat informasi detail satu produk spesifik | *None*                                                   |
| **PUT/PATCH** | `/api/products/{id}` | Memperbarui informasi data produk tertentu    | `name`, `description`, `price`, `stock` (Opsional) |
| **DELETE**    | `/api/products/{id}` | Menghapus data produk secara permanen         | *None*                                                   |

---

## 📝 Contoh Respons Payload (JSON)

### Respons Sukses Login (`200 OK`)

```json
{
  "message": "Login sukses",
  "access_token": "1|qnXyZ...kunci_token_panjang...",
  "token_type": "Bearer"
}
```

### Respons Sukses Tambah Produk (`201 Created`)

```json
{
  "id": 1,
  "name": "Logitech G Pro X Superlight",
  "description": "Mouse gaming wireless ultra ringan pilihan atlet esport.",
  "price": "1900000.00",
  "stock": 5,
  "created_at": "2026-10-31T02:00:00.000000Z",
  "updated_at": "2026-10-31T02:00:00.000000Z"
}
```

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
