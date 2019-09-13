#!/bin/bash

# Pull docs repos for each docs version or, if already pulled, pull the latest commits

DOCS_VERSIONS=(
  master
  6.x
  5.8
  5.7
  5.6
  5.5
  5.4
  5.3
  5.2
  5.1
  5.0
  4.2
)

for v in "${DOCS_VERSIONS[@]}"; do
    if [ -d "resources/docs/$v" ]; then
        echo "Pulling latest for $v..."
        (cd resources/docs/$v && git pull)
    else
        echo "Cloning $v..."
        git clone --single-branch --branch "$v" git@github.com:laravel/docs.git "resources/docs/$v"
    fi;
done
