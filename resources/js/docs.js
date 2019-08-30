require('./vendor/prism.js');

$(document).ready(function () {
    $('.navigation_contain').show();
});

var current = $('.docs_sidebar ul').find('li a[href="' + window.location.pathname + '"]');

if (current.length) {
    current.parent().parent().parent().addClass('sub--on');

    current.parent().addClass('active');
}

$(".docs_sidebar h2").click(function (e) {
    e.preventDefault();
    let currenty_active = $(this).parent().hasClass('sub--on');
    $(".navigation_contain ul li").removeClass("sub--on");
    if(!currenty_active) {
        $(this).parent().addClass("sub--on");
    }
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

// Track the state of the docs collapse
var docsCollapsed = true;
var $docsSwitcher = $('.expand-docs-switcher');
var $docsSidebar = $('.docs_sidebar');

// Load the users previous preference if available
if (storageAvailable('localStorage')) {
    // Can't use if(var) since this is a boolean, LS returns null for unset keys
    if (localStorage.getItem('laravel_docsCollapsed') === null) {
        localStorage.setItem('laravel_docsCollapsed', true)
    } else {
        // Load previous state, and if it was false, then expand the doc
        // LS will store booleans as strings, we will "cast" them back here
        localStorage.getItem('laravel_docsCollapsed') == 'false' ? expandDocs() : null;
    }
}

// Register event listener
$docsSwitcher.click(function (e) {
    e.preventDefault();
    expandDocs()
});

// Toggle sidebar status
function expandDocs(e) {
    // Expand sidebar
    docsCollapsed ? $docsSidebar.addClass('main--on') : $docsSidebar.removeClass('main--on');

    // Modify states
    docsCollapsed = !docsCollapsed;
    docsCollapsed ? $docsSwitcher.text('Expand All') : $docsSwitcher.text('Collapse All');

    // Modify LS if we can
    storageAvailable('localStorage') ? localStorage.setItem('laravel_docsCollapsed', docsCollapsed) : null;
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




