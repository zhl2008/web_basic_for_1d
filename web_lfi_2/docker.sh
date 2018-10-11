#!/bin/sh 

docker run -v `pwd`:/var/www/html -p 82:80 -ti web_14.04 /var/www/html/run.sh 
