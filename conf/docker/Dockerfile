FROM richarvey/nginx-php-fpm

RUN set -ex \
  && apk --no-cache add postgresql-dev rabbitmq-c rabbitmq-c-dev $PHPIZE_DEPS
RUN pecl install amqp-1.9.3
RUN /usr/local/bin/docker-php-ext-enable amqp
RUN /usr/local/bin/docker-php-ext-install pgsql pdo_pgsql bcmath
RUN apk del $PHPIZE_DEPS
