#!/bin/sh

docker run -ti -v `pwd`:/var/www/html -p 81:80  web_14.04 /var/www/html/run.sh
