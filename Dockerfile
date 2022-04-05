FROM richarvey/nginx-php-fpm:latest
ENV GIT_REPO="https://github.com/DreamOfIce/HoYoRandom-php.git" GIT_BRANCH="dev" PHP_ERRORS_STDERR=1 RUN_SCRIPTS=1