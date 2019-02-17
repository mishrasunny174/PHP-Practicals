FROM php:apache
COPY src/ /var/www/html
EXPOSE 80
RUN docker-php-ext-install pdo pdo_mysql
