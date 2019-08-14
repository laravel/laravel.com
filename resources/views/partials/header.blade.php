<header class="main">
    <div class="contain">
        <div class="header_content">
            <a href="/" class="logo">
                <img class="mark" src="/img/logomark.min.svg" alt="Laravel">
                <img class="type" src="/img/logotype.min.svg" alt="Laravel">
            </a>
            <nav class="main">
                <div class="nav_contain">
                    <ul>
                        <li class="docs_link"><a href="/docs">Documentation</a></li>
                        @if (SHOW_VAPOR)
                            <li class="forge_link"><a href="https://vapor.laravel.com">Vapor</a></li>
                        @else
                            <li class="forge_link"><a href="https://forge.laravel.com">Forge</a></li>
                        @endif
                        <li>
                            <a href="#" class="drop_trigger">Ecosystem<span class="arrow"><img src="/img/icons/nav_arrow.min.svg" alt="Expand"></span></a>
                            <div class="drop_contain">
                                <ul class="ecosystem">
                                    <li class="sys_vapor">
                                        <a href="https://forge.laravel.com">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/vapor.min.svg" alt="Icon"></div>
                                            <div class="system_info">Vapor <span>Serverless Platform</span></div>
                                        </a>
                                    </li>
                                    <li class="sys_forge">
                                        <a href="https://forge.laravel.com">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/forge.min.svg" alt="Icon"></div>
                                            <div class="system_info">Forge <span>Server Management</span></div>
                                        </a>
                                    </li>
                                    <li class="sys_envoyer">
                                        <a href="https://envoyer.io">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/envoyer.min.svg" alt="Icon">
                                            </div>
                                            <div class="system_info">Envoyer <span>Zero Downtime Deployment</span></div>
                                        </a>
                                    </li>
                                    <li class="sys_horizon">
                                        <a href="https://horizon.laravel.com/">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/horizon.min.svg" alt="Icon">
                                            </div>
                                            <div class="system_info">Horizon <span>Queue Monitoring</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sys_nova">
                                        <a href="https://nova.laravel.com/">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/nova.min.svg" alt="Icon"></div>
                                            <div class="system_info">Nova <span>Administration Panel</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sys_echo">
                                        <a href="/docs/{{DEFAULT_VERSION}}/broadcasting">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/echo.min.svg" alt="Icon"></div>
                                            <div class="system_info">Echo <span>Realtime Events</span></div>
                                        </a>
                                    </li>
                                    <li class="sys_lumen">
                                        <a href="https://lumen.laravel.com">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/lumen.min.svg" alt="Icon"></div>
                                            <div class="system_info">Lumen <span>Micro-Framework</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sys_homestead">
                                        <a href="/docs/{{DEFAULT_VERSION}}/homestead">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/homestead.min.svg" alt="Icon">
                                            </div>
                                            <div class="system_info">Homestead
                                                <span>Pre-Packaged Vagrant Box</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sys_spark">
                                        <a href="https://spark.laravel.com">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/spark.min.svg" alt="Icon"></div>
                                            <div class="system_info">Spark <span>SaaS App Scaffolding</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sys_valet">
                                        <a href="/docs/{{DEFAULT_VERSION}}/valet">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/valet.min.svg" alt="Icon"></div>
                                            <div class="system_info">Valet
                                                <span>Dev Environment for Macs</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sys_mix">
                                        <a href="/docs/{{DEFAULT_VERSION}}/mix">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/mix.min.svg" alt="Icon"></div>
                                            <div class="system_info">Mix
                                                <span>Webpack Asset Compilation</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sys_cashier">
                                        <a href="/docs/{{DEFAULT_VERSION}}/billing">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/cashier.min.svg" alt="Icon">
                                            </div>
                                            <div class="system_info">Cashier
                                                <span>Subscription Billing Integration</span></div>
                                        </a>
                                    </li>
                                    <li class="sys_dusk">
                                        <a href="/docs/{{DEFAULT_VERSION}}/dusk">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/dusk.min.svg" alt="Icon"></div>
                                            <div class="system_info">Dusk
                                                <span>Browser Testing and Automation</span></div>
                                        </a>
                                    </li>
                                    <li class="sys_passport">
                                        <a href="/docs/{{DEFAULT_VERSION}}/passport">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/passport.min.svg" alt="Icon">
                                            </div>
                                            <div class="system_info">Passport
                                                <span>Painless OAuth2 Implementation</span></div>
                                        </a>
                                    </li>
                                    <li class="sys_scout">
                                        <a href="/docs/{{DEFAULT_VERSION}}/scout">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/scout.min.svg" alt="Icon"></div>
                                            <div class="system_info">Scout <span>Full-Text Search</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sys_socialite">
                                        <a href="/docs/{{DEFAULT_VERSION}}/socialite">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/socialite.min.svg" alt="Icon">
                                            </div>
                                            <div class="system_info">Socialite
                                                <span>OAuth Authentication</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sys_telescope">
                                        <a href="/docs/{{DEFAULT_VERSION}}/telescope">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/telescope.min.svg" alt="Icon">
                                            </div>
                                            <div class="system_info">Telescope <span>Debug Assistant</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sys_tinker">
                                        <a href="https://github.com/laravel/tinker">
                                            <div class="system_icon">
                                                <img src="/img/ecosystem/tinker.min.svg" alt="Icon"></div>
                                            <div class="system_info">Tinker <span>Interactive REPL</span></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="resources_link"><a href="https://laravel-news.com">News</a></li>
                        <li class="partners_link"><a href="/partners">Partners</a></li>
                    </ul>
                </div>
            </nav>
            <div class="search_box">
                <div class="input_group search icon">
                    <input type="text" class="search_input" id="search-docs-input" placeholder="Search Docs">
                    <input type="submit" class="search_submit icon_display">
                </div>
            </div>
            <div class="trigger_contain">
                <a href="#" class="nav_trigger">
                    <div class="bar"></div>
                </a>
            </div>
        </div>
    </div>
</header>
