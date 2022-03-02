
### Blessing's COMMENT ######

PHP 8.1.3 was used and Two routes were created 

/products and /products/section)

##view all products
http://127.0.0.1:8000/api/products

#view single products
http://127.0.0.1:8000/api/products/8414
http://127.0.0.1:8000/api/products/7796
http://127.0.0.1:8000/api/products/3253

http://127.0.0.1:8000/api/products/Vinyl
http://127.0.0.1:8000/api/products/Downloads

Two methods were used in the ProductsController (sectionProducts() and allProducts())

I hope I understood the question and also answered correctly otherwise, I am 
open to corrections

Thanks






## Townsend Music Laravel coding test

Refactor the `sectionProducts()` method in `app/store_products.php` along with all of it's functionality into Laravel.

Two routes should be created `/products` and `/products/sectionname` that return all the products and then just the products for the selected section.

A ProductsController is in place to set these up, and they should return JSON of the same info passed by the original method

The models and relationships have already been created.

### Sample Data
You'll be able to install the application by running `php artisan migrate --seed`





