// $('.body_content').css('display', 'block');

require('./vendor/prism.js');

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

$('#version_switcher').change(function(e){
    window.location = $('#version_switcher').val();
});

$('.docs_main ul').first().appendTo('.docs_nav');

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
