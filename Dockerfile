FROM php:8.1.0-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip

# Copy PHP application files into the container
COPY . /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set appropriate permissions
RUN chown -R www-data:www-data /var/www/html

# Configure Apache and enable modules
RUN a2enmod rewrite headers

# # Set Apache Timeout to 120 seconds
# RUN echo "Timeout 120" >> /etc/apache2/apache2.conf

# Expose port 80 (standard HTTP port)
EXPOSE 80


