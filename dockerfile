# Gunakan image PHP dengan Apache
FROM php:8.1-apache

# Install ekstensi PHP yang dibutuhkan (jika ada)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy semua file proyek ke dalam container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Expose port 80 (default untuk Apache)
EXPOSE 80

# Start Apache ketika container berjalan
CMD ["apache2-foreground"]
