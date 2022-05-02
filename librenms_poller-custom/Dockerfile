FROM ubuntu:latest
MAINTAINER Kyle McLerren <no@spam.com>

ENV TZ=Etc/UTC
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update \
  && apt-get install -y --no-install-recommends supervisor \
  curl \
  composer \
  fping \
  git \
  graphviz \
  imagemagick \
  mariadb-client \
  mtr-tiny \
  nmap \
  php7.2-cli \
  php7.2-curl \
  php7.2-fpm \
  php7.2-gd \
  php7.2-json \
  php7.2-mbstring \
  php7.2-mysql \
  php7.2-snmp \
  php7.2-xml \
  php7.2-zip \ 
  python-memcache \
  python-mysqldb \ 
  rrdtool \
  snmp \
  snmpd \
  whois \
  php-memcache \
  php-memcached \
  cron \
  python-pip \
  python-setuptools \
  acl \
  && pip install slackweb \
  && rm -rf /var/lib/apt/lists/*

RUN python --version

RUN useradd librenms -d /opt/librenms -M -r
RUN usermod -a -G librenms www-data

RUN git clone https://github.com/librenms/librenms.git /opt/librenms

RUN chown -R librenms:librenms /opt/librenms
RUN chmod 770 /opt/librenms

RUN setfacl -d -m g::rwx /opt/librenms/rrd /opt/librenms/logs /opt/librenms/bootstrap/cache/ /opt/librenms/storage/
RUN setfacl -R -m g::rwx /opt/librenms/rrd /opt/librenms/logs /opt/librenms/bootstrap/cache/ /opt/librenms/storage/

ADD ./config/php-fpm.ini /etc/php/7.2/fpm/php.ini
ADD ./config/php-cli.ini /etc/php/7.2/cli/php.ini

RUN chown -R librenms:librenms /opt/librenms
RUN setfacl -d -m g::rwx /opt/librenms/rrd /opt/librenms/logs /opt/librenms/bootstrap/cache/ /opt/librenms/storage/
RUN setfacl -R -m g::rwx /opt/librenms/rrd /opt/librenms/logs /opt/librenms/bootstrap/cache/ /opt/librenms/storage/

ADD ./config/supervisord.conf /etc/
ADD ./config/librenms /etc/cron.d/librenms

RUN su librenms -c "/opt/librenms/scripts/composer_wrapper.php install --no-dev" 

RUN crontab /etc/cron.d/librenms

ENTRYPOINT ["supervisord", "--nodaemon", "--configuration", "/etc/supervisord.conf"]
