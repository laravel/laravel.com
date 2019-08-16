#!/bin/bash
base=/home/forge/laravel.com
sami=${base}/build/sami

cd $sami
composer install

# Cleanup Before
rm -rf ${sami}/build
rm -rf ${sami}/cache
rm -rf ${sami}/laravel

# Run API Docs
git clone https://github.com/laravel/framework.git ${sami}/laravel

${sami}/vendor/bin/sami.php update ${sami}/sami.php

# Delete old directory before copying new one
rm -rf ${base}/public/api

# Copy new docs to public path
cp -R ${sami}/build ${base}/public/api

# Cleanup After
rm -rf ${sami}/build
rm -rf ${sami}/cache
rm -rf ${sami}/laravel
