FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git libxml2-dev zlib1g-dev libonig-dev \
 && docker-php-ext-install mysqli pdo pdo_mysql zip xml mbstring \
 && a2enmod rewrite

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . /var/www/html

RUN if [ -f composer.json ]; then composer install --no-dev --optimize-autoloader; fi

RUN chown -R www-data:www-data /var/www/html \
 && find /var/www/html -type d -exec chmod 755 {} \; \
 && find /var/www/html -type f -exec chmod 644 {} \;

EXPOSE 80
CMD ["apache2-foreground"]