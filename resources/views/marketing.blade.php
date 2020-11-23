@extends('partials.layout')

@section('content')
    @include('partials.header')

    <div class="overflow-hidden">
        <div class="max-w-screen-xl px-8 mx-auto">
            <div class="py-3 sm:transform sm:-translate-x-8 sm:py-6 2xl:-translate-x-24">
                <a href="https://laracon.eu/" class="max-w-md flex bg-gray-100 transition hover:bg-gray-200">
                    <div class="w-10 h-10 flex items-center justify-center bg-vapor sm:w-12 sm:h-12">
                        <!-- <img src="/img/ecosystem/vapor.min.svg" alt="Vapor" class="w-7 h-7"> -->
                        <img src="/img/ecosystem/laracon-online.svg" alt="Laracon Online" class="w-7 h-7">
                    </div>
                    <div class="px-3 self-stretch flex items-center">
                        <p class="text-gray-700 text-xs sm:text-sm">
                            Laracon EU Online is happening soon! <span class="whitespace-nowrap">Sign up today! →</span>
                        </p>
                    </div>
                </a>
            </div>
        </div>

        <section class="py-12 md:py-20 xl:py-28">
            <div class="relative max-w-screen-xl px-8 mx-auto">
                <div style="z-index: -9998" class="hidden md:w-full md:transform md:translate-x-1/4 md:absolute md:-top-16 md:-right-16 md:h-80 md:flex md:items-center lg:w-3/4 lg:right-16 lg:h-96">
                    <video poster="/img/hero/hero_poster.jpg" playsinline autoplay muted loop>
                        <source src="/img/hero/hero.mp4" type="video/mp4">
                    </video>
                </div>
                <h1 class="max-w-xl font-medium text-3xl tracking-tight sm:text-4xl lg:text-5xl lg:leading-tight xl:max-w-3xl xl:pr-8 xl:text-5xl">The PHP Framework for <span class="whitespace-nowrap">Web Artisans</span></h1>
                <p class="mt-3 max-w-md text-gray-600 sm:mt-5 lg:mt-8 lg:max-w-xl lg:text-lg xl:max-w-2xl">Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>
                <div class="mt-6 space-y-4 flex flex-col sm:flex-row sm:mt-8 sm:space-y-0 sm:space-x-4 md:mt-8 lg:mt-12">
                    <x-button.primary href="/docs">
                        Documentation
                    </x-button.primary>
                    <x-button.secondary href="https://laracasts.com" target="_blank">
                        <img class="w-6 h-6 flex-shrink-0" src="/img/icons/play.min.svg" alt="Play Video">
                        <span class="ml-3">Watch Laracasts</span>
                    </x-button.secondary>
                </div>
            </div>
        </section>
    </div>

    <div class="relative py-16 overflow-hidden md:py-40 lg:py-64 xl:py-72">
        <div class="relative max-w-screen-xl px-8 mx-auto space-y-16 md:space-y-0 md:flex md:items-center">
            <div style="z-index: -9999; width: 120%" class="hidden md:transform md:-translate-x-1/2 md:absolute md:inset-y-0 md:left-0 md:h-full md:flex md:items-center">
                <video class="w-full" poster="/img/blocks/blocks_3.jpg" playsinline autoplay muted loop>
                    <source src="/img/blocks/blocks_3.mp4" type="video/mp4">
                </video>
            </div>
            @if (SHOW_VAPOR)
                <div class="max-w-lg md:max-w-auto md:w-1/2">
                    <img class="w-full shadow-lg" src="/img/homepage/vapor.jpg" alt="Vapor">
                </div>
                <div class="md:w-1/2 md:pl-8 lg:pl-24">
                    <h1 class="font-medium text-3xl tracking-tight sm:text-4xl lg:text-5xl lg:leading-tight xl:text-5xl">Laravel Vapor</h1>
                    <p class="mt-3 max-w-xl text-gray-600 sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg">Laravel Vapor is a serverless deployment platform for Laravel, powered by AWS. Launch your Laravel infrastructure on Vapor and fall in love with the scalable simplicity of serverless.</p>
                    <x-button.primary class="mt-6 sm:mt-8 md:mt-10" href="https://vapor.laravel.com" target="_blank">
                        Learn More
                    </x-button.primary>
                </div>
            @else
                <div class="max-w-lg md:max-w-auto md:w-1/2">
                    <img class="w-full shadow-lg" src="/img/homepage/forge.jpg" alt="Forge">
                </div>
                <div class="md:w-1/2 md:pl-8 lg:pl-24">
                    <h1 class="font-medium text-3xl tracking-tight sm:text-4xl lg:text-5xl lg:leading-tight xl:text-5xl">Laravel Forge</h1>
                    <p class="mt-3 max-w-xl text-gray-600 sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg">Instant PHP Platforms on DigitalOcean, Linode, and more. Featuring push-to-deploy, Redis, queues, and everything else you could need to launch and deploy impressive Laravel applications.</p>
                    <x-button.primary class="mt-6 sm:mt-8 md:mt-10" href="https://forge.laravel.com" target="_blank">
                        Learn More
                    </x-button.primary>
                </div>
            @endif
        </div>
    </div>

    <div class="max-w-screen-xl px-8 mx-auto">
        <h6 class="mx-auto text-center text-gray-600 font-medium text-lg">Revolutionize how you build the web.</h6>
        <h1 class="mx-auto mt-4 font-medium text-3xl tracking-tight text-center sm:text-4xl lg:text-5xl lg:leading-tight xl:text-5xl">The Laravel Ecosystem</h1>
        <ul class="mt-16 grid gap-6 relative sm:grid-cols-2 md:mt-24 md:grid-cols-3">
            <li>
                <a href="https://vapor.laravel.com" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-vapor flex items-center justify-center">
                        <img src="/img/ecosystem/vapor.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Vapor</div>
                        <span class="text-gray-600 text-xs">Serverless Platform</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://forge.laravel.com" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-forge flex items-center justify-center">
                        <img src="/img/ecosystem/forge.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Forge</div>
                        <span class="text-gray-600 text-xs">Server Management</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://envoyer.io" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-envoyer flex items-center justify-center">
                        <img src="/img/ecosystem/envoyer.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Envoyer</div>
                        <span class="text-gray-600 text-xs">Zero Downtime Deployment</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/horizon" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-horizon flex items-center justify-center">
                        <img src="/img/ecosystem/horizon.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Horizon</div>
                        <span class="text-gray-600 text-xs">Queue Monitoring</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://nova.laravel.com/" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-nova flex items-center justify-center">
                        <img src="/img/ecosystem/nova.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Nova</div>
                        <span class="text-gray-600 text-xs">Administration Panel</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/broadcasting" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-echo flex items-center justify-center">
                        <img src="/img/ecosystem/echo.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Echo</div>
                        <span class="text-gray-600 text-xs">Realtime Events</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://lumen.laravel.com" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-lumen flex items-center justify-center">
                        <img src="/img/ecosystem/lumen.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Lumen</div>
                        <span class="text-gray-600 text-xs">Micro-Framework</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/homestead" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-homestead flex items-center justify-center">
                        <img src="/img/ecosystem/homestead.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Homestead</div>
                    <span class="text-gray-600 text-xs">Pre-Packaged Vagrant Box</span>
                </div>
                </a>
            </li>
            <li>
                <a href="https://spark.laravel.com" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-spark flex items-center justify-center">
                        <img src="/img/ecosystem/spark.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Spark</div>
                        <span class="text-gray-600 text-xs">SaaS App Scaffolding</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/valet" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-valet flex items-center justify-center">
                        <img src="/img/ecosystem/valet.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Valet</div>
                        <span class="text-gray-600 text-xs">Dev Environment for Macs</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/mix" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-mix flex items-center justify-center">
                        <img src="/img/ecosystem/mix.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Mix</div>
                    <span class="text-gray-600 text-xs">Webpack Asset Compilation</span>
                </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/billing" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-cashier flex items-center justify-center">
                        <img src="/img/ecosystem/cashier.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Cashier</div>
                        <span class="text-gray-600 text-xs">Subscription Billing Integration</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/dusk" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-dusk flex items-center justify-center">
                        <img src="/img/ecosystem/dusk.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Dusk</div>
                        <span class="text-gray-600 text-xs">Browser Testing and Automation</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/passport" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-passport flex items-center justify-center">
                        <img src="/img/ecosystem/passport.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Passport</div>
                        <span class="text-gray-600 text-xs">Painless OAuth2 Implementation</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/scout" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-scout flex items-center justify-center">
                        <img src="/img/ecosystem/scout.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Scout</div>
                        <span class="text-gray-600 text-xs">Full-Text Search</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/socialite" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-socialite flex items-center justify-center">
                        <img src="/img/ecosystem/socialite.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Socialite</div>
                        <span class="text-gray-600 text-xs">OAuth Authentication</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/telescope" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-telescope flex items-center justify-center">
                        <img src="/img/ecosystem/telescope.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Telescope</div>
                        <span class="text-gray-600 text-xs">Debug Assistant</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://jetstream.laravel.com" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-jetstream flex items-center justify-center">
                        <img src="/img/ecosystem/jetstream.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Jetstream</div>
                        <span class="text-gray-600 text-xs">App Scaffolding</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <div class="py-16 overflow-hidden md:py-40 lg:py-64 xl:py-80">
        <div class="relative max-w-screen-xl mx-auto px-8 space-y-12 md:space-y-0 md:flex md:items-center">
            <div style="z-index: -9998; width: 120%" class="hidden md:transform md:translate-x-1/3 md:absolute md:inset-y-0 md:right-0 md:flex md:items-center">
                <video poster="/img/blocks/blocks_4.jpg" playsinline autoplay muted loop>
                    <source src="/img/blocks/blocks_4.mp4" type="video/mp4">
                </video>
            </div>
            <div class="md:w-1/2">
                <h6 class="text-gray-600 font-medium text-lg">Resources</h6>
                <h1 class="mt-2 max-w-md font-medium text-3xl tracking-tight sm:text-4xl md:mt-4 md:max-w-4xl md:text-5xl md:leading-tight xl:text-5xl">A community built<br class="md:hidden lg:inline"> for people like you</h1>
                <p class="mt-3 max-w-xl text-gray-600 sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg">Whether you’re a solo developer or a 20-person team, getting started is simple thanks to our great community.</p>
                <ul class="mt-6 max-w-md grid grid-cols-2 gap-4 text-gray-600 font-medium text-sm leading-4 list-custom sm:mt-8">
                    <li><a href="https://blog.laravel.com">Blog</a></li>
                    <li><a href="https://laracasts.com">Laracasts</a></li>
                    <!-- <li><a href="http://laravelpodcast.com/">Podcast</a></li> -->
                    <li><a href="https://laravel-news.com">Laravel News</a></li>
                    <li><a href="https://laracon.us/">Laracon</a></li>
                    <li><a href="https://larajobs.com/">Jobs</a></li>
                    <li><a href="https://laracon.eu/">Laracon EU</a></li>
                    <li><a href="https://laracasts.com/discuss">Forums</a></li>
                    <li><a href="https://laracon.com.au/">Laracon AU</a></li>
                    <li><a href="https://certification.laravel.com/">Certification</a></li>
                </ul>
            </div>

            <div class="pr-12 md:w-1/2 md:px-12">
                <div class="relative max-w-lg p-6 bg-white shadow-lg lg:p-16">
                    <div class="absolute right-0 transform translate-x-8 flex items-center justify-center w-16 h-16 bg-black sm:w-24 sm:h-24 md:w-16 md:h-16 lg:w-24 lg:h-24">
                        <img class="w-9 h-9 sm:w-14 sm:h-14 md:w-9 md:h-9 lg:w-14 lg:h-14" src="/img/icons/laracasts.min.svg" alt="Laracasts">
                    </div>
                    <h6 class="text-gray-600 font-medium text-sm">Featured Resource</h6>
                    <h3 class="mt-3 font-medium text-xl sm:mt-5 sm:text-2xl">Laracasts</h3>
                    <p class="mt-3 max-w-xs text-xs leading-5 text-gray-600 sm:mt-5 sm:text-base md:mt-8 md:leading-6 lg:max-w-sm">Nine out of ten doctors recommend Laracasts over competing brands. Check them out, see for yourself, and massively level up your development skills in the process.</p>
                    <x-button.secondary href="https://laracasts.com" class="mt-6">
                        Start Learning →
                    </x-button.secondary>
                </div>
            </div>
        </div>
    </div>
@stop
