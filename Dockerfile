FROM php:8.2-apache

# Install PHP extensions and enable rewrite
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl \
    && docker-php-ext-install pdo pdo_mysql zip \
    && a2enmod rewrite

# ⚠️ Set Apache to use Laravel's public folder
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

COPY . .

# Ensure Laravel has proper permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Install Composer from official image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader
