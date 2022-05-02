FROM alpine:latest

MAINTAINER kmclerren <no@spam.com>

RUN apk --update add bind

EXPOSE 53

CMD ["named", "-c", "/etc/bind/named.conf", "-g", "-u", "named"]
