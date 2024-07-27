# Use Ubuntu as the base image
FROM ubuntu:20.04

# Set environment variables to non-interactive
ENV DEBIAN_FRONTEND=noninteractive

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    software-properties-common \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    nodejs \
    npm

# Add repository for PHP 8.1
RUN add-apt-repository ppa:ondrej/php

# Install PHP and extensions
RUN apt-get update && apt-get install -y \
    php8.1-fpm \
    php8.1-cli \
    php8.1-mysql \
    php8.1-mbstring \
    php8.1-xml \
    php8.1-curl \
    php8.1-zip \
    php8.1-gd \
    php8.1-bcmath \
    php8.1-exif \
    php8.1-pcntl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www

# Run Composer install
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Run npm install
RUN npm install

# Change current user to www
USER www-data

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
