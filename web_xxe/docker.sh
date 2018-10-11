#!/bin/sh 

docker run -v `pwd`:/var/www/html -p 84:80 -ti web_14.04 /var/www/html/run.sh 
