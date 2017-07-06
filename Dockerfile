FROM wordpress:4.8-php7.1

# Install calendar
RUN docker-php-ext-install calendar

RUN docker-php-ext-install zip
