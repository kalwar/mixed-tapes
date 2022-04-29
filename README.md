# mixed-tapes

A mixed-tapes is a very simple Symfony app used for learning Symfony 6 fundamentals.

---

# Steps to follow

1. Simply run the app using Symfony command
2. First do, `composer install` to install dependencies
3. Install front-end dependencies using `npm install`,
4. Afterward you can run webpack encore using following command
   `npm run watch`
5. Symfony command: `symfony server:start -d` to start in daemon mode
6. Visit URL: https://127.0.0.1:8000/ to run the app
7. To stop the app execute: `symfony server:stop`

# Tech stack

1.  [Symfony](https://symfony.com/)
2.  [PHP](https://www.php.net/)
3.  [Stimulus](https://stimulus.hotwired.dev/)

# Symfony commands

```
symfony serve --help
symfony server:status
symfony server:stop
symfony serve -d

composer require templates
composer recipes
composer require symfony/asset
symfony console

php bin/console debug:router
php bin/console router:match
php bin/console router:match /api/songs/11
php bin/console debug:autowiring
php bin/console debug:autowiring log
php bin/console debug:autowiring twig

composer require encore
composer require symfony/ux-turbo

```

# Use for reference

Use solely for reference material only
