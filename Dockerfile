#FROM php:8.2-apache
#RUN docker-php-ext-install pdo pdo_mysql
#RUN docker-php-ext-install gd
#RUN a2enmod rewrite 

FROM php:8.2-apache
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libwebp-dev \
    libxpm-dev
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-configure gd \
    --with-jpeg=/usr/include/ \
    --with-freetype=/usr/include/ \
    --with-webp=/usr/include/ \
    --with-xpm=/usr/include/
RUN docker-php-ext-install gd
RUN a2enmod rewrite
# Install openssl
RUN apt-get update && apt-get install -y openssl

# Generate a self-signed certificate
RUN mkdir /etc/apache2/ssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/apache2/ssl/server.key -out /etc/apache2/ssl/server.crt -subj "/C=US/ST=Denial/L=Springfield/O=Dis/CN=localhost"

# Configure Apache to use SSL
RUN a2enmod ssl
RUN echo '\
<IfModule mod_ssl.c>\n\
<VirtualHost *:443>\n\
    ServerName localhost\n\
    SSLEngine on\n\
    SSLCertificateFile /etc/apache2/ssl/server.crt\n\
    SSLCertificateKeyFile /etc/apache2/ssl/server.key\n\
    # Other Apache configuration here...\n\
</VirtualHost>\n\
</IfModule>\n\
' > /etc/apache2/sites-available/default-ssl.conf
RUN a2dissite '*'
RUN a2ensite default-ssl.conf