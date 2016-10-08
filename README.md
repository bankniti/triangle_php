# PHP Triangle problem getting start and unit test

- Create triangle program by input value 1-200, return type of triangle and path
- Contain PHPUnit is created from Control Flow Graph with branch coverage

Getting up and running
------------------------

## Requirements

- [Docker](https://www.docker.com/)


Deployment
------------

Run php:5.6-apache docker image to creat docker container and start the server
- Change directory to project location first
- `docker run -p 80:80 -d -v $PWD:/var/www/html -it --name my-webserver php:5.6-apache`
- (For the next time in case docker container already created `docker start my-webserver`)]


Usage
-------

Access via web browser
- [http://localhost:80](http://localhost:80)

To enter the shell of web-server
- `docker exec -it my-webserver bash`


PHPUnit Test
--------------

Enter docker machine to execute phpunit command line
- `docker exec -it my-webserver bash`

Run phpunit command
- `php ./phpunit.phar TriangleTest.php`

Control Flow Graph and Coverage Table
- [Link](https://docs.google.com/document/d/1ZkNpa79bTP0knDK6O96vd0yrc5V5iSCdYBu_OBrq9p0/edit?usp=sharing)


References
------------
- https://github.com/docker-library/docs/tree/master/php
- https://github.com/sitdh/phpunit-demo
