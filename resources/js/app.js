window.searchComponent = require('./components/search').default;

document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('#docsScreen')) {
        require('./docs.js');
    }
});
