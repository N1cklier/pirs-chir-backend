FROM php:8.4-apache

RUN docker-php-ext-install mysqli

RUN a2enmod rewrite # модуль для красивых адресов
RUN echo '<Directory /var/www/html/>' >> /etc/apache2/apache2.conf # блок настроек для папки /var/www/html/
RUN echo '    Require all granted' >> /etc/apache2/apache2.conf # решение ошибки Forbidden
RUN echo '</Directory>' >> /etc/apache2/apache2.conf # закрываем блок настроек

COPY index.php /var/www/html/index.php
COPY style.css /var/www/html/style.css