# cobalaravel
 cobalaravel 5.2

# perintah perintah dasar untuk mengingat

##masuk dan mendownload projek
cd c:\\xampp\htdocs
composer create-project --prefer-dist laravel/laravel cobalaravel

##masuk ke folder projek dan menjalankan projek 
cd cobalaravel
php artisan serve

##generate controller dan model sekaligus
php arsisan make:controller PagesController
php artisan make:controller StudentsController -r -m Student

##membuat migrasi table dan generate
php artisan make:migration create_students_table
php artisan migrate

php artisan make:migration add_soft_delete_to_students
php artisan migrate
