FROM debian:buster

RUN apt -y update && apt install -y nginx && apt install openssl -y

COPY setup.sh .

RUN chmod +x setup.sh

CMD [ "./setup.sh" ]
