FROM phpdockerio/php80-fpm:latest
WORKDIR "/var/www"

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
    php8.0-sqlite3 php8.0-gd \
    php8.0-memcached \
    php8.0-imap php8.0-mysql \
    php8.0-bcmath php8.0-soap \
    php8.0-intl php8.0-pcov \
    php8.0-msgpack php8.0-igbinary php8.0-ldap \
    php8.0-redis php8.0-swoole php8.0-xdebug \
	apt-utils iputils-ping \
	ssh dnsutils

RUN ln -s /usr/bin/php /usr/local/bin/php

#cleaning
RUN apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

CMD ["/usr/sbin/php-fpm8.0", "-O" ]
