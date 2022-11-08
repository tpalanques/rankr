FROM php:fpm-alpine

ENV SRC_PATH=/var/www/html

ENV TZ Europe/Madrid

RUN apk update --update
RUN apk add -U tzdata
RUN cp /usr/share/zoneinfo/${TZ} /etc/localtime

RUN apk update; \
    apk upgrade;
RUN apk --no-cache add \
    gettext \
    gettext-dev
RUN docker-php-ext-install pdo_mysql ##todo remove mysql dependency
RUN docker-php-ext-configure gettext &&\
    docker-php-ext-install gettext
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apk fix && \
    apk --no-cache --update add git git-lfs gpg less openssh zlib-dev libpng-dev libzip libzip-dev && \
    git lfs install

RUN docker-php-ext-install gd zip

CMD sh -c "composer install"
CMD sh -c "composer update"
CMD ["php-fpm"]
