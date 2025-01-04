
FROM debian:buster

RUN apt-get update -y && apt-get install mariadb-server -y

COPY 50-server.cnf /etc/mysql/mariadb.conf.d/

COPY setup.sh .

RUN chmod 777 setup.sh

CMD ["./setup.sh"]
