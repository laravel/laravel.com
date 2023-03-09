import docsearch from '@docsearch/js';

docsearch({
    container: '#docsearch',
    appId: algolia_app_id,
    apiKey: algolia_search_key,
    indexName: 'laravel',
    searchParameters: {
        facetFilters: ['version:' + window.version],
    },
});
