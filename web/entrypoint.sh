#!/bin/sh
set -e

if [ ! -f /etc/nginx/certs/selfsigned.crt ]; then
    echo "Generate autosigned cert..."
    openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
        -subj "/C=ES/ST=Málaga/L=Almáchar/O=JAIMELZ/OU=DEV/CN=Jaime Lozano Lozano/emailAddress=jaime.lozano.dev@gmail.com" \
        -keyout /etc/nginx/certs/selfsigned.key \
        -out /etc/nginx/certs/selfsigned.crt
fi

exec nginx -g "daemon off;"