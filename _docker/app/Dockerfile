FROM php:8.4-fpm

# Очистка системы
RUN apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Копирование пользовательского php.ini
COPY ./_docker/app/php.ini /usr/local/etc/php/conf.d/php.ini

# Установка рабочей директории
WORKDIR /var/www
