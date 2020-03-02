<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ isset($title) ? $title . ' - ' : null }}Laravel - The PHP Framework For Web Artisans</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#ff2d20">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ff2d20">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Load fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/ins2wgm.css">

    <!-- Load styles -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">

    <!-- Load JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

</head>
<body class="language-php">

@yield('content')

<footer>
    <div class="footer_contain" style="padding-top: 0;">
        <div class="contain">
            <section class="partner_block">
                <div class="content">
                    <h2>Become a Laravel Partner</h2>
                    <p>Laravel Partners are elite shops providing top-notch Laravel development and consulting. Each of our partners can help you craft a beautiful, well-architected project.</p>
                </div>
                @if(request()->is('partners'))
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeOTE1G6zxSPbKdmQ59UKkL_Rja_ddAyG6Y6xxGdSGAWlNTFA/viewform?usp=sf_link" class="btn"><span>Become A Partner</span></a>
                @else
                <a href="/partners" class="btn"><span>Our Partners</span></a>
                @endif
            </section>
        </div>

        <div class="footer_bg">
            <div class="contain">
                <div class="footer_content">
                    <div class="logotype">
                        <img src="/img/logotype.min.svg" alt="Laravel">
                    </div>
                    <div class="search_box">

                    </div>
                </div>
                <div class="footer_content">
                    <div class="footer_nav">
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Highlights</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/releases">Release Notes</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/installation">Getting Started</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/routing">Routing</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/blade">Blade Templates</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/authentication">Authentication</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/authorization">Authorization</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/artisan">Artisan Console</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/database">Database</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/eloquent">Eloquent ORM</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/testing">Testing</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Resources</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="https://laracasts.com">Laracasts</a></li>
                                    <li><a href="https://laravel-news.com">Laravel News</a></li>
                                    <li><a href="https://laracon.us">Laracon</a></li>
                                    <li><a href="https://laracon.eu/">Laracon EU</a></li>
                                    <li><a href="https://laracon.com.au/">Laracon AU</a></li>
                                    <li><a href="https://larajobs.com">Jobs</a></li>
                                    <li><a href="https://certification.laravel.com/">Certification</a></li>
                                    <li><a href="https://laracasts.com/discuss">Forums</a></li>
                                    <!-- <li><a href="http://www.laravelpodcast.com/">Podcast</a></li> -->
                                    <!-- <li><a href="https://course.testdrivenlaravel.com/">Test-driven Laravel</a></li> -->
                                    <!-- <li><a href="https://statamic.com/">Statamic</a></li> -->
<!--                                     <li><a href="https://styleci.io/">StyleCI</a></li>
                                    <li><a href="https://cachethq.io/">Cachet</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Partners</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="https://vehikl.com">Vehikl</a></li>
                                    <li><a href="https://tighten.co">Tighten Co.</a></li>
                                    <li><a href="https://kirschbaumdevelopment.com/">Kirschbaum</a></li>
                                    <li><a href="https://www.byte5.net/">Byte 5</a></li>
                                    <li><a href="https://64robots.com/">64Robots</a></li>
                                    <li><a href="https://cubettech.com/">Cubet</a></li>
                                    <li><a href="https://devsquad.com/">DevSquad</a></li>
                                    <li><a href="https://www.ideil.com/">Ideil</a></li>
                                    <li><a href="https://www.cyber-duck.co.uk/how-we-work/technology/laravel?utm_source=Laravel%20Partner&utm_medium=Sponsorship">Cyber-Duck</a></li>
                                    <li><a href="https://corporate.aboutyou.de/app/uploads/2019/08/INTRO-Pitch-I-AY-Tech.pdf?utm_source=laravelpartnersfindoutmore&utm_medium=socialgroups&utm_campaign=tech">ABOUT YOU</a></li>
                                    <li><a href="https://www.a2design.biz/">A2 Design</a></li>
                                    <li><a href="https://romegadigital.com/">Romega Software</a></li>
                                    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeOTE1G6zxSPbKdmQ59UKkL_Rja_ddAyG6Y6xxGdSGAWlNTFA/viewform">Become A Partner</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Ecosystem</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="https://vapor.laravel.com">Vapor</a></li>
                                    <li><a href="https://forge.laravel.com">Forge</a></li>
                                    <li><a href="https://envoyer.io">Envoyer</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/horizon">Horizon</a></li>
                                    <li><a href="https://lumen.laravel.com">Lumen</a></li>
                                    <li><a href="https://nova.laravel.com">Nova</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/broadcasting">Echo</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/valet">Valet</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/mix">Mix</a></li>
                                    <li><a href="https://spark.laravel.com">Spark</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/billing">Cashier</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/homestead">Homestead</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/dusk">Dusk</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/passport">Passport</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/scout">Scout</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/socialite">Socialite</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/telescope">Telescope</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer_info">
                        <p class="small">Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.</p>
                        <p class="small copyright">Laravel is a Trademark of Taylor Otwell.<br>Copyright &copy; 2011-{{now()->format('Y')}} Laravel LLC.
                        </p>
                        <ul class="social_links">
                            <li><a href="https://twitter.com/laravelphp"><img src="/img/social/twitter.min.svg" alt="Twitter"></a>
                            </li>
                            <li><a href="https://github.com/laravel"><img src="/img/social/github.min.svg" alt="GitHub"></a>
                            </li>
                            <li><a href="https://discord.gg/mPZNm7A"><img src="/img/social/discord.min.svg" alt="Discord"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="/" class="logomark"><img src="/img/logomark.min.svg" alt="Laravel"></a>
    </div>
</footer>

<script>
    var algolia_app_id = '{{ config('algolia.connections.main.id', false) }}';
    var algolia_search_key = '{{ config('algolia.connections.main.search_key', false) }}';
    var version = '{{ isset($currentVersion) ? $currentVersion : DEFAULT_VERSION }}';
</script>

@include('partials.algolia_template')

<script src="{{ mix('js/app.js') }}"></script>

<script>
    var _gaq=[['_setAccount','UA-23865777-1'],['_trackPageview']];
    (function(d,t){
        var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)
    }(document,'script'));
</script>
</body>
</html>
