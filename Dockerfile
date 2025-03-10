FROM composer:lts
WORKDIR /app
RUN composer require --dev phpunit/phpunit
COPY ./*.php /app/
ENTRYPOINT ["/app/vendor/bin/phpunit"]