import Alpine from 'alpinejs';
import Focus from '@alpinejs/focus';

import './clipboard';

window.Alpine = Alpine;

window.searchComponent = require('./components/search').default;

Alpine.plugin(Focus);
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('#docsScreen')) {
        require('./docs.js');
    }

    require('./components/accessibility');
});
