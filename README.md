Runs

docker network create plains_network

docker-compose up -d

docker-compose exec plains-php bash -c "composer update"

docker-compose exec plains-php bash -c "composer init-project"

composer install

go to http://127.0.0.1:8090/api/v1/plain
