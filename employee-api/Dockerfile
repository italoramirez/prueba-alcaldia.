FROM php:8.1-fpm

ARG user=app
ARG uid=1000

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libzip-dev \
    git \
    curl  \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip


# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql zip mbstring exif pcntl bcmath gd xml

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user  $user

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

COPY ./ employee-api


USER $user

EXPOSE 9000
CMD ["php-fpm"]
