FROM php:8.2-apache

# Install dependency untuk ekstensi mysqli 
RUN apt-get update \
    && docker-php-ext-install pdo mysqli

# Copy source code ke dalam image
COPY . /var/www/html/

# Set permission (opsional, jika dibutuhkan)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
