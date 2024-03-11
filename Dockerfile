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
