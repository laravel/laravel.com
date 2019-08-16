#!/bin/bash
base=/home/forge/laravel.com
docs=${base}/resources/docs

cd ${docs}/4.2 && git pull origin 4.2
cd ${docs}/5.0 && git pull origin 5.0
cd ${docs}/5.1 && git pull origin 5.1
cd ${docs}/5.2 && git pull origin 5.2
cd ${docs}/5.3 && git pull origin 5.3
cd ${docs}/5.4 && git pull origin 5.4
cd ${docs}/5.5 && git pull origin 5.5
cd ${docs}/5.6 && git pull origin 5.6
cd ${docs}/5.7 && git pull origin 5.7
cd ${docs}/5.8 && git pull origin 5.8
cd ${docs}/master && git pull origin master

cd $base && php artisan docs:clear-cache
