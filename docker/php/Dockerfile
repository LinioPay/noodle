ARG CONTAINER_REGISTRY=284217034260.dkr.ecr.us-east-1.amazonaws.com
FROM $CONTAINER_REGISTRY/docker-php:8.1-2.0.1 AS base
FROM base AS dependencies

COPY composer.json ./
RUN composer install --no-scripts -o

FROM base

COPY docker/php/php.ini /usr/local/etc/php/conf.d/overrides.ini

COPY . .
COPY --from=dependencies /application/vendor /application/vendor
RUN composer dumpautoload --no-scripts -o
