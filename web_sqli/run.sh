#!/bin/sh

service apache2 start
service mysql start
cd /var/www/html
mysql -uroot < setup.sql
/bin/bash
