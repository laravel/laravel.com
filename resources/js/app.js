$(document).ready(function () {
    $(".nav_trigger").click(function (e) {
        e.preventDefault();
        $("html").toggleClass("nav--on");
        $(".bar").toggleClass("animate");
    });

    $(".sub_nav_trigger").click(function (e) {
        e.preventDefault();
        $(".navigation_contain ul li").removeClass("sub--on");
        $(this).parent().addClass("sub--on");
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