import Prism from 'prismjs';
Prism.manual = true;

highlightCode();
wrapHeadingsInAnchors();
setupNavCurrentLinkHandling();
replaceBlockquotesWithCalloutsInDocs();
highlightSupportPolicyTable();
addSupportPolicyTableKey();

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
    Array.from(table.rows).forEach((row, rowIndex) => {
        Array.from(row.cells).forEach((cell, cellIndex, cells) => {
            if (rowIndex > 0) {
              // Target the last two columns so the highlighting applies in all versions of the docs.
              if (cellIndex >= cells.length-2 ) {
                const cellDate = Date.parse(cell.innerHTML.replace(/(\d+)(st|nd|rd|th)/, '$1'));
                const currentDate = new Date().valueOf();

                if (currentDate > cellDate) {
                  // Date has passed.
                  cell.classList.add('bg-red-500', 'support-policy-highlight');
                } else if (currentDate > (cellDate - 7776000000)) {
                  // Date is within 90 days.
                  cell.classList.add('bg-orange-600', 'support-policy-highlight');
                }
              }
            }
        });
    });
  }
}

function addSupportPolicyTableKey() {
  const table = document.querySelector('.docs_main #support-policy ~ table:first-of-type');

  if (table) {
    const keyWrapper = document.createElement('div');
    keyWrapper.classList = 'sm:flex dark:text-gray-400';
    const endOfLifeWrapper = document.createElement('div');
    endOfLifeWrapper.classList = 'flex items-center mr-4';
    const endOfLifeKey = document.createElement('div');
    endOfLifeKey.classList = `w-3 h-3 mr-2 bg-red-500`;
    const endOfLifeText = document.createElement('div');
    endOfLifeText.innerHTML = 'End of life';
    const upcomingEndOfLifeWrapper = document.createElement('div');
    upcomingEndOfLifeWrapper.classList = 'flex items-center';
    const upcomingEndOfLifeKey = document.createElement('div');
    upcomingEndOfLifeKey.classList = `w-3 h-3 mr-2 bg-orange-600`;
    const upcomingEndOfLifeText = document.createElement('div');
    upcomingEndOfLifeText.innerHTML = '< 90 days until end of life';

    endOfLifeWrapper.append(endOfLifeKey);
    endOfLifeWrapper.append(endOfLifeText);
    upcomingEndOfLifeWrapper.append(upcomingEndOfLifeKey);
    upcomingEndOfLifeWrapper.append(upcomingEndOfLifeText);
    keyWrapper.append(endOfLifeWrapper);
    keyWrapper.append(upcomingEndOfLifeWrapper);
    table.after(keyWrapper);
  }
}

import { toDarkMode, toLightMode, toSystemMode } from './components/theme';
window.toDarkMode = toDarkMode;
window.toLightMode = toLightMode;
window.toSystemMode = toSystemMode;
