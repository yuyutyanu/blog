# docker
build:
	docker build -t blogapp ./ ; docker run -p 5432:5432 -d --name blogapp  blogapp

#db init
setup:
	php artisan migrate:refresh --seed