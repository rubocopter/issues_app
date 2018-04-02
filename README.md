# Issues application

Web application made with Laravel, incorporates a form with a list of fields about the applications in development and information about the user and his browser.

![screenshot](https://lh6.googleusercontent.com/_arA2lPLJGIKrq333zKlteEK-vYTFb7Nar-7aStt51lLHlxs9r9L9SskitW4_XQDHizV0ACvZTbFe_mPo4gY=w1680-h927-rw)

This app save the data in a database and in turn perform the insertion of the issue in Redmine through the Redmine API.

`This is running Laravel version 5.6.`

## Server Requirements

The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

* PHP >= 7.1.3
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* Ctype PHP Extension
* JSON PHP Extension

### To get running

Clone this repo by doing:

    git clone https://github.com/onit4ku/issues_app.git

Create an .env file in the root of the project or use the .env-getting-started and rename to .env with your configuration, here is an example of what the template would be:

    APP_NAME=Laravel
    APP_ENV=local
    APP_KEY=base64:PX6CDzfFaqmXovLwlRS2u4xm83IVnzEHiQqubS//Eg8=
    APP_DEBUG=true
    APP_LOG_LEVEL=debug
    APP_URL=http://localhost

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=issues
    DB_USERNAME=root
    DB_PASSWORD=root

    BROADCAST_DRIVER=log
    CACHE_DRIVER=file
    SESSION_DRIVER=file
    SESSION_LIFETIME=120
    QUEUE_DRIVER=sync

    REDIS_HOST=127.0.0.1
    REDIS_PASSWORD=null
    REDIS_PORT=6379

    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null

    PUSHER_APP_ID=
    PUSHER_APP_KEY=
    PUSHER_APP_SECRET=

    URL_REDMINE=http://redmine.yourdomain.com
    USERNAME_REDMINE=support_user
    PASSWORD_REDMINE=support_password

* Check the file .env and configure your settings about your database.
* Check the UploadController.php file and make the changes necessary about your Redmine server.

These env variables will help you in configuring your redmine server:

       URL_REDMINE
       USERNAME_REDMINE
       PASSWORD_REDMINE

And then:

    cd issues_app
    composer install

To create the tables of the db use:

    php artisan migrate

And if you want, you can use the built in php server to run the app:

    php artisan serve

For more Laravel documentation go for this link
<https://laravel.com/docs>

### Makes use of kbsali php-redmine-api

<https://github.com/kbsali/php-redmine-api>
