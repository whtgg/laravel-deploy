#! /bin/bash

docker info > /dev/null 2>&1

# Ensure that Docker is running...
if [ $? -ne 0 ]; then
    echo "Docker is not running."

    exit 1
fi

docker run --rm \
    --pull=always \
    -v "$(pwd)":/opt \
    -w /opt \
    laravelsail/php81-composer:latest \
    bash -c "composer config -g repos.packagist composer https://mirrors.aliyun.com/composer/ && laravel new example-app && cd example-app && php ./artisan sail:install --with=mysql,redis,meilisearch,mailhog,selenium "

cd example-app

./vendor/bin/sail pull mysql redis meilisearch mailhog selenium
./vendor/bin/sail build

CYAN='\033[0;36m'
LIGHT_CYAN='\033[1;36m'
BOLD='\033[1m'
NC='\033[0m'

echo ""

if sudo -n true 2>/dev/null; then
    sudo chown -R $USER: .
    echo -e "${BOLD}Get started with:${NC} cd example-app && ./vendor/bin/sail up"
else
    echo -e "${BOLD}Please provide your password so we can make some final adjustments to your application's permissions.${NC}"
    echo ""
    sudo chown -R $USER: .
    echo ""
    echo -e "${BOLD}Thank you! We hope you build something incredible. Dive in with:${NC} cd example-app && ./vendor/bin/sail up"
fi
