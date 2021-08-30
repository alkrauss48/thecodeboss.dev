# Frontend Builder
FROM node:lts-alpine as node-builder

WORKDIR /app

COPY package.json package-lock.json webpack.mix.js ./

COPY src/ src/

RUN set -x && npm ci

RUN set -x && node_modules/.bin/mix --production

# Final Image
FROM wordpress:latest

WORKDIR /var/www/html

COPY ./src/theme ./wp-content/themes/the_societea

COPY --from=node-builder --chown=82:82 /app/dist dist/
