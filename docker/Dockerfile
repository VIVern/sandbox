FROM ubuntu:xenial
MAINTAINER Denis Fedioukovitch <denis3901442@gmail.com>

RUN mkdir -p /run/php

RUN apt-get update
RUN apt-get install -yq software-properties-common
RUN LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php
RUN apt-get update

RUN apt-get install -yq php7.1 \
		php7.1-cli \
		php7.1-common \
		php7.1-json \
		php7.1-opcache \
		php7.1-mysql \
		php7.1-mbstring \
		php7.1-mcrypt \
		php7.1-zip \
		php7.1-xml \
		php7.1-curl \
		php7.1-soap \
		php7.1-pdo \
		php7.1-fpm \
		nano \
		nginx \
		composer \
		curl

WORKDIR /app

COPY app/composer.json ./
RUN composer install -o -n

COPY docker/default /etc/nginx/sites-enabled/default
COPY docker/run.sh /run.sh
RUN chmod 755 /run.sh

RUN sed -i -e "s/;clear_env\s*=\s*no/clear_env = no/g" /etc/php/7.1/fpm/pool.d/www.conf
RUN sed -i -e "s/variables_order\s*=\s*\"GPCS\"/;variables_order = \"GPCS\"/g" /etc/php/7.1/fpm/php.ini

COPY app .

EXPOSE 80

CMD /run.sh
