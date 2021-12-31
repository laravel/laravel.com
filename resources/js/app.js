import Alpine from 'alpinejs';
import Trap from '@alpinejs/trap';

window.Alpine = Alpine;

window.searchComponent = require('./components/search').default;

Alpine.plugin(Trap);
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('#docsScreen')) {
        require('./docs.js');
    }
    require('./components/accessibility');
});
