@php
    $links = [
        [
            'title' => 'Highlights',
            'links' => [
                'Our Team' => '/team',
                'Release Notes' => '/docs/' . DEFAULT_VERSION . '/releases',
                'Getting Started' => '/docs/' . DEFAULT_VERSION . '/installation',
                'Routing' => '/docs/' . DEFAULT_VERSION . '/routing',
                'Blade Templates' => '/docs/' . DEFAULT_VERSION . '/blade',
                'Authentication' => '/docs/' . DEFAULT_VERSION . '/authentication',
                'Authorization' => '/docs/' . DEFAULT_VERSION . '/authorization',
                'Artisan Console' => '/docs/' . DEFAULT_VERSION . '/artisan',
                'Database' => '/docs/' . DEFAULT_VERSION . '/database',
                'Eloquent ORM' => '/docs/' . DEFAULT_VERSION . '/eloquent',
                'Testing' => '/docs/' . DEFAULT_VERSION . '/testing',
            ],
        ],
        [
            'title' => 'Resources',
            'links' => [
                'Laracasts' => 'https://laracasts.com',
                'Laravel News' => 'https://laravel-news.com',
                'Laracon' => 'https://laracon.us',
                'Laracon EU' => 'https://laracon.eu/',
                // 'Laracon AU' => 'https://laracon.com.au/',
                'Jobs' => 'https://larajobs.com',
                'Certification' => 'https://certification.laravel.com/',
                'Forums' => 'https://laracasts.com/discuss',
            ],
        ],
        [
             'title' => 'Partners',
             'links' => [
                 'Vehikl' => 'https://vehikl.com',
                 'Tighten' => 'https://tighten.co',
                 '64 Robots' => 'https://64robots.com/',
                 'Kirschbaum' => 'https://kirschbaumdevelopment.com/',
                 'Curotec' => 'https://www.curotec.com/services/technologies/laravel/',
                 'Jump24' => 'https://jump24.co.uk/',
                 'A2 Design' => 'https://www.a2design.biz/',
                 'ABOUT YOU' => 'https://corporate.aboutyou.de/app/uploads/2019/08/INTRO-Pitch-I-AY-Tech.pdf?utm_source=laravelpartnersfindoutmore&utm_medium=socialgroups&utm_campaign=tech',
                 'Byte 5' => 'https://www.byte5.net/',
                 'Cubet' => 'https://cubettech.com/',
                 'Cyber-Duck' => 'https://www.cyber-duck.co.uk/how-we-work/technology/laravel?utm_source=Laravel%20Partner&utm_medium=Sponsorship',
                 'DevSquad' => 'https://devsquad.com/',
                 'Ideil' => 'https://www.ideil.com/',
                 'Romega Software' => 'https://romegadigital.com/',
                 'Worksome' => 'https://www.worksome.com/',
                 'WebReinvent' => 'https://webreinvent.com/?utm_source=laravel&utm_medium=laravel.com&utm_campaign=patreon-sponsors',
             ]
         ],
        [
            'title' => 'Ecosystem',
            'links' => [
                'Cashier' => '/docs/' . DEFAULT_VERSION . '/billing',
                'Dusk' => '/docs/' . DEFAULT_VERSION . '/dusk',
                'Echo' => '/docs/' . DEFAULT_VERSION . '/broadcasting',
                'Envoyer' => 'https://envoyer.io',
                'Forge' => 'https://forge.laravel.com',
                'Homestead' => '/docs/' . DEFAULT_VERSION . '/homestead',
                'Horizon' => '/docs/' . DEFAULT_VERSION . '/horizon',
                'Lumen' => 'https://lumen.laravel.com',
                'Mix' => '/docs/' . DEFAULT_VERSION . '/mix',
                'Nova' => 'https://nova.laravel.com',
                'Passport' => '/docs/' . DEFAULT_VERSION . '/passport',
                'Scout' => '/docs/' . DEFAULT_VERSION . '/scout',
                'Socialite' => '/docs/' . DEFAULT_VERSION . '/socialite',
                'Spark' => 'https://spark.laravel.com',
                'Telescope' => '/docs/' . DEFAULT_VERSION . '/telescope',
                'Valet' => '/docs/' . DEFAULT_VERSION . '/valet',
                'Vapor' => 'https://vapor.laravel.com',
            ],
        ],
    ];

    $is_dark = request()->is('docs/*');
@endphp

<footer class="relative z-30 {{ $is_dark ? 'dark:bg-dark-700' : '' }}">
    <div class="relative z-20 overflow-x-hidden">
        <div class="relative max-w-screen-2xl mx-auto sm:px-8">
            <div class="absolute inset-0 flex flex-col px-4 lg:px-12 xl:px-16">
                <div class="flex-1"></div>
                <div class="flex-1 bg-gray-100 {{ $is_dark ? 'dark:bg-dark-900' : '' }}"></div>
            </div>
            <div class="relative max-w-screen-xl mx-auto px-8">
                <section class="relative z-10 p-6 bg-white shadow-lg md:flex md:items-center md:p-12 lg:p-16 {{ $is_dark ? 'dark:bg-dark-600' : '' }}">
                    <div class="content md:pr-12">
                        <h2 class="text-3xl tracking-tight sm:text-4xl md:mt-4 xl:text-5xl {{ $is_dark ? 'dark:text-gray-200' : '' }}">Become a Laravel Partner</h2>
                        <p class="mt-3 max-w-xl text-gray-600 sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg {{ $is_dark ? 'dark:text-gray-400' : '' }}">Laravel Partners are elite shops providing top-notch Laravel development and consulting. Each of our partners can help you craft a beautiful, well-architected project.</p>
                    </div>
                    @if(request()->is('partners'))
                        <x-button.primary href="https://docs.google.com/forms/d/e/1FAIpQLSeOTE1G6zxSPbKdmQ59UKkL_Rja_ddAyG6Y6xxGdSGAWlNTFA/viewform?usp=sf_link" class="mt-6">
                            Become A Partner
                        </x-button.primary>
                    @else
                        <x-button.primary href="/partners" class="mt-8">
                            Our Partners
                        </x-button.primary>
                    @endif
                </section>
            </div>
        </div>

        <div class="max-w-screen-2xl mx-auto px-4 lg:px-12 xl:px-16">
            <div class="px-8 pb-12 bg-gray-100 xl:px-20 {{ $is_dark ? 'dark:bg-dark-900' : '' }}">
                <div>
                    <img class="-mt-2 max-w-4xl w-full transform -translate-x-12 lg:-translate-x-24 xl:-translate-x-40" src="/img/logotype.min.svg" alt="Laravel" width="114" height="29" loading="lazy">
                </div>
                <div class="mt-6 sm:mt-12 md:flex">
                    <div class="divide-y divide-gray-600 divide-opacity-25 sm:hidden">
                        @foreach ($links as $column)
                            <div
                                x-data="{ expanded: false }"
                                class="py-4"
                            >
                                <button class="-mx-2 px-2 w-full flex items-center justify-between py-2 font-bold {{ $is_dark ? 'dark:text-gray-200' : '' }}" @click="expanded = ! expanded">
                                    <span>{{ $column['title'] }}</span>
                                    <span class="transform transition-transform" :class="{ 'rotate-45': expanded }">&plus;</span>
                                </button>
                                <div
                                    x-show="expanded"
                                    x-cloak
                                    class="py-2 transition transform"
                                    x-transition:enter="duration-250 ease-out"
                                    x-transition:enter-start="opacity-0 -translate-y-8"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="duration-250 ease-in"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0 -translate-y-8"
                                >
                                    <ul class="space-y-2 text-gray-600 text-sm {{ $is_dark ? 'dark:text-gray-500' : '' }}">
                                        @foreach ($column['links'] as $title => $href)
                                            <li><a href="{{ $href }}">{{ $title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="hidden sm:grid sm:grid-cols-2 sm:gap-x-4 sm:gap-y-8 md:w-1/2 lg:w-3/4 lg:grid-cols-4">
                        @foreach ($links as $column)
                            <div>
                                <span class="font-bold {{ $is_dark ? 'dark:text-gray-200' : '' }}">{{ $column['title'] }}</span>
                                <div class="mt-6">
                                    <ul class="space-y-3 text-gray-600 text-sm {{ $is_dark ? 'dark:text-gray-500' : '' }}">
                                        @foreach ($column['links'] as $title => $href)
                                            <li>
                                                <a href="{{ $href }}" class="transition-colors hover:text-gray-700 {{ $is_dark ? 'dark:hover:text-gray-400' : '' }}">{{ $title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-10 max-w-md md:mt-0 md:w-1/2 lg:w-1/4">
                        <p class="text-xs text-gray-600 sm:text-sm {{ $is_dark ? 'dark:text-gray-500' : '' }}">Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.</p>
                        <p class="mt-6 text-xs text-gray-600 text-opacity-75 sm:text-sm {{ $is_dark ? 'dark:text-gray-500' : '' }}">
                            Laravel is a Trademark of Taylor Otwell.<br>Copyright &copy; 2011-{{now()->format('Y')}} Laravel LLC.
                        </p>
                        <ul class="mt-6 flex items-center space-x-3">
                            <li>
                                <a href="https://twitter.com/laravelphp">
                                    <img id="footer__twitter" class="w-6 h-6" src="/img/social/twitter.min.svg" alt="Twitter" width="24" height="20" loading="lazy">
                                    <img id="footer__twitter_dark" class="w-6 h-6" src="/img/social/twitter.dark.min.svg" alt="Twitter" width="24" height="20" loading="lazy">
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/laravel">
                                    <img id="footer__github" class="w-6 h-6" src="/img/social/github.min.svg" alt="GitHub" width="24" height="24" loading="lazy">
                                    <img id="footer__github_dark" class="w-6 h-6" src="/img/social/github.dark.min.svg" alt="GitHub" width="24" height="24" loading="lazy">
                                </a>
                            </li>
                            <li>
                                <a href="https://discord.gg/mPZNm7A">
                                    <img id="footer__discord" class="w-6 h-6" src="/img/social/discord.min.svg" alt="Discord" width="21" height="24" loading="lazy">
                                    <img id="footer__discord_dark" class="w-6 h-6" src="/img/social/discord.dark.min.svg" alt="Discord" width="21" height="24" loading="lazy">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/laravelphp">
                                    <img id="footer__youtube" class="w-6 h-6" src="/img/social/youtube.min.svg" alt="YouTube" width="169" height="150" loading="lazy">
                                    <img id="footer__youtube_dark" class="w-6 h-6" src="/img/social/youtube.dark.min.svg" alt="YouTube" width="169" height="150" loading="lazy">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center py-6">
            <a href="/" class="logomark">
                <img class="w-9 h-9" src="/img/logomark.min.svg" alt="Laravel" width="50" height="52" loading="lazy">
            </a>
        </div>
    </div>
</footer>
