#!/bin/bash

cd /var/www_data/testLetsBonus/
php app/console doctrine:database:create
php app/console doctrine:generate:entities AppBundle
php app/console doctrine:schema:update --force