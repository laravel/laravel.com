const skipToContentLink = document.querySelector('#skip-to-content-link');
const mainContentWrapper = document.querySelector('#main-content');

if (skipToContentLink && mainContentWrapper) {
    skipToContentLink.addEventListener('click', setFocusOnContentWrapper);
    mainContentWrapper.addEventListener('blur', removeContentWrapperTabIndex);
}

if (skipToContentLink && !mainContentWrapper) {
    removeSkipToContentLink();
}

function setFocusOnContentWrapper(e) {
    e.preventDefault();
    mainContentWrapper.setAttribute('tabindex', -1);
    mainContentWrapper.focus();
}

function removeContentWrapperTabIndex() {
    mainContentWrapper.removeAttribute('tabindex');
}

function removeSkipToContentLink() {
    skipToContentLink.parentNode.removeChild(skipToContentLink);
}
