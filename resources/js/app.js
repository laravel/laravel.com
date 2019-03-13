require('./vendor/prism.js');

$(document).ready(function () {
    $(".nav_trigger").click(function (e) {
        e.preventDefault();
        $("html").toggleClass("nav--on");
        $(".bar").toggleClass("animate");
    });


    if ($('.docs_sidebar').length) {
        var current = $('.docs_sidebar ul').find('li a[href="' + window.location.pathname + '"]');

        if (current.length) {
            current.parent().parent().parent().addClass('sub--on');

            current.parent().addClass('active');
        }

        $(".docs_sidebar h2").click(function (e) {
            e.preventDefault();
            $(".navigation_contain ul li").removeClass("sub--on");
            $(this).parent().addClass("sub--on");
        });

        $('.docs_main ul').first().appendTo('.docs_nav')
    }

    // It's nice to just write in Markdown, so this will adjust
    // our blockquote style to fill in the icon flag and label
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

            $(this).before('<div class="icon ' + color + '"><img src="' + img + '"></div>');
            $(this).html(str.replace(/\{(.*?)\}/, ''));
            $(this).addClass('content');
            $(this).parent().addClass('callout');
        }
    });

    $(".drop_trigger").click(function (e) {
        e.preventDefault();
        $(this).parent().toggleClass("drop--on");
    });

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

    $('a[href*="#"]').not('[href="#"]').click(function (e) {
        e.preventDefault();

        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 800);
            }
        }
    });

    var lastId,
        uiMenu = $(".page_nav ul"),
        menuItems = uiMenu.find("a"),
        scrollItems = menuItems.map(function () {
            var item = $($(this).attr("href"));
            if (item.length) {
                return item;
            }
        });

    $(window).scroll(function () {
        var fromTop = $(this).scrollTop() + 200;
        var cur = scrollItems.map(function () {
            if ($(this).offset().top < fromTop)
                return this;
        });
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
            lastId = id;
            menuItems
                .parent().removeClass("active")
                .end().filter("[href='#" + id + "']").parent().addClass("active");
        }
    });

    $(".footer_nav_trigger").click(function (e) {
        e.preventDefault();
        $(this).parent().toggleClass("nav--on");
    });
});