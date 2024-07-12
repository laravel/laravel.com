import './clipboard';
import './theme'

document.addEventListener('DOMContentLoaded', () => {
    wrapHeadingsInAnchors();
    setupNavCurrentLinkHandling();
    replaceBlockquotesWithCalloutsInDocs();
    highlightSupportPolicyTable();
    scrollToActiveLinkInSidebarIntoView();

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
                    return ['/img/callouts/exclamation.min.svg', 'bg-red-600', 6, 35];
                case "tip":
                    return ['/img/callouts/lightbulb.min.svg', 'bg-purple-600', 28, 40];
                case "laracasts":
                case "video":
                    return ['/img/callouts/laracast.min.svg', 'bg-blue-600', 49, 40];
                default:
                    return [null, null, 0, 0];
            }
        });

        // GitHub styled notes...
        replaceBlockquote(el, /^\[\!(.*?)\](?:<br>\n?)?/, (type) => {
            switch (type) {
                case "WARNING":
                    return ['/img/callouts/exclamation.min.svg', 'bg-red-600', 6, 35];
                case "NOTE":
                    return ['/img/callouts/lightbulb.min.svg', 'bg-purple-600', 28, 40];
                default:
                    return [null, null, 0, 0];
            }
        });

        // Legagcy GitHub styled notes...
        replaceBlockquote(el, /^<strong>(.*?)<\/strong>(?:<br>\n?)?/, (type) => {
            switch (type) {
                case "Warning":
                    return ['/img/callouts/exclamation.min.svg', 'bg-red-600', 6, 35];
                case "Note":
                    return ['/img/callouts/lightbulb.min.svg', 'bg-purple-600', 28, 40];
                default:
                    return [null, null, 0, 0];
            }
        });
    });
}

function replaceBlockquote(el, regex, getImageAndColorByType) {
    var str = el.innerHTML;
    var match = str.match(regex);
    var img, color, width, height;

    if (match) {
        var type = match[1] || false;
    }

    if (type) {
        [img, color, width, height] = getImageAndColorByType(type);

        if (img === null && color === null) {
            return;
        }

        const wrapper = document.createElement('div');
        wrapper.classList = 'mb-10 max-w-2xl mx-auto px-4 py-8 shadow-lg lg:flex lg:items-center';

        const imageWrapper = document.createElement('div');
        imageWrapper.classList = `w-20 h-20 mb-6 flex items-center justify-center shrink-0 ${color} lg:mb-0`;
        const image = document.createElement('img');
        image.src = img;
        image.height = height
        image.width = width
        image.loading = 'lazy'
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
function scrollToActiveLinkInSidebarIntoView() {
    const sidebarScrollContainer = document.querySelector(
        "[data-sidebar-scroll-container]"
    );
    const activeLink = document.querySelector(".docs_sidebar li.active");

    if (activeLink && sidebarScrollContainer) {
        //scroll the container to get the active link into the middle of it
        const containerHeight = sidebarScrollContainer.clientHeight;
        const linkTop = activeLink.getBoundingClientRect().top;
        const linkHeight = activeLink.clientHeight;
        const containerTop = sidebarScrollContainer.getBoundingClientRect().top;

        const scrollPosition = linkTop - containerTop - (containerHeight / 2) + (linkHeight / 2);

        sidebarScrollContainer.scrollTo({
            top: scrollPosition,
        });
    }
}
function getCellDate(cell) {
    return Date.parse(cell.innerHTML.replace(/(\d+)(st|nd|rd|th)/, '$1'));
}
