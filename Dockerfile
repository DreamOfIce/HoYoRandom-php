FROM richarvey/nginx-php-fpm:latest
ENV GIT_REPO="https://github.com/DreamOfIce/HoYoRandom-php.git" PHP_ERRORS_STDERR=1 RUN_SCRIPTS="/var/www/html/init.sh"
CMD "echo '/var/www/html/init.sh' >> /start.sh && /start.sh"
