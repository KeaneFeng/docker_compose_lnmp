FROM php:7.4-fpm
    
# composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/bin/composer && chmod +x /usr/bin/composer
    
#各种依赖库和扩展
RUN apt-get update \
    && apt-get install -y \
    build-essential \
    libmagickcore-dev \
    libmagickwand-dev \
    imagemagick \
    libfreetype6-dev \
    libmcrypt-dev \
    libpng-dev \
    libzip-dev \
    libwebp-dev \
    && docker-php-ext-configure gd  --with-webp=/usr/include/webp --with-jpeg=/usr/include --with-freetype=/usr/include/freetype2/ \
    && docker-php-ext-install -j$(nproc) gd iconv  pdo_mysql  mysqli bcmath calendar exif gettext sockets dba  pcntl  shmop sysvmsg sysvsem sysvshm zip \
    && pecl install redis-5.1.1 \
    && pecl install imagick \
    && pecl install mcrypt \
    && docker-php-ext-enable redis imagick mcrypt
    
#这句很重要，如果和你的nginx用户不同会导致你的服务起不来
RUN groupadd www && useradd -g www www
 
#  如果你需要别的扩展，还可以再加
# swoole扩展
RUN apt-get update \
    && apt-get install wget \
    && cd ~ \
    && wget https://github.com/swoole/swoole-src/archive/v4.4.13.tar.gz \
    && tar -zxvf v4.4.13.tar.gz \
    && mkdir -p /usr/src/php/ext \
    && mv swoole-src-4.4.13 /usr/src/php/ext/swoole \
    && docker-php-ext-install swoole \