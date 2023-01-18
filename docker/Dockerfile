FROM edoceo/imperium-base:latest

ENV APP_NAME=Imperium
ENV APP_USER=imperium
ENV APP_ROOT=/opt/imperium
ENV APACHE_DOCUMENT_ROOT=${APP_ROOT}/webroot
ENV APACHE_SERVER_NAME=localhost
ENV APACHE_PORT=8000

ENV APP_SITE=http://${APACHE_SERVER_NAME}:${APACHE_PORT}

WORKDIR ${APP_ROOT}
# USER ${APP_USER}}

ADD --chown=www-data:www-data ./bin bin
ADD --chown=www-data:www-data ./block block
ADD --chown=www-data:www-data ./controller controller
ADD --chown=www-data:www-data ./etc etc
ADD --chown=www-data:www-data ./lib lib
ADD --chown=www-data:www-data ./sbin sbin
ADD --chown=www-data:www-data ./sql sql
ADD --chown=www-data:www-data ./theme theme
ADD --chown=www-data:www-data ./view view
ADD --chown=www-data:www-data ./webroot webroot
COPY --chown=www-data:www-data ./boot.php boot.php
COPY --chown=www-data:www-data ./composer.json composer.json

RUN php -r "copy('https://getcomposer.org/installer', './composer-setup.php');"
RUN php ./composer-setup.php
RUN php -r "unlink('./composer-setup.php');" 
RUN ./composer.phar install

EXPOSE 80
