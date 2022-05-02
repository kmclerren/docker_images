FROM ubuntu:latest
MAINTAINER Kyle McLerren <no@spam.com>

RUN apt-get update \
  && apt-get install -y --no-install-recommends supervisor \
  && apt-get install -y --no-install-recommends snmptrapd \
  && apt-get install -y --no-install-recommends snmptt \
  && apt-get install -y --no-install-recommends python-pip \
  && apt-get install -y --no-install-recommends python-setuptools \
  && apt-get install -y --no-install-recommends snmp \
  && apt-get install -y --no-install-recommends snmp-mibs-downloader \
  && pip install slackweb \
  && rm -rf /var/lib/apt/lists/*

RUN python --version

ADD supervisor/supervisord.conf /etc/
ADD snmp/slacktraps-junos.py /usr/local/bin/

EXPOSE 162

ENTRYPOINT ["supervisord", "--nodaemon", "--configuration", "/etc/supervisord.conf"]
