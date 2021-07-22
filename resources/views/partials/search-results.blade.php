<div x-show="hits.length" x-cloak class="absolute w-full mt-8 pt-px divide-y divide-gray-200 shadow-sm z-30 dark:divide-dark-500">
    <template x-for="(hit, index) in hits" :key="index">
        <a
            :id="'search-result-' + index"
            :href="hit.url"
            class="search-result block px-4 py-3 bg-gray-100 transition-colors duration-200 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:bg-dark-600 dark:text-gray-400 dark:focus:bg-dark-500 dark:hover:bg-dark-500"
            @keydown.arrow-up.prevent="focusPreviousResult(index)"
            @keydown.arrow-down.prevent="focusNextResult(index)"
        >
            <div x-show="hit._highlightResult.hierarchy.lvl0" class="text-sm font-medium" x-html="hit._highlightResult.hierarchy.lvl0 ? hit._highlightResult.hierarchy.lvl0.value : ''"></div>
            <div class="mt-2">
                <div x-show="hit._highlightResult.hierarchy.lvl1" class="text-sm">
                    <span class="text-red-600 opacity-75">#</span> <span x-html="hit._highlightResult.hierarchy.lvl1 ? hit._highlightResult.hierarchy.lvl1.value : ''"></span>
                </div>

                <div x-show="hit._highlightResult.hierarchy.lvl2" class="text-sm">
                    > <span x-html="hit._highlightResult.hierarchy.lvl2 ? hit._highlightResult.hierarchy.lvl2.value : ''"></span>
                </div>

                <div x-show="hit._highlightResult.hierarchy.lvl3" class="text-sm">
                    > <span x-html="hit._highlightResult.hierarchy.lvl3 ? hit._highlightResult.hierarchy.lvl3.value : ''"></span>
                </div>

                <div x-show="hit._highlightResult.hierarchy.lvl4" class="text-sm">
                    > <span x-html="hit._highlightResult.hierarchy.lvl4 ? hit._highlightResult.hierarchy.lvl4.value : ''"></span>
                </div>

                <div x-show="hit._highlightResult.hierarchy.lvl5" class="text-sm">
                    > <span x-html="hit._highlightResult.hierarchy.lvl5 ? hit._highlightResult.hierarchy.lvl5.value : ''"></span>
                </div>
            </div>
        </a>
    </template>
	<div class="bg-gray-100 flex justify-end dark:bg-dark-600 dark:text-gray-400">
		<a class="px-4 py-2 inline-block" target="_blank" href="https://www.algolia.com/?utm_source=laravel&utm_medium=link&utm_campaign=laravel_documentation_search">
            <img width="105" src="/img/icons/algolia.min.svg" id="docs_search__algolia" alt="Algolia">
            <img width="105" src="/img/icons/algolia.dark.min.svg" id="docs_search__algolia_dark" alt="Algolia">
		</a>
	</div>
</div>

<div x-show="search && ! hits.length" x-cloak class="absolute w-full mt-8 pt-px divide-y divide-gray-200 shadow-sm z-30 dark:divide-dark-500">
	<div class="px-4 py-2 bg-gray-100 dark:bg-dark-600 dark:text-gray-400">
		<div class="text-sm" x-text="`We didn't find any result for '${search}'. Sorry!`"></div>
	</div>
	<div class="bg-gray-100 flex justify-end dark:bg-dark-600 dark:text-gray-400">
		<a class="px-4 py-2 inline-block" target="_blank" href="https://www.algolia.com/?utm_source=laravel&utm_medium=link&utm_campaign=laravel_documentation_search">
            <img width="105" src="/img/icons/algolia.min.svg" id="docs_search__algolia" alt="Algolia">
            <img width="105" src="/img/icons/algolia.dark.min.svg" id="docs_search__algolia_dark" alt="Algolia">
		</a>
	</div>
</div>
