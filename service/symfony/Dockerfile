FROM php:8.3-apache


RUN apt-get update && apt-get install -y \
        libpq-dev \
        unzip \
        openssl \
        bzip2 \
        sqlite3 \
        curl \
        libcurl4-gnutls-dev \
        libgd-dev \
        libicu-dev \
        libzip-dev \
        libbz2-dev \
        libxml2-dev \
        libsqlite3-dev \
        libonig-dev

RUN docker-php-ext-install pdo_pgsql gd intl mbstring zip bz2 xml pdo_sqlite


WORKDIR /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

COPY . /var/www/html/

ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN a2enmod rewrite

# required to create a complete mapbender application container image including all dependencies
#RUN ./bootstrap

CMD ["apache2-foreground"]