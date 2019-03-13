<script id="search_suggestion_template" type="text/template">
	<div class="autocomplete-wrapper">
		{{#_highlightResult.h1}}
		<div class="h1">
			{{{ _highlightResult.h1.value }}}
		</div>
		{{/_highlightResult.h1}}

		<div class="sub-section">
			{{#_highlightResult.h2}}
			<div class="h2">
				<span class="hash">#</span> {{{ _highlightResult.h2.value }}}
			</div>
			{{/_highlightResult.h2}}

			{{#_highlightResult.h3}}
			<div class="h3">
				> {{{ _highlightResult.h3.value }}}
			</div>
			{{/_highlightResult.h3}}

			{{#_highlightResult.h4}}
			<div class="h4">
				> {{{ _highlightResult.h4.value }}}
			</div>
			{{/_highlightResult.h4}}
		</div>

		{{#_highlightResult.content}}
		<div class="content">
			{{{ _highlightResult.content.value }}}
		</div>
		{{/_highlightResult.content}}
	</div>
</script>

<script id="search_empty_template" type="text/template">
	<div class="autocomplete-wrapper empty">
		<div class="h2">We didn't find any result for "{{query}}". Sorry!</div>
	</div>
</script>

<script id="search_footer_template" type="text/template">
	<div class="footer">
		<a target="_blank" href="https://www.algolia.com/?utm_source=laravel&utm_medium=link&utm_campaign=laravel_documentation_search">
            <img width="105" src="/img/icons/algolia.min.svg" alt="Algolia">
			<div style="clear: both"></div>
		</a>
	</div>
</script>
