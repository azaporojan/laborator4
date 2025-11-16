# Базовый образ Debian
FROM debian:latest

# Установка Apache, PHP, модулей и MariaDB, supervisor, ca-certificates
RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql mariadb-server supervisor ca-certificates curl && \
    apt-get clean

# Том для базы и логов
VOLUME /var/lib/mysql
VOLUME /var/log

# Добавление WordPress (качаем архив)
ADD https://wordpress.org/latest.tar.gz /var/www/html/latest.tar.gz

# Распаковка WordPress
RUN cd /var/www/html && \
    tar -xzf latest.tar.gz && \
    rm latest.tar.gz && \
    chown -R www-data:www-data /var/www/html

# Копируем наши конфиги
COPY files/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY files/apache2/apache2.conf /etc/apache2/apache2.conf
COPY files/php/php.ini /etc/php/8.2/apache2/php.ini
COPY files/mariadb/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY files/supervisor/supervisord.conf /etc/supervisor/supervisord.conf
COPY files/wp-config.php /var/www/html/wordpress/wp-config.php

# Директория под сокет MariaDB
RUN mkdir /var/run/mysqld && chown mysql:mysql /var/run/mysqld

# Открываем порт 80
EXPOSE 80

# Запускаем supervisor (он поднимет Apache и MariaDB)
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/supervisord.conf"]
