# Wordpress Builder
FROM wordpress:fpm-alpine as wordpress-builder


# Frontend Builder
FROM node:lts-alpine as node-builder
WORKDIR /app

COPY package.json package-lock.json webpack.mix.js ./
RUN npm ci

COPY src/ src/
RUN node_modules/.bin/mix --production


# Final Image
FROM nginx:1.23.1-alpine
WORKDIR /var/www/html

COPY --from=wordpress-builder --chown=82:82 /usr/src/wordpress .
COPY ./docker/frontend/default.conf /etc/nginx/conf.d/default.conf
COPY ./src/theme ./wp-content/themes/the_societea
COPY --from=node-builder --chown=82:82 /app/dist dist/
