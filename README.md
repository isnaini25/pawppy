<h1>Pawppy</h1>
Sistem pakar diagnosa penyakit kucing dengan metode Certainty Factor berbasis website - CodeIgniter <br>
<em>An expert system for diagnosing cat diseases using the website-based Certainty Factor method - CodeIgniter</em>
<br/>
<img src='https://github.com/isnaini25/pawppy/assets/75622170/623b8d20-2646-4341-bf56-c1b16d962a70' width='200'/>

# Panduan Instalasi

Panduan instalasi lengkap untuk proyek [Pawppy](https://github.com/isnaini25/pawppy) berbasis CodeIgniter 4.2.

---

## Persyaratan Sistem

- PHP 7.4 atau lebih baru  
- MySQL/MariaDB  
- Composer  
- Git  
- Web Server (Apache/Nginx) atau PHP built-in server  

---

## Langkah Instalasi

### 1. Clone Repository

```
git clone https://github.com/isnaini25/pawppy.git
cd pawppy
```

### 2. Install Dependencies
```
composer install
```

### 3. Konfigurasi Environment
Edit .env sesuai konfigurasi database Anda:
```
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080'
database.default.hostname = 127.0.0.1
database.default.database = pawppy
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
```

### 4. Setup Database
#### 1. Buat database bernama <b>pawppy</b>:
```
CREATE DATABASE pawppy;
```
#### 2. Import file SQL

### 5. Jalankan Aplikasi
```
php spark serve
```
Akses aplikasi di:
```
http://localhost:8080
```

## Setup di XAMPP / MAMP
Pindahkan folder pawppy ke:

XAMPP: `C:\xampp\htdocs`

MAMP: `/Applications/MAMP/htdocs`


## Informasi Login Admin
```
username: admin
password: admin123
```
