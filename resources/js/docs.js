import Prism from 'prismjs';
Prism.manual = true;

highlightCode();
wrapHeadingsInAnchors();
setupNavCurrentLinkHandling();
replaceBlockquotesWithCalloutsInDocs();
highlightSupportPolicyTable();

function highlightCode() {
    [...document.querySelectorAll('pre code')].forEach(el => {
        Prism.highlightElement(el);
    });
}

function wrapHeadingsInAnchors() {
    [...document.querySelector('.docs_main').querySelectorAll('a[name]')].forEach(anchor => {
        const heading = anchor.parentNode.nextElementSibling;
        if (heading.id == 'the-at-error-directive') {
            console.log(heading, heading.childNodes);
        }
        anchor.href = `#${heading.id}`;
        anchor.removeAttribute('name');
        [...heading.childNodes].forEach(node => anchor.appendChild(node));
        heading.appendChild(anchor);
    });
}

function setupNavCurrentLinkHandling() {
    // Can return two, one for mobile nav and one for desktop nav
    [...document.querySelectorAll('.docs_sidebar ul')].forEach(nav => {
        const pathLength = window.location.pathname.split('/').length;
        const current = nav.querySelector('li a[href="' + (pathLength === 3 ? window.location.pathname+"/installation" : window.location.pathname) + '"]');

        if (current) {
            current.parentNode.parentNode.parentNode.classList.add('sub--on');
            current.parentNode.classList.add('active');
        }
    });

    [...document.querySelectorAll('.docs_sidebar h2')].forEach(el => {
        el.addEventListener('click', (e) => {
            e.preventDefault();

            const active = el.parentNode.classList.contains('sub--on');

            [...document.querySelectorAll('.docs_sidebar ul li')].forEach(el => el.classList.remove('sub--on'));

            if(! active) {
                el.parentNode.classList.add('sub--on');
            }
        });
    });
}

function replaceBlockquotesWithCalloutsInDocs() {
    [...document.querySelectorAll('.docs_main blockquote p')].forEach(el => {
        var str = el.outerHTML;
        var match = str.match(/\{(.*?)\}/);
        var img, color;

        if (match) {
            var type = match[1] || false;
        }

        if (type) {
            switch (type) {
                case "note":
                    img = '/img/callouts/exclamation.min.svg';
                    color = 'bg-red-600';
                    break;
                case "tip":
                    img = '/img/callouts/lightbulb.min.svg';
                    color = 'bg-purple-600';
                    break;
                case "laracasts":
                case "video":
                    img = '/img/callouts/laracast.min.svg';
                    color = 'bg-blue-600';
                    break;
            }

            const wrapper = document.createElement('div');
            wrapper.classList = 'mb-10 max-w-2xl mx-auto px-4 py-8 shadow-lg lg:flex lg:items-center';

            const imageWrapper = document.createElement('div');
            imageWrapper.classList = `w-20 h-20 mb-6 flex items-center justify-center flex-shrink-0 ${color} lg:mb-0`;
            const image = document.createElement('img');
            image.src = img;
            image.classList = `opacity-75`;
            imageWrapper.appendChild(image);
            wrapper.appendChild(imageWrapper);

            el.parentNode.insertBefore(wrapper, el);

            el.innerHTML = str.replace(/\{(.*?)\}/, '');
            el.classList = 'mb-0 lg:ml-6';
            wrapper.classList.add('callout');
            wrapper.appendChild(el);
        }
    });
}

function highlightSupportPolicyTable() {
    const table = document.querySelector('.docs_main #support-policy ~ table:first-of-type');

    if (table) {
        const currentDate = new Date().valueOf();

        Array.from(table.rows).forEach((row, rowIndex) => {
            if (rowIndex > 0) {
                const cells = row.cells;
                const versionCell = cells[0];
                const bugDateCell = getCellDate(cells[cells.length - 2]);
                const securityDateCell = getCellDate(cells[cells.length - 1]);

                if (currentDate > securityDateCell) {
                    // End of life.
                    versionCell.classList.add('bg-red-500', 'support-policy-highlight');
                } else if ((currentDate <= securityDateCell) && (currentDate > bugDateCell)) {
                    // Security fixes only.
                    versionCell.classList.add('bg-orange-600', 'support-policy-highlight');
                }
            }
        });
    }
}

function getCellDate(cell) {
    return Date.parse(cell.innerHTML.replace(/(\d+)(st|nd|rd|th)/, '$1'));
}

import { toDarkMode, toLightMode, toSystemMode } from './components/theme';
window.toDarkMode = toDarkMode;
window.toLightMode = toLightMode;
window.toSystemMode = toSystemMode;
