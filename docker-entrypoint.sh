#!/bin/bash

set -e

EMAIL="ozaswei@gmail.com"
DOMAINS="ozaswei.com.np,www.ozaswei.com.np"

echo "Starting Certbot automation..."

# Start Apache temporarily so Certbot can validate
service apache2 start

# Issue cert if it doesn't exist
if [ ! -f "/etc/letsencrypt/live/ozaswei.com.np/fullchain.pem" ]; then
    echo "No existing cert found. Requesting new SSL cert..."
    certbot --apache --non-interactive --agree-tos --email "$EMAIL" -d $DOMAINS
else
    echo "SSL certificate already exists. Skipping issuance."
fi

# Reload Apache to apply any cert changes
service apache2 reload

# Setup cron job for automatic renewal
echo "0 3 * * * certbot renew --quiet --deploy-hook 'service apache2 reload'" > /etc/cron.d/certbot-renew
chmod 0644 /etc/cron.d/certbot-renew
crontab /etc/cron.d/certbot-renew
service cron start

echo "Starting Apache in foreground..."
exec apache2-foreground
