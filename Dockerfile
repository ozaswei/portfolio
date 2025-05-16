FROM php:8.2-apache

# Install system tools and PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl \
    && docker-php-ext-install pdo pdo_mysql zip \
    && a2enmod rewrite

# Change Apache's DocumentRoot to /public
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

# Copy Laravel project files
COPY . .

# Install Composer from official image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Run composer *after* Laravel files are copied
RUN composer install --no-dev --optimize-autoloader

# Fix permissions for storage and cache
RUN chown -R www-data:www-data storage bootstrap/cache
