
<div
    x-data="searchComponent()"
    @toggle-search-modal.window="open = !open"
    @keydown.window.escape="close"
    @keydown.window="handleKeydown"
    @keydown.escape.prevent.stop="close"
    x-show="open"
    x-cloak
    x-trap.noscroll.inert="open"
    role="dialog"
    aria-modal="true"
    x-id="['search-modal']"
    :aria-labelledby="$id('search-modal')"
    class="fixed inset-0 z-50 text-gray-400 overflow-y-auto"
>
    <div x-show="open" x-transition.opacity class="fixed inset-0 bg-dark-900 bg-opacity-80"></div>

    <div
        x-show="open"
        x-transition
        @click="close()"
        class="relative min-h-screen flex items-start justify-center p-4 lg:py-20"
    >
        <div
            @click.stop
            class="relative max-w-2xl w-full bg-dark-700 pt-8 px-8 pb-16"
        >
            <div
                class="relative w-full border-b border-gray-600 border-opacity-50 overflow-hidden transition-all duration-500 focus-within:border-gray-600"
            >
                <svg class="absolute inset-y-0 left-0 mt-1 w-5 h-5 text-gray-500 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                <input
                    x-model.debouce.200ms="search"
                    x-ref="searchInput"
                    class="flex-1 w-full pl-8 pr-4 py-1 tracking-wide text-gray-400 placeholder-gray-500 bg-transparent focus:outline-none"
                    placeholder="Search Docs (Press '/')"
                    aria-label="Search in the documentation"
                    @keydown.arrow-up.prevent="focusPreviousResult()"
                    @keydown.arrow-down.prevent="focusNextResult()"
                    @click="close()"
                >
            </div>

            <div x-show="search">
                <div x-show="hits.length" x-cloak class="mt-5 divide-y divide-gray-700 z-30">
                    <template x-for="(hit, index) in hits" :key="index" hidden>
                        <div>
                            <a
                                :id="'search-result-' + index"
                                :href="hit.url"
                                class="search-result -mx-2 block p-3 text-gray-400 transition-colors duration-200 focus:outline-none focus:bg-dark-800 focus:text-gray-200 hover:text-gray-200"
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
                        </div>
                    </template>
                </div>

                <div x-show="! hits.length" x-cloak class="mt-8 pb-32">
                    <div x-text="`We didn't find any result for '${search}'. Sorry!`"></div>
                </div>
            </div>

            <div x-show="! search" class="mt-8 pb-32">
                <p>Enter a search term to find results in the documentation.</p>
            </div>

            <div class="absolute bottom-0 inset-x-0 border-t border-dark-800 text-gray-400 flex justify-end">
                <a class="px-4 py-2 inline-block" target="_blank" href="https://www.algolia.com/?utm_source=laravel&utm_medium=link&utm_campaign=laravel_documentation_search">
                    <img width="105" src="/img/icons/algolia.dark.min.svg" id="docs_search__algolia_dark" alt="Algolia">
                </a>
            </div>
        </div>

        <button x-show="open" x-transition.opacity class="absolute top-8 right-8 text-gray-400" @click.prevent="close">
            <span class="sr-only">Close search</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
