FROM php:7.4-fpm-alpine3.14

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /bin/composer

RUN wget https://github.com/symfony-cli/symfony-cli/releases/download/v5.4.8/symfony-cli_5.4.8_aarch64.apk \
    && apk add --allow-untrusted symfony-cli_5.4.8_aarch64.apk \
    && rm -f symfony-cli_5.4.8_aarch64.apk

RUN apk add $PHPIZE_DEPS pcre-dev postgresql-dev \
    && pecl install xdebug-3.1.1 \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install opcache pdo pdo_pgsql
