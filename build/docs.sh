#!/bin/bash

set -e

base=${base:-/home/forge/laravel.com}
versions=('8.x' '9.x' '10.x' '11.x' 'master')

for version in "${versions[@]}"
do
    cd "${base}/resources/docs/${version}"
    previousHash=$(git rev-parse "${version}")
    git fetch origin "${version}"

    if [[ "${previousHash}" == $(git rev-parse "origin/${version}") ]]; then
        continue
    fi

    git pull origin "${version}"
    git diff --name-only $previousHash HEAD | while read markdownFile; do
        echo "https://laravel.com/docs/${version}/$(basename $markdownFile '.md')" >> "${base}/modified"
    done
done

if [ ! -f "${base}/modified" ]; then
    exit 0
fi

files=$(jq --raw-input --slurp 'split("\n") | map(select(. != "")) | unique' "${base}/modified")
curl -X POST --fail \
  "https://api.cloudflare.com/client/v4/zones/${1}/purge_cache" \
  -H 'Content-Type: application/json' \
  -H "Authorization: Bearer ${2}" \
  -d "{ \"files\": ${files} }"
rm "${base}/modified"
