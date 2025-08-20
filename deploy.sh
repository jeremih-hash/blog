#!/bin/bash

# Configuration
SERVER="159.89.101.41"
USER="root"
REMOTE_DIR="/home/deco/football/topfootballblog"
APP_ENV="production"

echo "🚀 Starting deployment..."

# Build assets locally
echo "📦 Building assets..."
npm run build

# Create the .env file for production if it doesn't exist
if [ ! -f .env.production ]; then
    cp .env .env.production
    echo "⚙️ Created .env.production from .env"
fi

# Create archive of the project
echo "📦 Creating deployment archive..."
tar -czf deploy.tar.gz --exclude='.git' --exclude='.env' --exclude='node_modules' --exclude='vendor' --exclude='storage/app/*' --exclude='storage/framework/cache/*' --exclude='storage/framework/sessions/*' --exclude='storage/framework/views/*' --exclude='storage/logs/*' --exclude='deploy.tar.gz' .

# Upload the archive
echo "📤 Uploading to server..."
scp deploy.tar.gz "$USER@$SERVER:/tmp/"
scp .env.production "$USER@$SERVER:/tmp/.env"

# Execute deployment commands on the server
ssh "$USER@$SERVER" << 'ENDSSH'
    echo "🔧 Setting up deployment on server..."
    
    # Set deployment directory
    DEPLOY_DIR="/home/deco/football/topfootballblog"
    
    # Ensure directory exists
    mkdir -p "$DEPLOY_DIR"
    cd "$DEPLOY_DIR"
    
    # Create storage directory structure
    mkdir -p storage/{app,framework,logs}
    mkdir -p storage/framework/{cache,sessions,views}
    mkdir -p bootstrap/cache
    
    # Extract files
    tar -xzf /tmp/deploy.tar.gz
    mv /tmp/.env .env
    
    # Install composer dependencies
    export COMPOSER_ALLOW_SUPERUSER=1
    composer install --no-dev --optimize-autoloader
    
    # Set permissions
    chown -R www-data:www-data .
    chmod -R 775 storage bootstrap/cache
    
    # Run deployment commands
    php artisan key:generate --force
    php artisan storage:link
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
    php artisan migrate --force
    
    # Clean up
    rm /tmp/deploy.tar.gz
    rm -f /tmp/.env
    
    echo "✅ Deployment completed on server!"
ENDSSH

# Clean up local archive
rm deploy.tar.gz

echo "✨ Deployment script completed!"