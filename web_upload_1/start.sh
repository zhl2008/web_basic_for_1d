#!/bin/sh

cd /var/www/html
service apache2 start
python /var/www/html/delete.py &
/bin/bash
