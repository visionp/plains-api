Runs

docker network create plains_network

docker-compose up -d

docker-compose exec plains-php bash -c "composer install"

docker-compose exec plains-php bash -c "composer init-project"

go to http://127.0.0.1:8090/api/v1/plain
