#!/bin/bash

# Updates this repository after remote code changes

# Check to make sure script is being run from the right directory
if [ ! -f composer.json ]; then
    echo "Please make sure to run this script from the root directory of this repo."
    exit 1
fi

fancy_echo () {
    echo -e "\n------------------------------"
    echo "$1"
    echo -e "------------------------------\n"
}

fancy_echo "Composer install..."
composer install

fancy_echo "Update docs repos..."
source "$(dirname "$0")/checkout_latest_docs.sh"

fancy_echo "Install NPM dependencies..."
npm install

fancy_echo "Run Laravel Mix..."
npm run dev

fancy_echo "Update complete!"
