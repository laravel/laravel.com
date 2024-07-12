import './clipboard';
import './theme'

document.addEventListener('DOMContentLoaded', () => {
    wrapHeadingsInAnchors();
    setupNavCurrentLinkHandling();
    replaceBlockquotesWithCalloutsInDocs();
    highlightSupportPolicyTable();
    initScrollToTopBtn();
    initCarbonAds();

    const skipToContentLink = document.querySelector('#skip-to-content-link');
    const mainContentWrapper = document.querySelector('#main-content');

    skipToContentLink.addEventListener('click', (e) => {
        e.preventDefault();
        mainContentWrapper.setAttribute('tabindex', -1);
        mainContentWrapper.focus();
    });

    mainContentWrapper.addEventListener('blur', () => {
        mainContentWrapper.removeAttribute('tabindex');
    });
})

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
                default:
                    return [null, null];
            }
        });

        // GitHub styled notes...
        replaceBlockquote(el, /^\[\!(.*?)\](?:<br>\n?)?/, (type) => {
            switch (type) {
                case "WARNING":
                    return ['/img/callouts/exclamation.min.svg', 'bg-red-600'];
                case "NOTE":
                    return ['/img/callouts/lightbulb.min.svg', 'bg-purple-600'];
                default:
                    return [null, null];
            }
        });

        // Legagcy GitHub styled notes...
        replaceBlockquote(el, /^<strong>(.*?)<\/strong>(?:<br>\n?)?/, (type) => {
            switch (type) {
                case "Warning":
                    return ['/img/callouts/exclamation.min.svg', 'bg-red-600'];
                case "Note":
                    return ['/img/callouts/lightbulb.min.svg', 'bg-purple-600'];
                default:
                    return [null, null];
            }
        });
    });
}

function replaceBlockquote(el, regex, getImageAndColorByType) {
    var str = el.innerHTML;
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

    function highlightCells(table) {
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

    const table = document.querySelector('.docs_main #support-policy ~ div table:first-of-type');

    if (table) {
        highlightCells(table);

        return;
    }

    // <=v9 documentation branches use the old dom structure which doesn't contain the table overflow fix. It's easier to maintain backwards compatibility than to go back and change all the <=v9 branches.
    const oldTable = document.querySelector('.docs_main #support-policy ~ table:first-of-type');

    if (oldTable) {
        highlightCells(oldTable);
    }

}

function getCellDate(cell) {
    return Date.parse(cell.innerHTML.replace(/(\d+)(st|nd|rd|th)/, '$1'));
}


function initScrollToTopBtn() {
    const scrollToTopBtn = document.querySelector('#scrollToTopBtn');

    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    window.addEventListener('scroll', adjustCarbonAds);
}

let carbonAdsFound = false;
let attempts = 0;
const maxAttempts = 10;
let checkInterval;

function initCarbonAds() {
    checkAndModifyCarbonAds();
    checkInterval = setInterval(checkAndModifyCarbonAds, 1000);
}

function adjustCarbonAds() {
    const carbonAds = document.querySelector('#carbonads');
    const scrollToTopBtn = document.querySelector('#scrollToTopBtn');
    if (window.scrollY > 400) {
        scrollToTopBtn.classList.add('show');
        carbonAds.classList.add('scroll-beyond-400');
    } else {
        scrollToTopBtn.classList.remove('show');
        carbonAds.classList.remove('scroll-beyond-400');
    }
}

function checkAndModifyCarbonAds() {
    const carbonAds = document.querySelector('#carbonads');
    if (carbonAds) {
        carbonAdsFound = true;
        adjustCarbonAds();
    } else if (attempts < maxAttempts) {
        attempts++;
    } else {
        clearInterval(checkInterval);
    }
}
