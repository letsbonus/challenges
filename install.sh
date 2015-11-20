#!/bin/bash

php app/console doctrine:database:create

app/console doctrine:schema:update --force