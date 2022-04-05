FROM richarvey/nginx-php-fpm:latest
ENV GIT_REPO="https://github.com/DreamOfIce/HoYoRandom-php.git" PHP_ERRORS_STDERR=1 
CMD find / -name init.sh
