# Aplikasi Web Survey Harga

## Instalasi

### Prerequisite

1. Sudah terinstall compser serta php versi 7

### Langkah Installasi

1. Clone repository
    ```
    git clone https://github.com/rizky-wahyudi/bigio-task-1.git
    ```
2. Masuk ke folder directory 
    ```
    cd bigio-task-1/tugas-5/web-survey-harga
    ```
3. Install composer dependencies
    ```
    composer install
    ```
4. Copy environtment file
    ```
    cp .env.example .env
    ```
5. Generate key
    ```
    php artisan key:generate
    ```
6. Edit env file pada bagian Database
    ```
    DB_DATABASE=db_survey_harga
    ```
7. Buat database kosong pada mysql dengan nama db_survey_harga
8. Migrate database
    ```
    php artisan migrate
    ```
9. Jalankan project
    ```
    php artisan serve
    ```