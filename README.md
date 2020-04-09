<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"><a href="https://bulma.io"><img src="https://raw.githubusercontent.com/jgthms/bulma/master/docs/images/bulma-banner.png" alt="Bulma: a Flexbox CSS framework" style="max-width:100%;" width="400"></a></p>

<p align="center">
User management system
</p>

## **Included**

This system includes

- Roles
- Roles middleware
- Get highest role
- User list (name, email, roles)
- Ability to edit users
- Ability to delete users

## **Installation**

First, clone this project to your own project directory (please change the projectfolder name)

    git clone https://github.com/DylanDec/user_management.git projectfolder


Go into your projectfoler

    cd projectfolder

Run the composer install command

    composer install

Run the npm install && npm run dev command

    npm install
    npm run dev
Edit the env file

 1. Copy the env.example and rename it to .env
 2. Edit your DB credits
 3. Make sure to fill in your appname

Generate a laravel key

    php artisan key generate

Run the migrations

    php artisan migration:fresh

Seed the database with the premade accounts

    php artisan db:seed

Serve your project

    php artisan serve

You can open your project on http://localhost:8000 and login with email **admin@admin.com** and password **password**
