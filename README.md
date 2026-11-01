# 🚀 Laravel REST API Starter Kit (V1)

A clean, production-ready, and scalable **Laravel REST API Boilerplate** built with modern backend architecture principles. Perfect for building robust APIs or launching digital products quickly.

---

## ✨ Key Features

- **Clean Architecture & Thin Controllers**: Clear separation of concerns for maximum code maintainability.
- **Unified API Response**: Consistent JSON response format powered by a custom `ApiResponse` trait.
- **Form Request Validation**: Dedicated validation classes (`Requests/Api/V1`) to keep logic out of controllers.
- **Data Transformation**: Flexible API data serialization via `JsonResource` (`Resources/V1`).
- **Authentication System**: Pre-configured User Registration and Login endpoints.
- **Product Module (CRUD)**: Fully structured sample resource showcasing standard CRUD operations with pagination.
- **Ready-to-use Postman Collection**: Included for instant API testing across development tools.

---

## 📂 Directory Structure

app/
├── Http/
│   ├── Controllers/
│   │   └── Api/
│   │       └── V1/
│   │           ├── AuthController.php
│   │           └── ProductController.php
│   ├── Requests/
│   │   └── Api/
│   │       └── V1/
│   │           ├── Auth/
│   │           │   ├── LoginRequest.php
│   │           │   └── RegisterRequest.php
│   │           └── Product/
│   │               ├── StoreProductRequest.php
│   │               └── UpdateProductRequest.php
│   └── Resources/
│       └── V1/
│           ├── ProductResource.php
│           └── UserResource.php
└── Traits/
    └── ApiResponse.php

---

## ⚡ Quick Start & Installation

### 1. Clone the Repository

```bash
git clone <repository-url>
cd simple-ecommerce-api
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Environment Configuration

```bash
cp .env.example .env
php artisan key:generate
```

Configure your database connection inside `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=simple_ecommerce
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Run Migrations & Seeders

```bash
php artisan migrate
```

### 5. Start Development Server

```bash
php artisan serve
```

> The API will be accessible at: `http://127.0.0.1:8000/api/v1`

---

## 📡 API Endpoints Overview

### Auth Endpoints

| Method   | Endpoint             | Description                              | Auth Required |
| :------- | :------------------- | :--------------------------------------- | :------------ |
| `POST` | `/api/v1/register` | Register a new user                      | No            |
| `POST` | `/api/v1/login`    | Authenticate user & receive access token | No            |

### Product Endpoints

| Method     | Endpoint                  | Description                         | Auth Required |
| :--------- | :------------------------ | :---------------------------------- | :------------ |
| `GET`    | `/api/v1/products`      | Retrieve paginated list of products | No            |
| `POST`   | `/api/v1/products`      | Create a new product                | No / Sanctum  |
| `GET`    | `/api/v1/products/{id}` | Get detailed product information    | No            |
| `PUT`    | `/api/v1/products/{id}` | Update existing product details     | No / Sanctum  |
| `DELETE` | `/api/v1/products/{id}` | Remove a product                    | No / Sanctum  |

---

## 🧪 Postman & Thunder Client Testing

A pre-configured API collection is included under the `postman/` directory:
`postman/thunder-collection_postman_Laravel API Starter Kit.json`

### How to Import:

1. Open **Postman** or **Thunder Client** (VS Code).
2. Click on **Import** -> **Upload File**.
3. Select the `.json` file located in `postman/`.
4. Run testing immediately with pre-filled request bodies and headers!

---

## 📄 License

This project is open-source software licensed under the [MIT licens](LICENSE)

# 🚀 Commercial-Grade Laravel REST API & SaaS Starter Kit (V1)

Boilerplate RESTful API kelas komersial yang dibangun menggunakan **Laravel 11**, **Laravel Sanctum**, dan **PostgreSQL**. Dirancang dengan standar arsitektur modern untuk fondasi aplikasi SaaS, Web, maupun Mobile.

---

## 📌 Fitur Utama & Arsitektur

- **API Versioning Architecture (V1):** Pemisahan rute terisolasi berbasis `/api/v1/`.
- **Standardized API Response Trait:** Format respons JSON yang seragam (`status`, `message`, `data`, `errors`).
- **Authentication & Token Management:** Registrasi dan login terproteksi via Laravel Sanctum.
- **Global Force JSON Middleware:** Mengunci format respons agar selalu berupa JSON.

---

## 📂 Struktur Direktori & Dokumentasi Lengkap

Struktur topologi direktori secara lengkap serta contoh payload dan respons JSON secara utuh dapat disesuaikan pada implementasi standar repositori profesional.

---

## 🛠️ Persyaratan Sistem & Instalasi Ringkas

### Persyaratan

- PHP >= 8.2, Composer, dan PostgreSQL.

### Cara Instalasi Singkat

1. Kloning repositori: `git clone https://github.com`
2. Masuk direktori dan instal dependensi: `cd Laravel_API && composer install`
3. Salin konfigurasi dan generate key: `cp .env.example .env && php artisan key:generate`
4. Jalankan migrasi dan server lokal: `php artisan migrate && php artisan serve`
