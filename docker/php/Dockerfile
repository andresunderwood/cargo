FROM php:7.4-fpm

# Install mysqli extension
#RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN apt-get update && apt-get upgrade -y


# Continue with other setup steps...


# WORKDIR /app/

# COPY ./www.conf /usr/local/etc/php-fpm.d/www.conf
# COPY ./php.ini /usr/local/etc/php/php.ini
# COPY ./composer.json /app/
# #COPY . . 
# COPY ./mix-manifest.json /app/public/mix-manifest.json

# RUN mkdir -p app/framework/views

# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=1.9.3 && chmod +x /usr/local/bin/composer

# RUN composer install

# RUN php artisan clear-compiled \ 
#     && php  artisan storage:check \
#     && php  artisan clear-compiled \
#     && php  artisan view:clear --no-ansi \
#     && php artisan optimize \
#     && php artisan config:clear \
#     && php artisan core:cache \
#     && php artisan migrate --force

# RUN  chown -R www-data:www-data /app/

EXPOSE 9000

CMD ["php-fpm"]
