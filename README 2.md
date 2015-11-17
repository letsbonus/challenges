letsbonus challenge
====================

A Symfony project created on November 16, 2015.

Instructions to install:

1. Update vendors

	$ php composer.phar update

2. Comfigure parameters.yml to access to mysql database

3. Create database:

	$ php app/console doctrine:database:create

4. Create schema

	$ php app/console doctrine:schema:update --force

5. Run symfony2 server

	$ php app/console server:run

6. Run the app!


