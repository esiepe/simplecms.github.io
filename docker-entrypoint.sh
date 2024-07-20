#!/bin/bash
# Replace with your desired WordPress directory
cp -r /app/public/* /var/www/html/
exec "$@"
