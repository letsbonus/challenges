# LetsBonus Challenge for PHP Software Developer

## Linux-Mac

## Symfony 2.8 project
Configurar aplicación:
- composer install

## Tests
Para ejecutar los test desde consola:
- php bin/phpunit --coverage-html coverage && open coverage/index.html


## Sqlite
En app se ha creado una tabla sqlite para registrar la info en base de datos:
    create table Lets_Merchant(id varchar(32) primary key, name varchar(70), address varchar(70));
    create table Lets_Product(id varchar(32) primary key, merchant_id varchar(32), title varchar(70), description varchar(255), price double, init_date datetime, expiry_date datetime, FOREIGN KEY(merchant_id) REFERENCES Lets_Product(id));
