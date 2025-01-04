all : up

up : 
	mkdir -p /home/bkotwica/data/mariadb
	mkdir -p /home/bkotwica/data/wordpress
	@docker compose -f docker-compose.yml up -d

down :
	@docker compose -f docker-compose.yml down

stop : 
	@docker compose -f docker-compose.yml stop

start : 
	@docker compose -f docker-compose.yml start

clean:
	-docker rm -f $(docker ps -aq)
	-docker rmi -f $(docker images -q)
	-docker volume rm $(docker volume ls -q)
	-docker network rm $(docker network ls -q)
	-docker system prune -a --volumes -f


status : 
	@docker ps
