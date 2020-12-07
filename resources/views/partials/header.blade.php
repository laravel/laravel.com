<header
    class="relative z-50"
    @keydown.window.escape="navIsOpen = false"
    @click.away="navIsOpen = false"
>
    <div class="relative max-w-screen-2xl mx-auto w-full py-10 bg-white transition duration-200">
        <div class="max-w-screen-xl mx-auto px-8 flex items-center justify-between">
            <a href="/" class="flex items-center">
                <img class="" src="/img/logomark.min.svg" alt="Laravel">
                <img class="hidden ml-5 sm:block" src="/img/logotype.min.svg" alt="Laravel">
            </a>
            <ul class="relative hidden lg:ml-6 lg:pt-3 lg:flex lg:items-end lg:space-x-6 xl:ml-14 xl:space-x-10">
                <li><a href="/docs">Documentation</a></li>
                @if (SHOW_VAPOR)
                    <li><a href="https://vapor.laravel.com">Vapor</a></li>
                @else
                    <li><a href="https://forge.laravel.com">Forge</a></li>
                @endif
                <li x-data="{ expanded: false }" class="relative" @keydown.window.escape="expanded = false">
                    <button class="flex items-center justify-center focus:outline-none" @click="expanded = !expanded">
                        Ecosystem<span class="ml-3 flex-shrink-0"><img :class="{ 'rotate-180': expanded }" class="w-2.5 h-2.5 transform transition-transform" src="/img/icons/nav_arrow.min.svg" alt="Expand"></span>
                    </button>
                    <div
                        x-show="expanded"
                        x-cloak
                        class="absolute left-0 z-20 transition transform"
                        x-transition:enter="duration-250 ease-out"
                        x-transition:enter-start="opacity-0 -translate-y-8"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="duration-250 ease-in"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0 -translate-y-8"
                    >
                        <div class="mt-4 ml-8 w-224 -translate-x-1/2 p-8 bg-white shadow-lg transform transition-transform origin-top" @click.away="expanded = false">
                            <ul class="grid gap-3 relative sm:grid-cols-2 md:grid-cols-3">
                                <li>
                                    <a href="https://vapor.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-vapor flex items-center justify-center">
                                            <img src="/img/ecosystem/vapor.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Vapor</div>
                                            <span class="text-gray-600 text-xs">Serverless Platform</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://forge.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-forge flex items-center justify-center">
                                            <img src="/img/ecosystem/forge.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Forge</div>
                                            <span class="text-gray-600 text-xs">Server Management</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://envoyer.io" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-envoyer flex items-center justify-center">
                                            <img src="/img/ecosystem/envoyer.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Envoyer</div>
                                            <span class="text-gray-600 text-xs">Zero Downtime Deployment</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/horizon" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-horizon flex items-center justify-center">
                                            <img src="/img/ecosystem/horizon.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Horizon</div>
                                            <span class="text-gray-600 text-xs">Queue Monitoring</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://nova.laravel.com/" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-nova flex items-center justify-center">
                                            <img src="/img/ecosystem/nova.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Nova</div>
                                            <span class="text-gray-600 text-xs">Administration Panel</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/broadcasting" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-echo flex items-center justify-center">
                                            <img src="/img/ecosystem/echo.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Echo</div>
                                            <span class="text-gray-600 text-xs">Realtime Events</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://lumen.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-lumen flex items-center justify-center">
                                            <img src="/img/ecosystem/lumen.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Lumen</div>
                                            <span class="text-gray-600 text-xs">Micro-Framework</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/homestead" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-homestead flex items-center justify-center">
                                            <img src="/img/ecosystem/homestead.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Homestead</div>
                                        <span class="text-gray-600 text-xs">Pre-Packaged Vagrant Box</span>
                                    </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://spark.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-spark flex items-center justify-center">
                                            <img src="/img/ecosystem/spark.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Spark</div>
                                            <span class="text-gray-600 text-xs">SaaS App Scaffolding</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/valet" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-valet flex items-center justify-center">
                                            <img src="/img/ecosystem/valet.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Valet</div>
                                            <span class="text-gray-600 text-xs">Dev Environment for Macs</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/mix" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-mix flex items-center justify-center">
                                            <img src="/img/ecosystem/mix.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Mix</div>
                                        <span class="text-gray-600 text-xs">Webpack Asset Compilation</span>
                                    </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/billing" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-cashier flex items-center justify-center">
                                            <img src="/img/ecosystem/cashier.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Cashier</div>
                                            <span class="text-gray-600 text-xs">Subscription Billing Integration</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/dusk" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-dusk flex items-center justify-center">
                                            <img src="/img/ecosystem/dusk.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Dusk</div>
                                            <span class="text-gray-600 text-xs">Browser Testing and Automation</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/passport" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-passport flex items-center justify-center">
                                            <img src="/img/ecosystem/passport.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Passport</div>
                                            <span class="text-gray-600 text-xs">Painless OAuth2 Implementation</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/scout" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-scout flex items-center justify-center">
                                            <img src="/img/ecosystem/scout.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Scout</div>
                                            <span class="text-gray-600 text-xs">Full-Text Search</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/socialite" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-socialite flex items-center justify-center">
                                            <img src="/img/ecosystem/socialite.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Socialite</div>
                                            <span class="text-gray-600 text-xs">OAuth Authentication</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/telescope" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-telescope flex items-center justify-center">
                                            <img src="/img/ecosystem/telescope.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Telescope</div>
                                            <span class="text-gray-600 text-xs">Debug Assistant</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://jetstream.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-jetstream flex items-center justify-center">
                                            <img src="/img/ecosystem/jetstream.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Jetstream</div>
                                            <span class="text-gray-600 text-xs">App Scaffolding</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="https://laravel-news.com">News</a></li>
                <li><a href="/partners">Partners</a></li>
            </ul>
            <div class="flex-1 flex items-center justify-end">
                <div x-data="searchComponent()" x-init="init()" class="ml-4 relative flex-1 flex justify-end max-w-xs w-full lg:absolute lg:right-0 lg:max-w-xxs lg:ml-10 xl:max-w-xs">
                    <div
                        class="relative w-6 border-b border-gray-600 border-opacity-50 overflow-hidden transition-all duration-500 lg:w-full hover:w-full focus-within:border-gray-600"
                        :class="{ 'w-6': !searchIsOpen, 'w-full': searchIsOpen }"
                        @click="searchIsOpen = true"
                        @click.away="clear"
                        @keydown.window.escape="clear"
                        @keydown.arrow-up.prevent="focusPreviousResult()"
                        @keydown.arrow-down.prevent="focusNextResult()"
                                @keydown.window="handleSlashKey"
                    >
                        <svg class="absolute inset-y-0 left-0 z-10 mt-1 w-5 h-5 text-gray-900 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                        <input
                            x-model.debouce.200ms="search"
                            x-ref="searchInput"
                            class="flex-1 w-full pl-8 pr-4 py-1 placeholder-gray-900 tracking-wide bg-white focus:outline-none"
                            placeholder="Search Docs"
                            aria-label="Search in the documentation"
                        >
                    </div>
                    @include('partials.search-results')
                </div>
                <button class="ml-2 relative w-10 h-10 p-2 text-red-600 lg:hidden focus:outline-none focus:shadow-outline" aria-label="Menu" @click.prevent="navIsOpen = !navIsOpen">
                    <svg x-show.transition.opacity="! navIsOpen" class="absolute inset-0 mt-2 ml-2 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                    <svg x-show.transition.opacity="navIsOpen" x-cloak class="absolute inset-0 mt-2 ml-2 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
        </div>
        <span :class="{ 'shadow-sm': navIsOpen }" class="absolute inset-0 z-20 pointer-events-none"></span>
    </div>
    <div
        x-show="navIsOpen"
        class="lg:hidden"
        x-transition:enter="duration-150"
        x-transition:leave="duration-100 ease-in"
        x-cloak
    >
        <nav
            x-show="navIsOpen"
            x-cloak
            class="absolute w-full transform origin-top shadow-sm z-10"
            x-transition:enter="duration-150 ease-out"
            x-transition:enter-start="opacity-0 -translate-y-8 scale-75"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="duration-100 ease-in"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 -translate-y-8 scale-75"
        >
            <div class="relative py-8 px-8 bg-white">
                <ul>
                    <li><a class="block w-full py-2 text-center" href="/docs">Documentation</a></li>
                    @if (SHOW_VAPOR)
                        <li><a class="block w-full py-2 text-center" href="https://vapor.laravel.com">Vapor</a></li>
                    @else
                        <li><a class="block w-full py-2 text-center" href="https://forge.laravel.com">Forge</a></li>
                    @endif
                    <li x-data="{ expanded: false }" @keydown.window.escape="expanded = false" @click.away="expanded = false">
                        <button class="flex items-center justify-center w-full py-2 text-center" @click="expanded = !expanded">
                            Ecosystem
                            <span class="ml-3 flex-shrink-0">
                                <img :class="{ 'rotate-180': expanded }" class="w-2.5 h-2.5 transform transition-transform" src="/img/icons/nav_arrow.min.svg" alt="Expand">
                            </span>
                        </button>
                        <div
                            x-show="expanded"
                            x-cloak
                            class="pt-1 pb-8 transform transition-transform origin-top"
                            x-transition:enter="duration-250 ease-out"
                            x-transition:enter-start="opacity-0 -translate-y-8"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="duration-250 ease-in"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0 -translate-y-8"
                        >
                            <ul class="grid gap-3 relative sm:grid-cols-2 md:grid-cols-3">
                                <li>
                                    <a href="https://vapor.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-vapor flex items-center justify-center">
                                            <img src="/img/ecosystem/vapor.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Vapor</div>
                                            <span class="text-gray-600 text-xs">Serverless Platform</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://forge.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-forge flex items-center justify-center">
                                            <img src="/img/ecosystem/forge.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Forge</div>
                                            <span class="text-gray-600 text-xs">Server Management</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://envoyer.io" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-envoyer flex items-center justify-center">
                                            <img src="/img/ecosystem/envoyer.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Envoyer</div>
                                            <span class="text-gray-600 text-xs">Zero Downtime Deployment</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/horizon" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-horizon flex items-center justify-center">
                                            <img src="/img/ecosystem/horizon.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Horizon</div>
                                            <span class="text-gray-600 text-xs">Queue Monitoring</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://nova.laravel.com/" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-nova flex items-center justify-center">
                                            <img src="/img/ecosystem/nova.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Nova</div>
                                            <span class="text-gray-600 text-xs">Administration Panel</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/broadcasting" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-echo flex items-center justify-center">
                                            <img src="/img/ecosystem/echo.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Echo</div>
                                            <span class="text-gray-600 text-xs">Realtime Events</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://lumen.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-lumen flex items-center justify-center">
                                            <img src="/img/ecosystem/lumen.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Lumen</div>
                                            <span class="text-gray-600 text-xs">Micro-Framework</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/homestead" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-homestead flex items-center justify-center">
                                            <img src="/img/ecosystem/homestead.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Homestead</div>
                                        <span class="text-gray-600 text-xs">Pre-Packaged Vagrant Box</span>
                                    </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://spark.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-spark flex items-center justify-center">
                                            <img src="/img/ecosystem/spark.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Spark</div>
                                            <span class="text-gray-600 text-xs">SaaS App Scaffolding</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/valet" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-valet flex items-center justify-center">
                                            <img src="/img/ecosystem/valet.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Valet</div>
                                            <span class="text-gray-600 text-xs">Dev Environment for Macs</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/mix" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-mix flex items-center justify-center">
                                            <img src="/img/ecosystem/mix.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Mix</div>
                                        <span class="text-gray-600 text-xs">Webpack Asset Compilation</span>
                                    </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/billing" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-cashier flex items-center justify-center">
                                            <img src="/img/ecosystem/cashier.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Cashier</div>
                                            <span class="text-gray-600 text-xs">Subscription Billing Integration</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/dusk" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-dusk flex items-center justify-center">
                                            <img src="/img/ecosystem/dusk.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Dusk</div>
                                            <span class="text-gray-600 text-xs">Browser Testing and Automation</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/passport" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-passport flex items-center justify-center">
                                            <img src="/img/ecosystem/passport.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Passport</div>
                                            <span class="text-gray-600 text-xs">Painless OAuth2 Implementation</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/scout" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-scout flex items-center justify-center">
                                            <img src="/img/ecosystem/scout.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Scout</div>
                                            <span class="text-gray-600 text-xs">Full-Text Search</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/socialite" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-socialite flex items-center justify-center">
                                            <img src="/img/ecosystem/socialite.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Socialite</div>
                                            <span class="text-gray-600 text-xs">OAuth Authentication</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/telescope" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-telescope flex items-center justify-center">
                                            <img src="/img/ecosystem/telescope.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Telescope</div>
                                            <span class="text-gray-600 text-xs">Debug Assistant</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://jetstream.laravel.com" class="flex items-center p-4 shadow-lg">
                                        <div class="w-14 h-14 bg-jetstream flex items-center justify-center">
                                            <img src="/img/ecosystem/jetstream.min.svg" alt="Icon" class="w-10 h-10">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div>Jetstream</div>
                                            <span class="text-gray-600 text-xs">App Scaffolding</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="block w-full py-2 text-center" href="https://laravel-news.com">News</a></li>
                    <li><a class="block w-full py-2 text-center" href="/partners">Partners</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
