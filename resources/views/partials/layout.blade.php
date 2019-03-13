<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ isset($title) ? $title . ' - ' : null }}Laravel - The PHP Framework For Web Artisans</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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
    <link rel="stylesheet" type="text/css" href="/css/app.css">

    <!-- Load JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

</head>
<body class="language-php">

@yield('content')

<footer>
    <div class="footer_contain">
        <div class="contain">
            <section class="partner_block">
                <div class="content">
                    <h2>Become a Laravel Partner</h2>
                    <p>Laravel Partners are elite shops providing top-notch Laravel development and consulting. Each of our partners can help you craft a beautiful, well-architected project.</p>
                </div>
                <a href="#" class="btn"><span>Our Partners</span></a>
            </section>
        </div>

        <div class="footer_bg">
            <div class="contain">
                <div class="footer_content">
                    <div class="logotype">
                        <img src="/img/logotype.min.svg" alt="Laravel">
                    </div>
                    <div class="search_box">
                        <div class="input_group search icon">
                            <input type="search" placeholder="Search Docs">
                            <input type="submit" class="search_submit icon_display">
                        </div>
                    </div>
                </div>
                <div class="footer_content">
                    <div class="footer_nav">
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Documentation</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="#">Prologue</a></li>
                                    <li><a href="#">Getting Started</a></li>
                                    <li><a href="#">Architecture Concepts</a></li>
                                    <li><a href="#">The Basics</a></li>
                                    <li><a href="#">Frontend</a></li>
                                    <li><a href="#">Security</a></li>
                                    <li><a href="#">Digging Deeper</a></li>
                                    <li><a href="#">Database</a></li>
                                    <li><a href="#">Eloquent ORM</a></li>
                                    <li><a href="#">Testing</a></li>
                                    <li><a href="#">Official Packages</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Resources</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="#">Laracasts</a></li>
                                    <li><a href="#">Laravel News</a></li>
                                    <li><a href="#">LaraJobs</a></li>
                                    <li><a href="#">Laracon</a></li>
                                    <li><a href="#">Certification</a></li>
                                    <li><a href="#">Forums</a></li>
                                    <li><a href="#">Podcast</a></li>
                                    <li><a href="#">Test-driven Laravel</a></li>
                                    <li><a href="#">Statamic</a></li>
                                    <li><a href="#">StyleCI</a></li>
                                    <li><a href="#">Cachet</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Partners</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="#">Vehikl</a></li>
                                    <li><a href="#">Tighten Co.</a></li>
                                    <li><a href="#">Kirschbaum</a></li>
                                    <li><a href="#">Byte 5</a></li>
                                    <li><a href="#">64Robots</a></li>
                                    <li><a href="#">Cubet</a></li>
                                    <li><a href="#">DevSquad</a></li>
                                    <li><a href="#">Ideil</a></li>
                                    <li><a href="#">Cyber-duck</a></li>
                                    <li><a href="#">Become A Partner</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Ecosystem</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="#">Forge</a></li>
                                    <li><a href="#">Envoyer</a></li>
                                    <li><a href="#">Horizon</a></li>
                                    <li><a href="#">Lumen</a></li>
                                    <li><a href="#">Nova</a></li>
                                    <li><a href="#">Echo</a></li>
                                    <li><a href="#">Valet</a></li>
                                    <li><a href="#">Mix</a></li>
                                    <li><a href="#">Spark</a></li>
                                    <li><a href="#">Cashier</a></li>
                                    <li><a href="#">Homestead</a></li>
                                    <li><a href="#">Dusk</a></li>
                                    <li><a href="#">Passport</a></li>
                                    <li><a href="#">Scout</a></li>
                                    <li><a href="#">Socialite</a></li>
                                    <li><a href="#">Telescope</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer_info">
                        <p class="small">Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.</p>
                        <p class="small copyright">Laravel is a Trademark of Taylor Otwell.<br>Copyright &copy;2011-2018 Taylor Otwell.
                        </p>
                        <ul class="social_links">
                            <li><a href="#"><img src="/img/social/twitter.min.svg" alt="Twitter"></a>
                            </li>
                            <li><a href="#"><img src="/img/social/github.min.svg" alt="GitHub"></a>
                            </li>
                            <li><a href="#"><img src="/img/social/discord.min.svg" alt="Discord"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="logomark"><img src="/img/logomark.min.svg" alt="Laravel"></a>
    </div>
</footer>

<script>
    var algolia_app_id = '{{ config('algolia.connections.main.id', false) }}';
    var algolia_search_key = '{{ config('algolia.connections.main.key', false) }}';
    var version = '{{ isset($currentVersion) ? $currentVersion : DEFAULT_VERSION }}';
</script>

@include('partials.algolia_template')

<script src="/js/app.js"></script>
</body>
</html>