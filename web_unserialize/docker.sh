#!/bin/sh

docker run   -v `pwd`:/var/www/html -p 86:80  -ti web_14.04:1  bash /var/www/html/start.sh 
