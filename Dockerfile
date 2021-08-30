FROM wordpress:latest

WORKDIR /var/www/html

COPY ./dist ./dist

COPY ./src/theme ./wp-content/themes/the_societea
