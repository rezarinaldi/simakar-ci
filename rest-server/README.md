# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

# 🍁 END POINTNYA GAN

### 🍂 Cara Install:
1. Run command `composer install`.
2. Create database, type `simakar` and then import db [`simakar.sql`](../simakar.sql) without check forign key.
3. Run command `cp .env.example .env` and then configure it on `.env` file.
4. Cd into `rest-server` folder, and then run server `php -S localhost:8000 -t public`.

### 🍃 Akses CRUD:
~ update, delete, detail: tambah parameter `id` diakhir endpoint `localhost:8000/karyawan/1`.
    

### 💸 gaji

    localhost:8000/gaji

### :lab_coat: karyawan

    localhost:8000/karyawan

### 🌇 kota atau kabupaten

    localhost:8000/kota
    
### 🏯 divisi

    localhost:8000/divisi
    
### 🗼 jabatan

    localhost:8000/jabatan
    
### ⛩️ kecamatan

    localhost:8000/kecamatan
    
### 🗾 provinsi

    localhost:8000/provinsi
    
## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
