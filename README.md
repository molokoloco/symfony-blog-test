# symfony-blog-test

Thank to https://github.com/liorchamla/  

Tuto 1 : https://www.youtube.com/watch?v=UTusmVpwJXo  
Tuto 2 : https://www.youtube.com/watch?v=SG7GgcnR1F4&list=PLpUhHhXoxrjdQLodxlHFY09_9XzqdPBW8&index=13 ++

 + **Doctrine :** Accès aux données (ORM) L'accès aux données dans les objets de notre application se reflète dans la base de données. Les entités représentent des tables. Le manager met à jour les tables.
 + **Repository :** sélection des données. Entity/Manager/Repository.
 + Migration (évolution BDD) **Fixtures :** fakes data
Controller : Traitement (Route > Requête > Réponse)
 + **Twig :** Rendu des données. The flexible, fast, and secure template engine for PHP : escaping, iterate, inheritance

```cmd
$ cd ...
$ composer install
$ composer require symfony/web-server-bundle --dev ^4.4.2
$ php bin/console server:run
=> http://127.0.0.1:8000/ 
$ php -S localhost:3000 -t public
$ php bin/console make:controller
$ php bin/console doctrine:database:create
$ php bin/console make:entity
$ php bin/console make:migration
$ php bin/console d:m:m
$ php bin/console doctrine:migrations:migrate
$ composer require orm-fixtures --dev
$ php bin/console make:fixtures
$ php bin/console doctrine:fixtures:load
$ php bin/console d:f:l --no-interaction
$ composer require api ### https://api-platform.com
```

## Symfony

Symfony is a set of reusable PHP components...
The standard foundation on which the best PHP applications are built. Choose any of the 50 stand-alone components available for your own applications.
.. and a PHP framework for web projects
Speed up the creation and maintenance of your PHP web applications. End repetitive coding tasks and enjoy the power of controlling your code.
... A Philosophy and a Community

Basically, a framework consists of:  
A toolbox - a set of prefabricated, rapidly integratable software components. This means that you will have to write less code, with less risk of error. This also means greater productivity and the ability to devote more time to doing those things which provide greater added value, such as managing guiding principles, side effects, etc.  
A methodology – an “assembly diagram” for applications. A structured approach may seem constraining at first. But in reality it allows developers to work both efficiently and effectively on the most complex aspects of a task, and the use of Best Practices guarantees the stability, maintainability and upgradeability of the applications you develop.

Use Composer to install any of the Symfony Components

 + https://github.com/EnMarche/en-marche.fr/blob/d7a15f9b1623eec1114500f4bfa022271a616173/app/Resources/views/procuration/index.html.twig
 + https://symfony.com/blog/an-open-source-web-platform-for-the-new-president-of-france 