    
FROM php:7.0-apache

ENV DEBCONF_NOWARNINGS yes
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

COPY php.ini /usr/local/etc/php/

RUN apt-get update && \
    apt-get install -y apache2
