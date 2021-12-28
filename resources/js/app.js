import Alpine from 'alpinejs';

window.Alpine = Alpine;

window.searchComponent = require('./components/search').default;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('#docsScreen')) {
        require('./docs.js');
    }
    require('./components/accessibility');
});
