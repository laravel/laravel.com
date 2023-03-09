import Alpine from 'alpinejs';
import Focus from '@alpinejs/focus';

import './clipboard';
import './components/search';

window.Alpine = Alpine;

Alpine.plugin(Focus);
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('#docsScreen')) {
        require('./docs.js');
    }

    require('./components/accessibility');
});
