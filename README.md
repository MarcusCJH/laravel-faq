# laravel-faq

## Introduction

Created this using using [laravel-adminpanel](https://github.com/viralsolani/laravel-adminpanel).


## Installation

**Command list**

    git clone https://github.com/MarcusCJH/laravel-faq.git faq
    cd faq
    copy .env.example .env
    composer install
    npm install
    npm run development
    php artisan migrate
    php artisan db:seed
    php artisan storage:link
    php artisan key:generate
    php artisan jwt:secret
    php artisan vendor:publish --tag=lfm_public
    php artisan serve

You can now access the server at http://localhost:8000

## Logging In

`php artisan db:seed` adds three users with respective roles. The credentials are as follows:

* Administrator: `admin@admin.com`
* Backend User: `executive@executive.com`
* Default User: `user@user.com`

Password: `1234`



## License

[MIT LICENSE](https://github.com/viralsolani/laravel-adminpanel/blob/master/LICENSE.txt)
