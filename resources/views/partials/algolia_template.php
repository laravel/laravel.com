<script id="search_suggestion_template" type="text/template">
	<div class="autocomplete-wrapper">
		{{#_highlightResult.hierarchy.lvl0.value}}
		<div class="h1">
			{{{ _highlightResult.hierarchy.lvl0.value }}}
		</div>
		{{/_highlightResult.hierarchy.lvl0.value}}

		<div class="sub-section">
			{{#_highlightResult.hierarchy.lvl1.value}}
			<div class="h2">
				<span class="hash">#</span> {{{ _highlightResult.hierarchy.lvl1.value }}}
			</div>
			{{/_highlightResult.hierarchy.lvl1.value}}

			{{#_highlightResult.hierarchy.lvl2.value}}
			<div class="h3">
				> {{{ _highlightResult.hierarchy.lvl2.value }}}
			</div>
			{{/_highlightResult.hierarchy.lvl2.value}}

			{{#_highlightResult.hierarchy.lvl3.value}}
			<div class="h4">
				> {{{ _highlightResult.hierarchy.lvl3.value }}}
			</div>
			{{/_highlightResult.hierarchy.lvl3.value}}
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
