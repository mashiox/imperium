all: base app

base:
	docker build --rm -t edoceo/imperium-base -f ./Dockerfile.base ..

app:
	docker build --rm -t edoceo/imperium -f ./Dockerfile ..

clean:
	@echo "Cleaning Imperium Images"
	-docker rmi `docker images -qq edoceo/imperium*`
