#!/bin/bs
# Instalação do PHPMYADMIN para facil gestão de bases de dados para o projeto PHP
# by https://dpnpinto.github.io
# Nota: já tem de ter o LAMP instalado a solução funciona em php 
sudo dnf -y install epel-release
sudo dnf -y install phpmyadmin
sudo firewall-cmd --add-service=http --permanent
sudo firewall-cmd --add-service=https --permanent
sudo firewall-cmd --reload
sudo systemctl restart httpd
echo EDITAR o ficheiro phpMyAdmin.conf em /etc/httpd/conf.d/
echo Colocar -> Require all granted no "/usr/share/phpMyAdmin/"
