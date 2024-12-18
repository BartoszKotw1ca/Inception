FROM debian:buster

RUN apt update -y 

RUN apt install php-fpm php-mysql -y

RUN apt install curl -y

COPY setup.sh /

RUN chmod +x setup.sh

COPY wp-config.php /

CMD [ "/setup.sh" ]
