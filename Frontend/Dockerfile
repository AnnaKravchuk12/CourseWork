FROM php:apache
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN docker-php-ext-enable mysqli
WORKDIR /var/www/html
COPY . /var/www/html
