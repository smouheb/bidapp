FROM php:8.0-fpm-buster
RUN apt-get update && \
    apt-get install -y npm && \
    apt-get install -y curl && \
    apt-get install -y bash

RUN curl -sS https://get.symfony.com/cli/installer | bash

WORKDIR /usr/bin/

RUN curl -sS https://getcomposer.org/installer  | php && \
    chmod a+x composer.phar

WORKDIR /var/www/html
