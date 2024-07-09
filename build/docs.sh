#!/bin/bash

set -e

base=${base:-/home/forge/laravel.com}
docs=${base}/resources/docs
hashes=${base}/build/hashes
versions=('8.x' '9.x' '10.x' '11.x' 'master')
shouldBustCache=0

for v in "${versions[@]}"
do
    # Update repositories...
    cd "${docs}/${v}"
    git pull origin "${v}"

    # Calculate md5 of the pulled markdown files and compare to the previous...
    find "." -type f -name "*.md" | xargs md5sum > "${hashes}/${v}.pulled"
    if ! cmp -s "${hashes}/${v}.pulled" "${hashes}/${v}.previous"; then
        shouldBustCache=1
    fi
done

# Bust the Cloudflare cache...
if [[ $shouldBustCache == 1 ]]; then
    curl -X POST \
      "https://api.cloudflare.com/client/v4/zones/${1}/purge_cache" \
      -H 'Content-Type: application/json' \
      -H "Authorization: Bearer ${2}" \
      -d '{ "purge_everything": true }'
fi

# Mark pulled files as the previous files...
for v in "${versions[@]}"
do
    mv -f "${hashes}/${v}.pulled" "${hashes}/${v}.previous"
done
