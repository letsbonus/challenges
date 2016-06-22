README FOR SETTING UP THE PROJECT:
=================================

1. Copy/Clone the project to your local server.
2. Give the right permission for files/folder access.
3. Setup your host (for example challenge.local) and VirtualHost for apache

Setting Up Your VHOST
=====================
The following is a sample VHOST you might want to consider for your project.

<VirtualHost *:80>
   DocumentRoot "path/to/your/public/project/folder"
   ServerName challenge.local
   ServerAlias challenge.local

   # This should be omitted in the production environment
   SetEnv APPLICATION_ENV development

   <Directory "path/to/your/public/project/folder">
      Options Indexes FollowSymLinks
      AllowOverride All
      Order allow,deny
      Allow from all
      Require all granted
   </Directory>
</VirtualHost>

4. Setup the DataBase
=====================
4.1. In the docs folder you will find a subfolder named DB, inside there is a MySQL Workbench model file (model.mwb) and
a query file (model_query.sql) which one can be used to import the project DB model.

4.2 Create a user and password for manage the new DB and grant the privileges for access the DB.

4.3 After the user creation, you must to configure the login data into the project. The information is under
configs/application.ini file.

5. Extras
=========
The project needs ZendFramework V1.12 for work, remember to add the Zend library folder to the PHP include_path, located
in your php.ini file.
