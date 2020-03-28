1. Migration 
php artisan make:migration create_posts_table
php artisan make:migration create_comments_table
php artisan migrate

2. Model
php artisan make:model Post
php artisan make:model Comment

3. Factory
php artisan make:factory PostFactory
php artisan make:factory CommentFactory

4. Model Observer
php artisan make:migration create_table_activity 
php artisan make:observer PostObserver

5. terdaftar di indexController

6.

7. php artisan db:seed
php artisan make:seeder UserTableSeeder
php artisan make:seeder PostTableSeeder
php artisan make:seeder CommentTableSeeder
php artisan db:seed --class=CommentTableSeeder
php artisan db:seed --class=PostTableSeeder
php artisan db:seed --class=CommentTableSeeder

8. 
Sistem dalam pengembangan aplikasi ini memiliki arsitekture Monolithic, dengan object oriented programming, MVC, dengan menggunakan pendekatan SDLC dengan model waterfall
Selain itu dalam pengembangan didalam sistem laravelnya sendiri menggunakan Eloquent ORM dalam pembuatan querynya, migration untuk pembuatan stukture tabelnya, dan juga factory dan observer pattern

9. Kekurangan dari aplikasi yg dibangun
1. fitur nya terlalu sedikit
2. performa nya cukup oke
3. kualitas kode cukup oke