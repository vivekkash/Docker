# Docker
Docker concepts and application deployment

This is basic steps for beginners to learn docker

1. Create a project directory
2. Add a src folder with index.php with some code to execute or your application code you want to run
3. Create a file name Dockerfile in the root directory of your project, which tells the docker to follow the instructions to build (inject dependencies) the docker image
4. Run command in terminal within your project directory, to create a docker image 

        docker build -t app_name
    
5. Run command in terminal to run the docker image

		  docker run -p 80:80 app_name

Hurray! Your first docker is up and running check your localhost.
