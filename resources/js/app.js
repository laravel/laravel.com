import Alpine from 'alpinejs';
import Focus from '@alpinejs/focus';

import './clipboard';
import './components/search';

import.meta.glob([
  '../images/**',
]);

window.Alpine = Alpine;

Alpine.plugin(Focus);
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('#docsScreen')) {
        import('./docs.js');
    }

    import('./components/accessibility');
});
