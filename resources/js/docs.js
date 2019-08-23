require('./vendor/prism.js');

$(document).ready(function () {
    $('.navigation_contain').show();

    // collapse and expand for the sidebar
    var toggles = document.querySelectorAll('.docs_sidebar h2'),
        togglesList = document.querySelectorAll('.docs_sidebar h2 + ul');

    for (var i = 0; i < toggles.length; i++) {
        toggles[i].addEventListener('click', expandItem);
        toggles[i].addEventListener('keydown', expandItemKeyboard);
        toggles[i].setAttribute('tabindex', '0');
    }

    // Via https://developer.mozilla.org/en-US/docs/Web/API/Web_Storage_API/Using_the_Web_Storage_API#Testing_for_availability
    function storageAvailable(type) {
        try {
            var storage = window[type],
                x = '__storage_test__';
            storage.setItem(x, x);
            storage.removeItem(x);
            return true;
        } catch (e) {
            return e instanceof DOMException && (
                    // everything except Firefox
                e.code === 22 ||
                // Firefox
                e.code === 1014 ||
                // test name field too, because code might not be present
                // everything except Firefox
                e.name === 'QuotaExceededError' ||
                // Firefox
                e.name === 'NS_ERROR_DOM_QUOTA_REACHED') &&
                // acknowledge QuotaExceededError only if there's something already stored
                storage.length !== 0;
        }
    }

    // Track the state of the doc collapse
    var docCollapsed = true;
    function expandDocs(e) {
        for (var i = 0; i < toggles.length; i++) {
            if (docCollapsed) {
                toggles[i].parentElement.classList.add('sub--on');
            } else {
                toggles[i].parentElement.classList.remove('sub--on');
            }
        }

        // Modify states
        docCollapsed = !docCollapsed;
        document.getElementById('doc-expand').text = docCollapsed ? 'Expand All' : 'Collapse All';

        // Modify LS if we can
        if (storageAvailable('localStorage')) {
            localStorage.setItem('laravel_docCollapsed', docCollapsed);
        }
        // Cancel event
        if (e) {
            e.preventDefault();
        }
    }

    if (document.getElementById('doc-expand')) {
        // Load the users previous preference if available
        if (storageAvailable('localStorage')) {
            // Can't use if(var) since this is a boolean, LS returns null for unset keys
            if (localStorage.getItem('laravel_docCollapsed') === null) {
                localStorage.setItem('laravel_docCollapsed', true);
            } else {
                // Load previous state, and if it was false, then expand the doc
                // LS will store booleans as strings, we will "cast" them back here
                localStorage.getItem('laravel_docCollapsed') == 'false' ? expandDocs() : null;
            }
        }

        // Register event listener
        document.getElementById('doc-expand').addEventListener('click', expandDocs);
    }

    if ($('.docs_sidebar ul').length) {
        var current = $('.docs_sidebar ul').find('li a[href="' + window.location.pathname + '"]');

        if (current.length) {
            current.parent().css('font-weight', 'bold');

            // Only toggle the state if the user has collapsed the documentation
            if (docCollapsed) {
                current.closest('ul').prev().toggleClass('is-active');
            }
        }
    }

    function expandItem(e) {
        var elem = e.target;

        if (elem.classList.contains('is-active')) {
            elem.classList.remove('is-active');
            elem.style.outline = 'none';
        } else {
            clearItems();
            elem.classList.add('is-active');
            elem.style.outline = 'none';
        }
    }

    function expandItemKeyboard(e) {
        var elem = e.target;

        if ([13, 37, 39].includes(e.code)) {
            clearItems();
        }
        var keyCode = e.key ? e.key : e.keyCode;

        if( keyCode === 13 || keyCode === 'Enter') {
            elem.parentElement.classList.toggle('sub--on');
        }

        if( keyCode === 39 || keyCode === 'ArrowRight') {
            elem.parentElement.classList.add('sub--on');
        }

        if( keyCode === 37 || keyCode === 'ArrowLeft') {
            elem.parentElement.classList.remove('sub--on');
        }
    }

    function clearItems() {
        for (var i = 0; i < toggles.length; i++) {
            toggles[i].classList.remove('is-active');
        }
    }

});

var current = $('.docs_sidebar ul').find('li a[href="' + window.location.pathname + '"]');

if (current.length) {
    current.parent().parent().parent().addClass('sub--on');

    current.parent().addClass('active');
}

$(".docs_sidebar h2").click(function (e) {
    e.preventDefault();
    $(this).parent().toggleClass('sub--on')
});

$('#version_switcher').change(function(e){
    window.location = $('#version_switcher').val();
});

$('.docs_main blockquote p').each(function () {
    var str = $(this).html();
    var match = str.match(/\{(.*?)\}/);
    var img, color;

    if (match) {
        var type = match[1] || false;
    }

    if (type) {
        switch (type) {
            case "note":
                img = '/img/callouts/exclamation.min.svg';
                color = 'red';
                break;
            case "tip":
                img = '/img/callouts/lightbulb.min.svg';
                color = 'purple';
                break;
            case "laracasts":
            case "video":
                img = '/img/callouts/laracast.min.svg';
                color = 'blue';
                break;
        }

        $(this).wrap('<div></div>');
        $(this).before('<div class="icon ' + color + '"><img src="' + img + '"></div>');
        $(this).html(str.replace(/\{(.*?)\}/, ''));
        $(this).addClass('content');
        $(this).parent().addClass('callout');
    }
});
