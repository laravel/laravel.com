$(document).ready(function () {
    // Navigation Menu opener for small screens...
    $(".nav_trigger").click(function (e) {
        e.preventDefault();
        $("html").toggleClass("nav--on");
        $(".bar").toggleClass("animate");
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


    // Handling scrolling to sections of the page...
    // $('a[href*="#"]').not('[href="#"]').click(function (e) {
    //     e.preventDefault();

    //     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    //         var target = $(this.hash);
    //         target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

    //         if (target.length) {
    //             $('html, body').animate({
    //                 scrollTop: target.offset().top
    //             }, 800);
    //         }
    //     }
    // });


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
});
