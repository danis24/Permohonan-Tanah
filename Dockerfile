FROM danis24/apache-php

MAINTAINER Danis Yogaswara <danis@aniqma.com>

RUN apt-get update && apt-get -y install git curl php-mcrypt php-json php-xml php-mbstring zip unzip libapache2-mod-php && apt-get -y autoremove && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN /usr/sbin/a2enmod rewrite

ADD ./000-tanah.conf /etc/apache2/sites-available/

ADD ./001-tanah-ssl.conf /etc/apache2/sites-available/

RUN /usr/sbin/a2dissite '*' && /usr/sbin/a2ensite 000-tanah 001-tanah-ssl

RUN /bin/chown www-data:www-data -R /var/www/html

EXPOSE 80
EXPOSE 443

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
