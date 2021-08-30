FROM wordpress:latest

WORKDIR /var/www/html

COPY ./dist ./dist

COPY ./src/theme ./wp-content/themes/the_societea

RUN set -x \
    && cd "$PHP_INI_DIR" \
    && sed -ri \
        -e 's/^;?(opcache\.memory_consumption).*/\1 = 256/' \
        -e 's/^;?(expose_php).*/\1 = Off/' \
        php.ini-production \
    && ln -s php.ini-production php.ini \
