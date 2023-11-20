# Platter SSO DISDIK PROV JABAR

Apikasi Restful API untuk SSO Disdik Prov Jabar

### Team

| Name                                                                   | Role                 |
| :--------------------------------------------------------------------- | :------------------- |
| [Chandra Ramdhan Purnama](https://www.linkedin.com/in/chandraramdhan/) | Fullstack Programmer |
| Ahmad Rivaiy                                                           | Fullstack Programmer |

## Application Information

### Engine

| Name     | Version | References                              |
| :------- | :------ | :-------------------------------------- |
| Laravel  | 10.16   | https://laravel.com/                    |
| PHP      | 8.2     | https://www.php.net/releases/8.2/en.php |
| Composer | 2.3.7   | https://getcomposer.org/                |

### Packages

| Name              | Purpose Ï                                   | Repository                                |
| :---------------- | :------------------------------------------ | :---------------------------------------- |
| Laravel-Passport  | Oauth2                                      | https://laravel.com/docs/10.x/passport    |
| Laravel-Telescope | Logging Information                         | https://laravel.com/docs/master/telescope |
| Laravel-Octane    | Supercharge Laravel Application Performance | https://laravel.com/docs/master/octane    |
| Swagger           | Rest API Documentation                      | https://github.com/DarkaOnLine/L5-Swagger |

## Deployment

To deploy this project use this step

## Prerequisites

-   PHP V.8.2
-   Composer > 2.3.\*
-   Git
-   Databases (Postgres, Mongo, Mysql)

1. Copy file `.env.example` to `.env` and please fill this field with your data

    ```.dotenv
    DB_CONNECTION=psgq/mysql/mongo
    DB_HOST=
    DB_PORT=
    DB_DATABASE=
    DB_USERNAME=
    DB_PASSWORD=

    ```
2. Install PHP dependencies using Composer :
    ```
    composer install
    ```
3. Generate Key with running command inside root directory of project
    ```
    php artisan key:generate
    ```
4. Optimize the Laravel application :
    ```
    php artisan optimize
    ```
5. Run database migrations:
    ```
    php artisan migrate
    ```
6. Run passport install:
    ```
    php artisan passport:install
    ```
7. Run database seeder:
    ```
    php artisan db:seed
    ```
8. Run the applicatiom:
    ```
    php artisan serve
    ```

### And your application will running on default port 8000 on localhost

```
The Default NIK and Password is
Username : 32731812019980003
Password : jabarjuara
```
