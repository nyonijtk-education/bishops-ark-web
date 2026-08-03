FROM php:8.4-cli

# Install system dependencies and required PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# Install dependencies ignoring strict PHP platform requirement checks
RUN composer install --no-dev --optimize-autoloader --no-scripts --ignore-platform-reqs

# Set required permissions for Laravel storage
RUN chmod -R 777 storage bootstrap/cache

EXPOSE 8000

# Run artisan optimization at runtime
CMD ["sh", "-c", "php artisan config:cache && php artisan route:cache && php artisan serve --host=0.0.0.0 --port=8000"]