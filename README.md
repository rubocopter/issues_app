# Issues application
Web application made with the Laravel framework, incorporates a form with a list of fields about the applications in development and information about the user and his browser.

Save the data in a database and in turn perform the insertion of the issue in Redmine through the Redmine API.
### Server Requirements:
The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

* PHP >= 7.0.0
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

### To get running:
Clone this repo by doing:

    $ git clone https://github.com/onit4ku/issues_app.git
    
Check the file .env and configure your settings about your database.
Check the UploadController.php file and make the changes necessary about your Redmine server.

And then:     
    
    $ cd issues_app
    $ php artisan migrate
    $ php artisan serve


For more Laravel documentation go for this link
https://laravel.com/docs

### Makes use of kbsali php-redmine-api:
https://github.com/kbsali/php-redmine-api