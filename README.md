# Installation
For the database there is a tables.sql there really isn't much as I didn't separate merchant into it's own table to setup relationships and then work off of ids, so it's basically 2 tables.

One for facilitating a query (months_in_year) and the other which stores the information.

## Instructions
The majority of the code is in src/AppBundle/DefaultController.php slightly commented.

The templates (views) are in app/Resources/views/default

To import the tab file you can do it from path http://localhost.com/app_dev.php (or whatever domain, so you don't run into cache issues)

To add a single product you can use the crud at the same http://localhost.com/app_dev.php, just make sure status is 1 and the dates are correct

## Database

The database is called letsbonus
username: user
password: password

if you need to change it or feel like manipulating it you'd have to change the tables.sql and the app/config/parameters.yml

I had it built on a puppet / vagrant combination which I have built for other projects, so I tried to not .gitignore anything that might be needed, hopefully it works out of box.

## Final notes

It hasn't been fully tested, I hope it works well enough to satisfy your needs.

If you have any questions feel free to contact me at shant@mudcastle.com