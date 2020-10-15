# Laravel 8 Tutorial For Beginners

Laravel is a very powerful framework that follows the MVC structure. It is designed for web developers who need a simple, elegant yet powerful toolkit to build a fully-featured website. This tutorial explains the basic use of **Laravel 8** by building a simple blogging system.

## Demo

Here is a demo site I’ve built: http://laravel.demo.techjblog.com/

**Login Information**

email: [demo@demo.com](https://mailto:demo@demo.com/)

password: demo

## Part One: Laravel Basics

[![Get Started With Laravel 6](https://res.cloudinary.com/practicaldev/image/fetch/s--JoY1eRaD--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://embed-fastly.wistia.com/deliveries/9c85353a926f914df6d193b126374548.webp%3Fimage_crop_resized%3D1280x720)](https://res.cloudinary.com/practicaldev/image/fetch/s--JoY1eRaD--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://embed-fastly.wistia.com/deliveries/9c85353a926f914df6d193b126374548.webp%3Fimage_crop_resized%3D1280x720)

Before we can start building our project, we need to talk about some basic concepts in Laravel. Let’s start by making some preparations, install the necessary software, create a new Laravel project, and then, we need to understand the MVC structure, which is commonly used by most of the web frameworks. And finally, we'll talk about Laravel Nova, the official admin panel for Laravel applications.

[Laravel Tutorial #1: Setup the Project](https://www.techjblog.com/index.php/2020/09/laravel-tutorial-1-setup-the-project/)

[Laravel Tutorial #2: Routing](https://www.techjblog.com/index.php/2020/09/laravel-tutorial-2-routing/)

[Laravel Tutorial #3: The MVC Structure](https://www.techjblog.com/index.php/2020/09/laravel-tutorial-3-the-mvc-structure/)

[Laravel Tutorial #4: Admin Panel](https://www.techjblog.com/index.php/2020/09/laravel-tutorial-4-admin-panel/)

## Part Two: Build A Blog

To get familiar with everything, we start by creating only the home page.

[Laravel Tutorial #5: Create the Home Page](https://www.techjblog.com/index.php/2020/10/laravel-tutorial-5-create-the-home-page/)

One of the most important steps of web development is to design the database structure. In this tutorial, we’ll make four database tables together.

[![Designing Database Solutions for SQL Server 2016](https://res.cloudinary.com/practicaldev/image/fetch/s--ai2ihDvi--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://res.cloudinary.com/practicaldev/image/fetch/s--62VpMtMA--/c_limit%252Cf_auto%252Cfl_progressive%252Cq_auto%252Cw_880/https://cdn.lynda.com/course/548706/548706-637286205910916704-16x9.jpg)](https://res.cloudinary.com/practicaldev/image/fetch/s--ai2ihDvi--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://res.cloudinary.com/practicaldev/image/fetch/s--62VpMtMA--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://cdn.lynda.com/course/548706/548706-637286205910916704-16x9.jpg)

The `users` table stores the user name, email and password. The migration file for this table is already included in Laravel. The `categories` and `tags` tables store the category names and tag names. And finally, the `posts` table stores the post title, content, post image and so on.

However, just creating the tables is not enough. The tables have relationships with each other. This part could be a little tough for beginners, I will try to make it easy to understand, and only introduce the four most basic relationships.

[![img](https://res.cloudinary.com/practicaldev/image/fetch/s--mjBhiY-M--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://res.cloudinary.com/practicaldev/image/fetch/s--yMmsLI7Z--/c_limit%252Cf_auto%252Cfl_progressive%252Cq_auto%252Cw_880/https://i1.wp.com/www.techjblog.com/wp-content/uploads/2020/06/laravel-nova-1.png%253Ffit%253D953%25252C483%2526ssl%253D1)](https://res.cloudinary.com/practicaldev/image/fetch/s--mjBhiY-M--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://res.cloudinary.com/practicaldev/image/fetch/s--yMmsLI7Z--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://i1.wp.com/www.techjblog.com/wp-content/uploads/2020/06/laravel-nova-1.png%3Ffit%3D953%252C483%26ssl%3D1)

[Laravel Tutorial #6: Create Models and Setup Admin Panel](https://www.techjblog.com/index.php/2020/10/laravel-tutorial-6-create-models-and-setup-admin-panel/)

Routes are the entry points when someone visits your blog. They receive URLs and returns controllers. Controllers retrieve data from the database through models and put them in views. Views are what we actually see in the browser, so they do look like HTML and CSS. However, things are more complicated than that.

[Laravel Tutorial #7: Create Routes, Controllers and Views](https://www.techjblog.com/index.php/2020/10/laravel-tutorial-7-create-routes-controllers-and-views/)

In the next two articles, we'll build search, pagination and some other optional features for our project. However, if you are not interested, feel free to jump to the end, and we can finally deploy our application.

[![14 Bootstrap Search Bar Box Design Examples - OnAirCode](https://res.cloudinary.com/practicaldev/image/fetch/s--GHX2GMD6--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://res.cloudinary.com/practicaldev/image/fetch/s--wMF3SWnn--/c_limit%252Cf_auto%252Cfl_progressive%252Cq_auto%252Cw_880/https://i0.wp.com/onaircode.com/wp-content/uploads/2019/10/awesome-search-box.jpg%253Fresize%253D1080%25252C601%2526ssl%253D1)](https://res.cloudinary.com/practicaldev/image/fetch/s--GHX2GMD6--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://res.cloudinary.com/practicaldev/image/fetch/s--wMF3SWnn--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://i0.wp.com/onaircode.com/wp-content/uploads/2019/10/awesome-search-box.jpg%3Fresize%3D1080%252C601%26ssl%3D1)

[Laravel Tutorial #8: Search](https://www.techjblog.com/index.php/2020/10/laravel-tutorial-8-search/)

[Laravel Tutorial #9: Wrap Things Up](https://www.techjblog.com/index.php/2020/10/laravel-tutorial-9-wrap-things-up/)

[Laravel Tutorial #10: Deployment](https://www.techjblog.com/index.php/2020/10/laravel-tutorial-10-deployment/)

## Other Resources

[Some Useful Tools For Web Development (PHP)](http://some useful tools for web development (php)/)

[Laravel Official Documentation](https://laravel.com/docs/8.x)
