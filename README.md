

# BookProjectTest


## Persyaratan

- PHP >= 8.1
- Composer
- MariaDB atau MySQL
- Node.js dan npm

## Instalasi

1. **Clone repository ini**

   ```bash
   git clone https://github.com/mustaqim-project/BookProjectTest.git
   cd BookProjectTest
   ```

2. **Jalankan Composer Install**

   ```bash
   composer install
   ```

3. **Salin file .env**

   ```bash
   cp .env.example .env
   ```

4. **Generate Application Key**

   ```bash
   php artisan key:generate
   ```

5. **Konfigurasi database pada file .env**

   Edit file `.env` dan sesuaikan konfigurasi database:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=username_database
   DB_PASSWORD=password_database
   ```

6. **Jalankan migrasi database**

   ```bash
   php artisan migrate
   ```

    **Jalankan migrasi seeder database**

   ```bash
   php artisan db:seed
   ```
   
7. **Install dependencies npm**

   ```bash
   npm install
   ```

8. **Build assets menggunakan npm**

   ```bash
   npm run dev
   ```

9. **Jalankan server pengembangan**

   ```bash
   php artisan serve
   ```

## Perintah Artisan yang Berguna

- **Migrasi Database**

  ```bash
  php artisan migrate
  ```

- **Rollback Migrasi**

  ```bash
  php artisan migrate:rollback
  ```

- **Seeding Database**

  ```bash
  php artisan db:seed
  ```

- **Clear Cache**

  ```bash
  php artisan cache:clear
  php artisan config:clear
  php artisan route:clear
  php artisan view:clear
  ```


## Struktur Proyek

Berikut adalah struktur direktori proyek ini:

```
project-root/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
└── tests/
```

