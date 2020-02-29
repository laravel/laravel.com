#!/bin/bash
base=/home/forge/laravel.com
docs=${base}/resources/docs

cd ${docs}/5.8 && git pull origin 5.8
cd ${docs}/6.0 && git pull origin 6.0
cd ${docs}/6.x && git pull origin 6.x
cd ${docs}/7.x && git pull origin 7.x
cd ${docs}/master && git pull origin master

cd $base && php artisan docs:clear-cache
