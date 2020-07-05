FROM debian:stable-slim

MAINTAINER UnBMaster <unbmaster@outlook.com>

RUN apt-get update -y; \
    apt-get install -y \
    nginx php-fpm sqlite3 php-sqlite3 \
    php-cli php-json php-pdo php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath

COPY ./.docker/nginx/custom-default     /etc/nginx/sites-available/default
COPY ./.docker/nginx/certificate.crt    /etc/ssl/certificate.crt
COPY ./.docker/nginx/private.key        /etc/ssl/private.key
COPY ./.docker/php/custom-www.conf      /etc/php/7.3/fpm/pool.d/www.conf
COPY ./.docker/php/custom-php.ini       /etc/php/7.3/cli/php.ini
COPY ./                                 /var/www

# SQLite
RUN mkdir -p /db
COPY /.docker/sqlite                    /db
RUN sqlite3 /db/plano.db < /db/plano.sql

CMD /etc/init.d/php7.3-fpm start && nginx -g "daemon off;"