# Use an official PHP image as the base image
FROM php:8.2-apache

# Install necessary PHP extensions (e.g., pdo, pdo_mysql)
RUN docker-php-ext-install pdo pdo_mysql

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy your PHP files (index.html and index.php) into the container
COPY indexx.php .
COPY index.php .
COPY index.css .


EXPOSE 80
