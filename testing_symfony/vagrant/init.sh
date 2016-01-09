#!/bin/bash

# Root mysql password
debconf-set-selections <<< 'mysql-server mysql-server/root_password password root'
debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password root'

apt-get update
# Install git
apt-get install -y git

# Install lang to avoid warning
apt-get install -y language-pack-es

# LAMP install
apt-get install -y apache2 mysql-client-5.6 mysql-server-5.6 libapache2-mod-php5 php5 php5-mcrypt php5-cli php5-curl php5-mysql

# Config MYSQL
cp /vagrant/configs/mysql/my.cnf /etc/mysql/my.cnf
mysql -uroot -proot -Bse "GRANT ALL PRIVILEGES ON *.* TO 'devel'@'localhost' IDENTIFIED BY 'devel' WITH GRANT OPTION; GRANT ALL PRIVILEGES ON *.* TO 'devel'@'%' IDENTIFIED BY 'devel' WITH GRANT OPTION; FLUSH PRIVILEGES;"
/etc/init.d/mysql restart

# Config PHP
cp /vagrant/configs/apache2/php.ini /etc/php5/apache2/php.ini
cp /vagrant/configs/cli/php.ini /etc/php5/cli/php.ini

# Install composer
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# Config apache
cp /vagrant/virtualhosts/challenge.conf /etc/apache2/sites-available/challenge.conf
cd /etc/apache2/sites-available/ && a2ensite challenge.conf
a2enmod rewrite
service apache2 restart

# Install project vendors
cd /var/www_data/challenge && composer install
