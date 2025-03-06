# Gunakan image PHP dengan Apache
FROM php:8.1-apache

# Install ekstensi PHP yang dibutuhkan (jika ada)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set document root ke public/
WORKDIR /var/www/html
COPY public/ /var/www/html/

# Copy semua file src ke dalam /var/www/src
COPY src/ /var/www/src/

# Pastikan index.php ditemukan sebagai halaman utama
RUN echo "DirectoryIndex index.php" >> /etc/apache2/apache2.conf

# Expose port 80 (default untuk Apache)
EXPOSE 80

# Start Apache ketika container berjalan
CMD ["apache2-foreground"]
