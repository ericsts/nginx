FROM php:7.4-fpm

# Set working directory
WORKDIR /usr/share/nginx/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    vim \
    unzip \
    curl \
    unixodbc-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

#RUN pecl install sqlsrv pdo_sqlsrv
#RUN docker-php-ext-enable sqlsrv pdo_sqlsrv

# Add user for application
RUN groupadd -g 1000 www 
RUN useradd -u 1000 -ms /bin/bash -g www www

RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini

COPY php-ext-sqlsrv/* /usr/local/lib/php/extensions/no-debug-non-zts-20190902/
COPY php-ext-sqlsrv.ini /usr/local/etc/php/conf.d/php-ext-sqlsrv.ini

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]