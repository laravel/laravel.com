$(document).ready(function () {
    // Navigation Menu opener for small screens...
    $(".nav_trigger").click(function (e) {
        e.preventDefault();
        $("html").toggleClass("nav--on");
        $(".bar").toggleClass("animate");
    });

    Mousetrap.bind('/', function (e) {
        e.preventDefault();
        $('#search-docs-input').focus();
    });


    // Footer Navigation Menu opener for small screens...
    $(".footer_nav_trigger").click(function (e) {
        e.preventDefault();
        $(this).parent().toggleClass("nav--on");
    });


    // Main Menu Dropdown opener.
    $(".drop_trigger").click(function (e) {
        e.preventDefault();
        $(this).parent().toggleClass("drop--on");
    });


    // Documentation Screen...
    if ($('#docsScreen').length) {
        require('./docs.js');
    }

    if (window.algolia_app_id != '') {
        require('./search.js');
    }

    // Header Search Box...
    $(".header_content .search_box").click(function (e) {
        $(this).addClass("search--on");
    });

    $(document).mouseup(function (e) {
        var container = $(".header_content .search_box");

        if (!container.is(e.target)
            && container.has(e.target).length === 0) {
            container.removeClass("search--on");
        }
    });

    $('.docs_body').find('a[name]').each(function () {
        var anchor = $('<a href="#' + this.name + '"/>');
        $(this).parent().next().wrapInner(anchor);
    });
});
