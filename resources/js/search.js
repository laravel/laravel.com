const algoliasearch = require('./vendor/algoliasearch.js');
const Hogan = require('./vendor/hogan.js');

require('./vendor/typeahead.js');

var client = algoliasearch(window.algolia_app_id, window.algolia_search_key);
var index = client.initIndex('laravel');


var templates = {
    suggestion: Hogan.compile($('#search_suggestion_template').html()),
    empty: Hogan.compile($('#search_empty_template').html()),
    footer: Hogan.compile($('#search_footer_template').html())
};

var $searchInput = $('.search_input');
var $article = $('.docs_main');

// Closes algolia results on blur
$searchInput.blur(function () {
    $(this).val('');
});

// typeahead datasets
// https://github.com/twitter/typeahead.js/blob/master/doc/jquery_typeahead.md#datasets
var datasets = [];

datasets.push({
    source: function searchAlgolia(query, cb) {
        index.search(query, {
            hitsPerPage: 5,
            facetFilters: ['version:' + window.version],
            highlightPreTag: '<em>',
            highlightPostTag: '</em>'
        }, function searchCallback(err, content) {
            if (err) {
                throw err;
            }

            cb(content.hits)
        });
    },
    templates: {
        suggestion: templates.suggestion.render.bind(templates.suggestion),
        empty: templates.empty.render.bind(templates.empty),
        footer: templates.footer.render.bind(templates.footer)
    }
});

var typeahead = $searchInput.typeahead({hint: false}, datasets);
var old_input = '';

typeahead.on('typeahead:selected', function changePage(e, item) {
    // The `item.url.replace` replaces the full url by the the relative one. Here is an
    // example: https://laravel.com/docs/6.x#installing-laravel -> 6.x#installing-laravel
    window.location.href = item.url.replace(/^.*\/\/[^\/]+/, '');
});

typeahead.on('keyup', function (e) {
    old_input = $(this).typeahead('val');

    if ($(this).val() === '' && old_input.length == $(this).typeahead('val')) {
        $article.css('opacity', '1');
        $searchInput.closest('#search-wrapper').removeClass('not-empty');
    } else {
        $article.css('opacity', '0.1');
        $searchInput.closest('#search-wrapper').addClass('not-empty');
    }
    if (e.keyCode === 27) {
        $article.css('opacity', '1');
    }
});

typeahead.on('typeahead:closed', function () {
    $article.css('opacity', '1');
});

typeahead.on('typeahead:closed',
    function (e) {
        // keep menu open if input element is still focused
        if ($(e.target).is(':focus')) {
            return false;
        }
    }
);

$('#cross').click(function () {
    typeahead.typeahead('val', '').keyup();
    $article.css('opacity', '1');
});
