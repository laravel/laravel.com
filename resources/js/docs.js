import './clipboard';
import './theme'

document.addEventListener('DOMContentLoaded', () => {
    setupNavCurrentLinkHandling();
    highlightSupportPolicyTable();

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
