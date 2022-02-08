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

    $is_docs_page = request()->is('docs/*');
@endphp

<footer class="relative pt-12 {{ $is_docs_page ? 'dark:bg-dark-700' : '' }}">
    <div class="max-w-screen-2xl mx-auto w-full {{ $is_docs_page ? 'px-8' : 'px-5' }}">
        <div>
            <a href="/" class="inline-flex">
                <img class="w-16 h-16" src="/img/logomark.min.svg" alt="Laravel" loading="lazy">
            </a>
        </div>

        <div class="mt-6 grid grid-cols-12 gap-x-8 gap-y-12 sm:mt-12">
            <div class="col-span-12 lg:col-span-4">
                <p class="max-w-sm text-xs text-gray-700 sm:text-sm {{ $is_docs_page ? 'dark:text-gray-500' : '' }}">Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.</p>
                <ul class="mt-6 flex items-center space-x-3">
                    <li>
                        <a href="https://twitter.com/laravelphp">
                            <img id="footer__twitter_dark" class="{{ $is_docs_page ? 'hidden dark:inline-block' : 'hidden' }} w-6 h-6" src="/img/social/twitter.dark.min.svg" alt="Twitter" width="24" height="20" loading="lazy">
                            <img id="footer__twitter" class="{{ $is_docs_page ? 'inline-block dark:hidden' : 'inline-block' }} w-6 h-6" src="/img/social/twitter.min.svg" alt="Twitter" width="24" height="20" loading="lazy">
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/laravel">
                            <img id="footer__github_dark" class="{{ $is_docs_page ? 'hidden dark:inline-block' : 'hidden' }} w-6 h-6" src="/img/social/github.dark.min.svg" alt="GitHub" width="24" height="24" loading="lazy">
                            <img id="footer__github" class="{{ $is_docs_page ? 'inline-block dark:hidden' : 'inline-block' }} w-6 h-6" src="/img/social/github.min.svg" alt="GitHub" width="24" height="24" loading="lazy">
                        </a>
                    </li>
                    <li>
                        <a href="https://discord.gg/mPZNm7A">
                            <img id="footer__discord_dark" class="{{ $is_docs_page ? 'hidden dark:inline-block' : 'hidden' }} w-6 h-6" src="/img/social/discord.dark.min.svg" alt="Discord" width="21" height="24" loading="lazy">
                            <img id="footer__discord" class="{{ $is_docs_page ? 'inline-block dark:hidden' : 'inline-block' }} w-6 h-6" src="/img/social/discord.min.svg" alt="Discord" width="21" height="24" loading="lazy">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/laravelphp">
                            <img id="footer__youtube_dark" class="{{ $is_docs_page ? 'hidden dark:inline-block' : 'hidden' }} w-6 h-6" src="/img/social/youtube.dark.min.svg" alt="YouTube" width="169" height="150" loading="lazy">
                            <img id="footer__youtube" class="{{ $is_docs_page ? 'inline-block dark:hidden' : 'inline-block' }} w-6 h-6" src="/img/social/youtube.min.svg" alt="YouTube" width="169" height="150" loading="lazy">
                        </a>
                    </li>
                </ul>
            </div>
            @foreach ($links as $column)
                <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                    <span class="uppercase {{ $is_docs_page ? 'dark:text-gray-200' : '' }}">{{ $column['title'] }}</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 {{ $is_docs_page ? 'dark:text-gray-500' : '' }}">
                            @foreach ($column['links'] as $title => $href)
                                <li>
                                    <a href="{{ $href }}" class="transition-colors hover:text-gray-600 {{ $is_docs_page ? 'dark:hover:text-gray-400' : '' }}">{{ $title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-10 border-t pt-6 pb-16 border-gray-200 {{ $is_docs_page ? 'dark:border-dark-500' : '' }}">
            <p class="text-xs text-gray-700 {{ $is_docs_page ? 'dark:text-gray-400' : '' }}">
                Laravel is a Trademark of Taylor Otwell. Copyright &copy; 2011-{{ now()->format('Y') }} Laravel LLC.
            </p>
            <p class="mt-6 text-xs text-gray-700 {{ $is_docs_page ? 'dark:text-gray-400' : '' }}">
                Code highlighting provided by <a href="https://torchlight.dev">Torchlight</a>
            </p>
        </div>
    </div>
</footer>
