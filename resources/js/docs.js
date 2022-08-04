import Prism from 'prismjs';
Prism.manual = true;

// highlightCode();
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
        heading.id = anchor.name;
        anchor.href = `#${anchor.name}`;
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
        // Legacy Laravel styled notes...
        replaceBlockquote(el, /\{(.*?)\}/, (type) => {
            switch (type) {
                case "note":
                    return ['/img/callouts/exclamation.min.svg', 'bg-red-600'];
                case "tip":
                    return ['/img/callouts/lightbulb.min.svg', 'bg-purple-600'];
                case "laracasts":
                case "video":
                    return ['/img/callouts/laracast.min.svg', 'bg-blue-600'];
            }
        });

        // GitHub styled notes...
        replaceBlockquote(el, /<strong>(.*?)<\/strong><br>/, (type) => {
            switch (type) {
                case "Warning":
                    return ['/img/callouts/exclamation.min.svg', 'bg-red-600'];
                case "Note":
                    return ['/img/callouts/lightbulb.min.svg', 'bg-purple-600'];
            }
        });
    });
}

function replaceBlockquote(el, regex, getImageAndColorByType) {
    var str = el.outerHTML;
    var match = str.match(regex);
    var img, color;

    if (match) {
        var type = match[1] || false;
    }

    if (type) {
        [img, color] = getImageAndColorByType(type);

        if (img === null && color === null) {
            return;
        }

        const wrapper = document.createElement('div');
        wrapper.classList = 'mb-10 max-w-2xl mx-auto px-4 py-8 shadow-lg lg:flex lg:items-center';

        const imageWrapper = document.createElement('div');
        imageWrapper.classList = `w-20 h-20 mb-6 flex items-center justify-center shrink-0 ${color} lg:mb-0`;
        const image = document.createElement('img');
        image.src = img;
        image.classList = `opacity-75`;
        imageWrapper.appendChild(image);
        wrapper.appendChild(imageWrapper);

        el.parentNode.insertBefore(wrapper, el);

        el.innerHTML = str.replace(regex, '');

        el.classList = 'mb-0 lg:ml-6';
        wrapper.classList.add('callout');
        wrapper.appendChild(el);
    }
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
