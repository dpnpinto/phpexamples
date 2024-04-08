#!/bin/sh
# By : Duarte Pinto
# Date: Janeiro 2024
# Version 1.0.0: "Install LAMP"
# Instlalation of LAMP in Rocky
# Linux
# Apache
# MySQL
# PHP

# UPDATE
sudo dnf -y update
# Install Apache
sudo dnf -y install httpd
sudo systemctl enable httpd.service
sudo systemctl start httpd.service

# open port 80 in firewall
sudo firewall-cmd --zone=public --add-port=80/tcp --permanent
sudo firewall-cmd --reload

# Install MySQL
sudo dnf -y install mysql-server mysql
sudo systemctl enable mysqld.service
sudo systemctl start mysqld.service

# secure MySQL Instalation
sudo mysql_secure_installation 

# Install PHP
sudo dnf -y install php php-mysqlnd php-cli
sudo systemctl restart httpd.service

#test page
echo "<?php phpinfo(); ?>" >> /var/www/html/teste.php
