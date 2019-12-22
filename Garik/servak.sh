#!/bin/bash

apt update
apt install nginx -y

systemctl stop nginx.service
systemctl start nginx.service
systemctl enable nginx.service

apt install php7.2-fpm php7.2-mbstring php7.2-xmlrpc php7.2-soap php7.2-gd php7.2-xml php7.2-cli php7.2-zip -y
apt install vim -y
apt install mysql-server -y

sed -i 's/`memory_limit = 128M`/`memory_limit = 256M`/g' /etc/php/7.2/fpm/php.ini
sed -i 's/`upload_max_filesize = 2M`/`upload_max_filesize = 64M`/g' /etc/php/7.2/fpm/php.ini
sed -i 's/`upload_max_filesize =1`/`upload_max_filesize =0`/g' /etc/php/7.2/fpm/php.ini

curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer


cd /var/www/html
echo "Enter name your project: "
read project
echo "Enter name your domein: "
read domein

composer create-project laravel/laravel $project --prefer-dist

chown -R www-data:www-data /var/www/html/$project
chmod -R 755 /var/www/html/$project
echo "server {
    listen 80;
    listen [::]:80;
    root /var/www/html/$project/public;
    index  index.php index.html index.htm;
    server_name  $domein;

    location / {
        try_files $uri $uri/ /index.php?$query_string;        
    }

  
    location ~ \.php$ {
       include snippets/fastcgi-php.conf;
       fastcgi_pass             unix:/var/run/php/php7.2-fpm.sock;
       fastcgi_param   SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }

}" > /etc/nginx/sites-available/laravel

ln -s /etc/nginx/sites-available/laravel /etc/nginx/sites-enabled/

systemctl restart nginx.service