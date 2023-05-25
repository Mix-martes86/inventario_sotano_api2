FROM debian:bullseye

MAINTAINER Maxence POUTORD <maxence.poutord@gmail.com>

RUN apt-get update && apt-get install -y --force-yes\
    nginx

ADD nginx.conf /etc/nginx/
ADD php.conf /etc/nginx/sites-available/

RUN ln -s /etc/nginx/sites-available/php.conf /etc/nginx/sites-enabled/php \
&& rm /etc/nginx/sites-enabled/default

RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

RUN usermod -u 1000 www-data

CMD ["nginx"]

EXPOSE 80
EXPOSE 443
