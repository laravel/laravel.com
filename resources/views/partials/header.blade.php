<header
    x-trap.inert.noscroll="navIsOpen"
    class="relative z-50 text-gray-700"
    @keydown.window.escape="navIsOpen = false"
    @click.away="navIsOpen = false"
>
    <div class="relative max-w-screen-2xl mx-auto w-full py-4 bg-white transition duration-200 lg:bg-transparent lg:py-6">
        <div class="max-w-screen-xl mx-auto px-5 flex items-center justify-between">
            <div class="flex-1">
                <a href="/" class="inline-flex items-center">
                    <img class="w-12" src="/img/logomark.min.svg" alt="Laravel" width="50" height="52">
                    <img class="ml-5 sm:block" src="/img/logotype.min.svg" alt="Laravel" width="114" height="29">
                </a>
            </div>
            <ul class="relative hidden lg:flex lg:items-center lg:justify-center lg:gap-6 xl:gap-10">
                @if (SHOW_VAPOR)
                    <li><a href="https://vapor.laravel.com">Vapor</a></li>
                @else
                    <li><a href="https://forge.laravel.com">Forge</a></li>
                @endif
                <li x-data="{ expanded: false }" class="relative" @keydown.window.escape="expanded = false">
                    <button class="flex items-center justify-center" @click="expanded = !expanded">
                        Ecosystem
                        <span class="ml-3 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': expanded }" class="h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </span>
                    </button>
                    <div
                        x-show="expanded"
                        x-cloak
                        class="absolute left-28 z-20 transition transform"
                        x-transition:enter="duration-250 ease-out"
                        x-transition:enter-start="opacity-0 -translate-y-8"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="duration-250 ease-in"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0 -translate-y-8"
                    >
                        <div
                            class="mt-4 w-224 -translate-x-1/2 p-8 bg-white shadow-lg transform transition-transform origin-top"
                            @click.away="expanded = false"
                        >
                            <ul class="grid gap-6 relative sm:grid-cols-2 md:grid-cols-3">
                                <li>
                                    <a href="https://vapor.laravel.com" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-vapor flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/vapor.min.svg" alt="Icon" class="w-7 h-7" width="150" height="150">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Vapor</div>
                                            <span class="text-gray-700 text-xs">Serverless Platform</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://forge.laravel.com" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-forge flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/forge.min.svg" alt="Icon" class="w-7 h-7" width="41" height="32">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Forge</div>
                                            <span class="text-gray-700 text-xs">Server Management</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://envoyer.io" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-envoyer flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/envoyer.min.svg" alt="Icon" class="w-7 h-7" width="41" height="50">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Envoyer</div>
                                            <span class="text-gray-700 text-xs">Zero Downtime Deployment</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/horizon" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-horizon flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/horizon.min.svg" alt="Icon" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Horizon</div>
                                            <span class="text-gray-700 text-xs">Queue Monitoring</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://nova.laravel.com/" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-nova flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/nova.min.svg" alt="Icon" class="w-7 h-7" width="39" height="40">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Nova</div>
                                            <span class="text-gray-700 text-xs">Administration Panel</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/broadcasting" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-echo flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/echo.min.svg" alt="Icon" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Echo</div>
                                            <span class="text-gray-700 text-xs">Realtime Events</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://lumen.laravel.com" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-lumen flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/lumen.min.svg" alt="Icon" class="w-7 h-7" width="27" height="54">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Lumen</div>
                                            <span class="text-gray-700 text-xs">Micro-Framework</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/sail" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-sail flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/sail.min.svg" alt="Icon" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Sail</div>
                                        <span class="text-xs text-g7ay-600">Local Docker environment</span>
                                    </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://spark.laravel.com" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-spark flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/spark.min.svg" alt="Icon" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Spark</div>
                                            <span class="text-gray-700 text-xs">SaaS App Scaffolding</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/valet" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-valet flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/valet.min.svg" alt="Icon" class="w-7 h-7" width="40" height="26">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Valet</div>
                                            <span class="text-gray-700 text-xs">Dev Environment for Macs</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/mix" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-mix flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/mix.min.svg" alt="Icon" class="w-7 h-7" width="48" height="44">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Mix</div>
                                            <span class="text-gray-700 text-xs">Webpack Asset Compilation</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/billing" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-cashier flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/cashier.min.svg" alt="Icon" class="w-7 h-7" width="47" height="32">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Cashier</div>
                                            <span class="text-gray-700 text-xs">Subscription Billing Integration</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/dusk" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-dusk flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/dusk.min.svg" alt="Icon" class="w-7 h-7" width="45" height="44">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Dusk</div>
                                            <span class="text-gray-700 text-xs">Browser Testing and Automation</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/sanctum" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-sanctum flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/sanctum.min.svg" alt="Laravel Sanctum logomark" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Sanctum</div>
                                            <span class="text-xs te7t-gray-600">API / Mobile Authentication</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/scout" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-scout flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/scout.min.svg" alt="Icon" class="w-7 h-7" width="36" height="36">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Scout</div>
                                            <span class="text-gray-700 text-xs">Full-Text Search</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/socialite" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-socialite flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/socialite.min.svg" alt="Icon" class="w-7 h-7" width="32" height="33">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Socialite</div>
                                            <span class="text-gray-700 text-xs">OAuth Authentication</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/telescope" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-telescope flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/telescope.min.svg" alt="Icon" class="w-7 h-7" width="42" height="43">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Telescope</div>
                                            <span class="text-gray-700 text-xs">Debug Assistant</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://jetstream.laravel.com" class="flex items-center">
                                        <div class="relative shrink-0 w-12 h-12 bg-jetstream flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/jetstream.min.svg" alt="Icon" class="w-7 h-7" width="150" height="150">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Jetstream</div>
                                            <span class="text-gray-700 text-xs">App Scaffolding</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="https://laravel-news.com">News</a></li>
                <li><a href="https://partners.laravel.com">Partners</a></li>
            </ul>
            <div class="flex-1 flex items-center justify-end">
                <button @click.prevent="$dispatch('toggle-search-modal')">
                    <svg class="w-6 h-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </button>
                <x-button.secondary href="/docs" class="hidden lg:ml-4 lg:inline-flex">Documentation</x-button.secondary>
                <button
                    class="ml-2 relative w-10 h-10 inline-flex items-center justify-center p-2 text-gray-700 lg:hidden"
                    aria-label="Toggle Menu"
                    @click.prevent="navIsOpen = !navIsOpen"
                >
                    <svg x-show="! navIsOpen" class="w-6" viewBox="0 0 28 12" fill="none" xmlns="http://www.w3.org/2000/svg"><line y1="1" x2="28" y2="1" stroke="currentColor" stroke-width="2"/><line y1="11" x2="28" y2="11" stroke="currentColor" stroke-width="2"/></svg>
                    <svg x-show="navIsOpen" x-cloak class="absolute inset-0 mt-2.5 ml-2.5 w-5" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><rect y="1.41406" width="2" height="24" transform="rotate(-45 0 1.41406)" fill="currentColor"/><rect width="2" height="24" transform="matrix(0.707107 0.707107 0.707107 -0.707107 0.192383 16.9707)" fill="currentColor"/></svg>
                </button>
            </div>
        </div>
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
            x-transition.opacity
            x-cloak
            class="fixed inset-0 w-full pt-[4.2rem] z-10 pointer-events-none"
        >
            <div class="relative h-full w-full py-8 px-5 bg-white pointer-events-auto overflow-y-auto">
                <ul>
                    @if (SHOW_VAPOR)
                        <li><a class="block w-full py-2" href="https://vapor.laravel.com">Vapor</a></li>
                    @else
                        <li><a class="block w-full py-2" href="https://forge.laravel.com">Forge</a></li>
                    @endif
                    <li x-data="{ expanded: false }" @keydown.window.escape="expanded = false" @click.away="expanded = false">
                        <button class="flex items-center justify-between w-full py-3" @click="expanded = !expanded">
                            Ecosystem
                            <span class="ml-3 shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': expanded }" class="h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
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
                                    <a href="https://vapor.laravel.com" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-vapor flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/vapor.min.svg" alt="Icon" class="w-7 h-7" width="150" height="150">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Vapor</div>
                                            <span class="text-gray-700 text-xs">Serverless Platform</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://forge.laravel.com" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-forge flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/forge.min.svg" alt="Icon" class="w-7 h-7" width="41" height="32">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Forge</div>
                                            <span class="text-gray-700 text-xs">Server Management</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://envoyer.io" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-envoyer flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/envoyer.min.svg" alt="Icon" class="w-7 h-7" width="41" height="50">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Envoyer</div>
                                            <span class="text-gray-700 text-xs">Zero Downtime Deployment</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/horizon" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-horizon flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/horizon.min.svg" alt="Icon" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Horizon</div>
                                            <span class="text-gray-700 text-xs">Queue Monitoring</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://nova.laravel.com/" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-nova flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/nova.min.svg" alt="Icon" class="w-7 h-7" width="39" height="40">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Nova</div>
                                            <span class="text-gray-700 text-xs">Administration Panel</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/broadcasting" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-echo flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/echo.min.svg" alt="Icon" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Echo</div>
                                            <span class="text-gray-700 text-xs">Realtime Events</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://lumen.laravel.com" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-lumen flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/lumen.min.svg" alt="Icon" class="w-7 h-7" width="27" height="54">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Lumen</div>
                                            <span class="text-gray-700 text-xs">Micro-Framework</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/homestead" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-homestead flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/homestead.min.svg" alt="Icon" class="w-7 h-7" width="41" height="42">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Homestead</div>
                                        <span class="text-gray-700 text-xs">Pre-Packaged Vagrant Box</span>
                                    </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://spark.laravel.com" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-spark flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/spark.min.svg" alt="Icon" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Spark</div>
                                            <span class="text-gray-700 text-xs">SaaS App Scaffolding</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/valet" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-valet flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/valet.min.svg" alt="Icon" class="w-7 h-7" width="40" height="26">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Valet</div>
                                            <span class="text-gray-700 text-xs">Dev Environment for Macs</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/mix" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-mix flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/mix.min.svg" alt="Icon" class="w-7 h-7" width="48" height="44">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Mix</div>
                                        <span class="text-gray-700 text-xs">Webpack Asset Compilation</span>
                                    </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/billing" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-cashier flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/cashier.min.svg" alt="Icon" class="w-7 h-7" width="47" height="32">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Cashier</div>
                                            <span class="text-gray-700 text-xs">Subscription Billing Integration</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/dusk" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-dusk flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/dusk.min.svg" alt="Icon" class="w-7 h-7" width="45" height="44">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Dusk</div>
                                            <span class="text-gray-700 text-xs">Browser Testing and Automation</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/passport" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-passport flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/passport.min.svg" alt="Icon" class="w-7 h-7" width="29" height="40">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Passport</div>
                                            <span class="text-gray-700 text-xs">Painless OAuth2 Implementation</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/scout" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-scout flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/scout.min.svg" alt="Icon" class="w-7 h-7" width="36" height="36">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Scout</div>
                                            <span class="text-gray-700 text-xs">Full-Text Search</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/socialite" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-socialite flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/socialite.min.svg" alt="Icon" class="w-7 h-7" width="32" height="33">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Socialite</div>
                                            <span class="text-gray-700 text-xs">OAuth Authentication</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/telescope" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-telescope flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/telescope.min.svg" alt="Icon" class="w-7 h-7" width="42" height="43">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Telescope</div>
                                            <span class="text-gray-700 text-xs">Debug Assistant</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://jetstream.laravel.com" class="flex items-center py-2">
                                        <div class="relative shrink-0 w-12 h-12 bg-jetstream flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/jetstream.min.svg" alt="Icon" class="w-7 h-7" width="150" height="150">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Jetstream</div>
                                            <span class="text-gray-700 text-xs">App Scaffolding</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="block w-full py-3" href="https://laravel-news.com">News</a></li>
                    <li><a class="block w-full py-3" href="https://partners.laravel.com">Partners</a></li>
                    <li class="flex sm:justify-center"><x-button.secondary class="mt-3 w-full max-w-md" href="/docs">Documentation</x-button.secondary></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
