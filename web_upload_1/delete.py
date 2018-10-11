#!/usr/bin/env python
import os
import time
while True:
	os.system("rm -rf /var/www/html/uploads/*")
	time.sleep(0.1)
