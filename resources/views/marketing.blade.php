@extends('partials.layout')

@section('content')
    @include('partials.header')

    <div class="home standard_layout">

        <div class="remodal-bg">

            <div class="content_contain">
                <div class="page_contain">
                    <div class="banner">
                        <a href="https://nova.laravel.com/">
                            <div class="banner_icon icon_nova">
                                <img src="/img/ecosystem/nova.min.svg" alt="Nova">
                            </div>
                            <div class="banner_content">
                                <p class="small">Laravel Nova is now available! Get your copy today!
                                    <span class="arrow">→</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="contain">
                        <section class="hero">
                            <div class="hero_bg">
                                <video poster="/img/hero/hero_poster.jpg" playsinline autoplay muted loop>
                                    <source src="/img/hero/hero.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="hero_content">
                                <h1>The PHP Framework for Creative Programmers</h1>
                                <p>Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>
                                <div class="hero_actions">
                                    <a href="/docs" class="btn"><span>View docs</span></a>
                                    <a href="#" data-remodal-target="video_modal" class="btn secondary"><span><img src="/img/icons/play.min.svg" alt="Play Video"><span>Watch installation</span></span></a>

                                    <div data-remodal-id="video_modal" class="video_modal remodal">
                                        <div class="video_contain">
                                            <button data-remodal-action="close" class="remodal-close"></button>
                                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" type="text/html" src="https://www.youtube.com/embed/cAGQGXtBvs4?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <ul class="logos_list">
                        <li><img src="/img/logos/wwe.min.svg" alt="WWE"></li>
                        <li><img src="/img/logos/discovery.min.svg" alt="Discovery"></li>
                        <li><img src="/img/logos/mcdonalds.min.svg" alt="McDonalds"></li>
                        <!-- <li><img src="/img/logos/apple.min.svg" alt="Apple"></li> -->
                        <li><img src="/img/logos/fox.min.svg" alt="20th Century Fox"></li>
                        <li><img src="/img/logos/mcgraw_hill.min.svg" alt="McGraw Hill"></li>
                    </ul>
                    <div class="contain">
                        <div class="content_block img_left">
                            <div class="bg">
                                <video poster="/img/blocks/blocks_3.jpg" playsinline autoplay muted loop>
                                    <source src="/img/blocks/blocks_3.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="image">
                                <img src="/img/homepage/forge.jpg" alt="Forge">
                            </div>
                            <div class="content">
                                <h6>Push-button Deployment</h6>
                                <h1>Laravel Forge</h1>
                                <p>Instant PHP Platforms on Linode, DigitalOcean, and more. Featuring Push-To-Deploy, HHVM, queues, and everything else you could need to launch and deploy impressive Laravel applications.</p>
                                <a href="https://forge.laravel.com" class="btn"><span>Get Forge</span></a>
                            </div>
                        </div>

                        <div class="ecosystem_block">
                            <div class="heading">
                                <h6>Revolutionize how you build the web.</h6>
                                <h1>The Laravel Ecosystem</h1>
                            </div>
                            <ul class="ecosystem">
                                <li class="sys_forge">
                                    <a href="https://forge.laravel.com">
                                        <div class="system_icon"><img src="/img/ecosystem/forge.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Forge <span>Deployment</span></div>
                                    </a>
                                </li>
                                <li class="sys_envoyer">
                                    <a href="https://envoyer.io">
                                        <div class="system_icon"><img src="/img/ecosystem/envoyer.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Envoyer <span>Deployment</span></div>
                                    </a>
                                </li>
                                <li class="sys_horizon">
                                    <a href="https://horizon.laravel.com">
                                        <div class="system_icon"><img src="/img/ecosystem/horizon.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Horizon <span>Queue Monitoring</span></div>
                                    </a>
                                </li>
                                <li class="sys_nova">
                                    <a href="https://nova.laravel.com">
                                        <div class="system_icon"><img src="/img/ecosystem/nova.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Nova <span>Administration Panel</span></div>
                                    </a>
                                </li>
                                <li class="sys_echo">
                                    <a href="/docs/{{DEFAULT_VERSION}}/broadcasting">
                                        <div class="system_icon"><img src="/img/ecosystem/echo.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Echo <span>Event Listener</span></div>
                                    </a>
                                </li>
                                <li class="sys_lumen">
                                    <a href="https://lumen.laravel.com">
                                        <div class="system_icon"><img src="/img/ecosystem/lumen.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Lumen <span>Micro Framework</span></div>
                                    </a>
                                </li>
                                <li class="sys_homestead">
                                    <a href="/docs/{{DEFAULT_VERSION}}/homestead">
                                        <div class="system_icon">
                                            <img src="/img/ecosystem/homestead.min.svg" alt="Icon"></div>
                                        <div class="system_info">Homestead <span>Pre-Packaged Vagrant Box</span></div>
                                    </a>
                                </li>
                                <li class="sys_spark">
                                    <a href="https://spark.laravel.com">
                                        <div class="system_icon"><img src="/img/ecosystem/spark.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Spark <span>SaaS App Scaffolding</span></div>
                                    </a>
                                </li>
                                <li class="sys_valet">
                                    <a href="/docs/{{DEFAULT_VERSION}}/valet">
                                        <div class="system_icon"><img src="/img/ecosystem/valet.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Valet <span>Dev Environment for Macs</span></div>
                                    </a>
                                </li>
                                <li class="sys_mix">
                                    <a href="/docs/{{DEFAULT_VERSION}}/mix">
                                        <div class="system_icon"><img src="/img/ecosystem/mix.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Mix <span>Webpack and Asset Compilation</span></div>
                                    </a>
                                </li>
                                <li class="sys_cashier">
                                    <a href="/docs/{{DEFAULT_VERSION}}/billing">
                                        <div class="system_icon"><img src="/img/ecosystem/cashier.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Cashier <span>Subscription Billing Integration</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="sys_dusk">
                                    <a href="/docs/{{DEFAULT_VERSION}}/dusk">
                                        <div class="system_icon"><img src="/img/ecosystem/dusk.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Dusk <span>Browser Testing and Automation API</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="sys_passport">
                                    <a href="/docs/{{DEFAULT_VERSION}}/passport">
                                        <div class="system_icon">
                                            <img src="/img/ecosystem/passport.min.svg" alt="Icon"></div>
                                        <div class="system_info">Passport <span>Fast OAuth2 Implementation</span></div>
                                    </a>
                                </li>
                                <li class="sys_scout">
                                    <a href="/docs/{{DEFAULT_VERSION}}/scout">
                                        <div class="system_icon"><img src="/img/ecosystem/scout.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Scout <span>Full-Text Search</span></div>
                                    </a>
                                </li>
                                <li class="sys_socialite">
                                    <a href="/docs/{{DEFAULT_VERSION}}/socialite">
                                        <div class="system_icon">
                                            <img src="/img/ecosystem/socialite.min.svg" alt="Icon"></div>
                                        <div class="system_info">Socialite <span>OAuth Authentication</span></div>
                                    </a>
                                </li>
                                <li class="sys_telescope">
                                    <a href="/docs/{{DEFAULT_VERSION}}/telescope">
                                        <div class="system_icon">
                                            <img src="/img/ecosystem/telescope.min.svg" alt="Icon"></div>
                                        <div class="system_info">Telescope <span>Debug Assistant</span></div>
                                    </a>
                                </li>
                                <li class="sys_tinker">
                                    <a href="https://github.com/laravel/tinker">
                                        <div class="system_icon"><img src="/img/ecosystem/tinker.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Tinker <span>REPL</span></div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="content_block bg_right resources">
                            <div class="content">
                                <h6>Resources</h6>
                                <h1>A community built for people like you</h1>
                                <p>Whether you’re a solo developer or a 20-person team, getting started is simple thanks to our great community.</p>
                                <ul class="resource_list">
                                    <li><a href="https://laracasts.com">Laracasts</a></li>
                                    <li><a href="http://laravelpodcast.com/">Podcast</a></li>
                                    <li><a href="https://laravel-news.com">Laravel News</a></li>
                                    <li><a href="https://certification.laravel.com/">Certification</a></li>
                                    <li><a href="https://larajobs.com/">Larajobs</a></li>
                                    <li><a href="https://laracasts.com/discuss">Forums</a></li>
                                    <li><a href="https://laracon.us/">Laracon</a></li>
                                </ul>
                                <a href="#" class="btn"><span>Learn more</span></a>
                            </div>

                            <div class="featured_resource">
                                <div class="resource_icon">
                                    <img src="/img/icons/laracasts.min.svg" alt="Laracasts">
                                </div>
                                <h6>Featured Resource</h6>
                                <h3>Laracasts</h3>
                                <p class="small">Nine out of ten doctors recommend Laracasts over competing brands. Check them out, see for yourself, and massively level up your development skills in the process.</p>
                                <a href="https://laracasts.com" class="btn secondary"><span>Start learning →</span></a>
                            </div>
                            <div class="bg">
                                <video poster="/img/blocks/blocks_4.jpg" playsinline autoplay muted loop>
                                    <source src="/img/blocks/blocks_4.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
