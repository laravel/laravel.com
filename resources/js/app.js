import Alpine from 'alpinejs';
import Focus from '@alpinejs/focus';
import docsearch from '@docsearch/js';
import 'instant.page'

import.meta.glob([
  '../images/**',
]);

window.Alpine = Alpine;

Alpine.plugin(Focus);
Alpine.start();

docsearch({
    container: '#docsearch',
    appId: algolia_app_id,
    apiKey: algolia_search_key,
    indexName: 'laravel',
    searchParameters: {
        facetFilters: ['version:' + window.version],
    },
});
