import algoliasearch from 'algoliasearch/lite';

export default function () {
    return {
        search: '',
        searchIsOpen: false,
        hits: [],
        init() {
            const searchClient = algoliasearch(algolia_app_id, algolia_search_key);

            const index = searchClient.initIndex('laravel');

            this.$watch('search', (query) => {
                if (! query) {
                    return this.hits = [];
                }

                index.search(query, {
                    hitsPerPage: 5,
                    facetFilters: ['version:' + window.version],
                    highlightPreTag: '<em class="not-italic bg-red-600 bg-opacity-25">',
                    highlightPostTag: '</em>'
                }).then(({ hits }) => {
                    this.hits = hits;
                });
            });
        },
        clear() {
            this.searchIsOpen = false;
            this.search = '';
            this.hits = [];
        },
        focusPreviousResult(index = -1) {
            if (index <= 0) {
                index = this.hits.length;
            }

            const previous = document.querySelector('#search-result-' + (index - 1));
            if (previous) {
                return previous.focus();
            }
        },
        focusNextResult(index = -1) {
            if (index >= this.hits.length - 1) {
                index = -1;
            }

            const next = document.querySelector('#search-result-' + (index + 1));
            if (next) {
                return next.focus();
            }
        },
    }
}
