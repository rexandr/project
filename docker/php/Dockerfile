FROM webdevops/php-apache-dev:7.4
MAINTAINER Alexandr Zabara "zabara.industry@gmail.com"
WORKDIR /tmp/

COPY ./run_script  /tmp/
CMD /tmp/run_script
RUN chmod +x run_script

# Install xdebug
RUN docker-php-ext-enable xdebug

# Enable XDebug
ADD xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
WORKDIR /var/www/html
