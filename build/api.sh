#!/bin/bash

set -e

base=${base:-/home/forge/laravel.com}
doctum=${base}/build/doctum

cd $doctum
composer install

# Cleanup Before
rm -rf ${doctum}/build
rm -rf ${doctum}/cache
rm -rf ${doctum}/laravel

# Run API Docs
git clone https://github.com/laravel/framework.git ${doctum}/laravel

${doctum}/vendor/bin/doctum.php update ${doctum}/doctum.php -v --ignore-parse-errors

# Delete old directory before copying new one
rm -rf ${base}/public/api

# Copy new docs to public path
cp -R ${doctum}/build ${base}/public/api

# Cleanup After
rm -rf ${doctum}/build
rm -rf ${doctum}/cache
rm -rf ${doctum}/laravel
