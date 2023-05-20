# Laravel Export to Excel

A Laravel project that provides feature for exporting data to excel file.

## Run Locally

Clone the project

```bash
  git clone https://github.com/firman19/laravel-export-excel.git
```

Go to the project directory

```bash
  cd laravel-export-excel
```

Create .env file

### Configure Database

To run this project, you will need to set database as follow:

```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=<DATABASE NAME>
  DB_USERNAME=<DATABASE USERNAME>
  DB_PASSWORD=<DATABASE PASSWORD>
```

### Generate Fake Data and Migrate Table

Migrate the user table.

```
  php artisan migrate
```

Generate the fake record. Here I use tinker to generate the fake records. You can use a different method as of your requirement.

```
  php artisan tinker
```

Run this command to generate the fake records in our database.

```
  User::factory()->count(100)->create();
```

Generate key

```bash
  php artisan key:generate
```

Install dependencies

```bash
  composer install
```

Start the server

```bash
  php artisan serve
```
