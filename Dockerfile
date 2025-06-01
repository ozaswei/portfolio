FROM php:8.2-apache

# Install system tools and PHP extensions
RUN apt-get update && apt-get install -y \
    nano \
    libzip-dev zip unzip git curl \
    software-properties-common \
    && docker-php-ext-install pdo pdo_mysql zip \
    && a2enmod rewrite ssl

# Install Certbot
RUN apt-get install -y certbot python3-certbot-apache

# Point Apache to Laravel's public directory
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Ensure .env file is copied
COPY .env .env

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Run Composer install AFTER files are copied
RUN composer install --no-dev --optimize-autoloader
