@extends('partials.layout')

@section('content')
    <div class="sidebar_layout">

        <div class="page_contain">
            <div class="contain">
                <aside class="sidebar">
                    <a href="#" class="logo">
                        <img class="mark" src="/img/logomark.min.svg" alt="Laravel">
                        <img class="type" src="/img/logotype.min.svg" alt="Laravel">
                    </a>
                    <nav>
                        <div class="navigation_contain">
                            <ul>
                                <li>
                                    <a href="#" class="sub_nav_trigger">Prologue</a>
                                    <ul>
                                        <li><a href="#">Release Notes</a></li>
                                        <li><a href="#">Upgrade Guide</a></li>
                                        <li><a href="#">Contribution Guide</a></li>
                                        <li><a href="#">API Documentation</a></li>
                                    </ul>
                                </li>
                                <li class="sub--on">
                                    <a href="#" class="sub_nav_trigger">Getting Started</a>
                                    <ul>
                                        <li class="active"><a href="#">Installation</a></li>
                                        <li><a href="#">Configuration</a></li>
                                        <li><a href="#">Directory Structure</a></li>
                                        <li><a href="#">Homestead</a></li>
                                        <li><a href="#">Valet</a></li>
                                        <li><a href="#">Deployment</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sub_nav_trigger">Architecture Concepts</a>
                                    <ul>
                                        <li><a href="#">Request Lifecycle</a></li>
                                        <li><a href="#">Service Container</a></li>
                                        <li><a href="#">Service Providers</a></li>
                                        <li><a href="#">Facades</a></li>
                                        <li><a href="#">Contracts</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sub_nav_trigger">The Basics</a>
                                    <ul>
                                        <li><a href="#">Routing</a></li>
                                        <li><a href="#">Middleware</a></li>
                                        <li><a href="#">CSRF Protection</a></li>
                                        <li><a href="#">Controllers</a></li>
                                        <li><a href="#">Requests</a></li>
                                        <li><a href="#">Responses</a></li>
                                        <li><a href="#">Views</a></li>
                                        <li><a href="#">URL Generation</a></li>
                                        <li><a href="#">Session</a></li>
                                        <li><a href="#">Validation</a></li>
                                        <li><a href="#">Error Handling</a></li>
                                        <li><a href="#">Logging</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sub_nav_trigger">Frontend</a>
                                    <ul>
                                        <li><a href="#">Blade Templates</a></li>
                                        <li><a href="#">Localization</a></li>
                                        <li><a href="#">Frontend Scaffolding</a></li>
                                        <li><a href="#">Compiling Assets</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sub_nav_trigger">Security</a>
                                    <ul>
                                        <li><a href="#">Authentication</a></li>
                                        <li><a href="#">API Authentication</a></li>
                                        <li><a href="#">Authorization</a></li>
                                        <li><a href="#">Email Verification</a></li>
                                        <li><a href="#">Encryption</a></li>
                                        <li><a href="#">Hashing</a></li>
                                        <li><a href="#">Password Reset</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sub_nav_trigger">Digging Deeper</a>
                                    <ul>
                                        <li><a href="#">Artisan Console</a></li>
                                        <li><a href="#">Broadcasting</a></li>
                                        <li><a href="#">Cache</a></li>
                                        <li><a href="#">Collections</a></li>
                                        <li><a href="#">Events</a></li>
                                        <li><a href="#">File Storage</a></li>
                                        <li><a href="#">Helpers</a></li>
                                        <li><a href="#">Mail</a></li>
                                        <li><a href="#">Notifications</a></li>
                                        <li><a href="#">Package Development</a></li>
                                        <li><a href="#">Queues</a></li>
                                        <li><a href="#">Task Scheduling</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sub_nav_trigger">Database</a>
                                    <ul>
                                        <li><a href="#">Getting Started</a></li>
                                        <li><a href="#">Query Builder</a></li>
                                        <li><a href="#">Pagination</a></li>
                                        <li><a href="#">Migrations</a></li>
                                        <li><a href="#">Seeding</a></li>
                                        <li><a href="#">Redis</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sub_nav_trigger">Eloquent ORM</a>
                                    <ul>
                                        <li><a href="#">Getting Started</a></li>
                                        <li><a href="#">Relationships</a></li>
                                        <li><a href="#">Collections</a></li>
                                        <li><a href="#">Mutators</a></li>
                                        <li><a href="#">API Resources</a></li>
                                        <li><a href="#">Serialization</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sub_nav_trigger">Testing</a>
                                    <ul>
                                        <li><a href="#">Getting Started</a></li>
                                        <li><a href="#">HTTP Tests</a></li>
                                        <li><a href="#">Console Tests</a></li>
                                        <li><a href="#">Browser Tests</a></li>
                                        <li><a href="#">Database</a></li>
                                        <li><a href="#">Mocking</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sub_nav_trigger">Official Packages</a>
                                    <ul>
                                        <li><a href="#">Cashier</a></li>
                                        <li><a href="#">Dusk</a></li>
                                        <li><a href="#">Envoy</a></li>
                                        <li><a href="#">Horizon</a></li>
                                        <li><a href="#">Passport</a></li>
                                        <li><a href="#">Scout</a></li>
                                        <li><a href="#">Socialite</a></li>
                                        <li><a href="#">Telescope</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <div id="carbonads"><span><span class="carbon-wrap"><a href="//srv.carbonads.net/ads/click/x/GTND42QWFTSDE2QUCA74YKQMCEADKKJWCWSDEZ3JCWBDE2Q7CVYI523KC6BIV53UCTAI6K3EHJNCLSIZ?segment=placement:laravelcom;" class="carbon-img" target="_blank" rel="noopener"><img src="https://cdn4.buysellads.net/uu/1/41312/1547165213-HS1.png" alt="" border="0" height="100" width="130" style="max-width: 130px;"></a><a href="//srv.carbonads.net/ads/click/x/GTND42QWFTSDE2QUCA74YKQMCEADKKJWCWSDEZ3JCWBDE2Q7CVYI523KC6BIV53UCTAI6K3EHJNCLSIZ?segment=placement:laravelcom;" class="carbon-text" target="_blank" rel="noopener">HelloSign: The Simple, Secure, Send in Seconds eSignature. Try it free today.</a></span><a href="http://carbonads.net/?utm_source=laravelcom&amp;utm_medium=ad_via_link&amp;utm_campaign=in_unit&amp;utm_term=carbon" class="carbon-poweredby" target="_blank" rel="noopener">ads via Carbon</a></span></div>

                        </div>
                    </nav>
                    <div class="trigger_contain">
                        <a href="#" class="nav_trigger"><div class="bar"></div></a>
                    </div>
                </aside>

                <section class="body_content">
                    <header class="docs_actions">
                        <div class="version_drop">
                            <div class="input_group">
                                <label>Version</label>
                                <div class="custom_select">
                                    <select>
                                        <option>Master</option>
                                        <option>5.7</option>
                                        <option>5.6</option>
                                        <option>5.5</option>
                                        <option>5.4</option>
                                        <option>5.3</option>
                                        <option>5.2</option>
                                        <option>5.1</option>
                                        <option>5.0</option>
                                        <option>4.2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="search_contain">
                            <div class="input_group search icon">
                                <input type="text" placeholder="Search Docs">
                                <input type="submit" class="search_submit icon_display">
                            </div>
                        </div>
                    </header>
                    <section class="docs_body">
                        <nav class="docs_nav">
                            <h1 class="page_title">Installation</h1>
                            <ul>
                                <li>
                                    <a href="#installation">Installation</a>
                                    <ul>
                                        <li><a href="#requirements">Server Requirements</a></li>
                                        <li><a href="#installing">Installing Laravel</a></li>
                                        <li><a href="#configuration">Configuration</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#web_server">Web Server Configuration</a>
                                    <ul>
                                        <li><a href="#pretty_urls">Pretty URLs</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <section class="docs_main">
                            <h1 class="page_title">Installation</h1>

                            <section id="installation" class="doc_section">
                                <h2 class="section_heading">Installation</h2>
                                <div class="callout">
                                    <div class="icon blue">
                                        <img src="/img/callouts/laracast.min.svg" alt="Icon">
                                    </div>
                                    <div class="content">
                                        <p class="small">Laracasts provides a <a href="#">free, thorough introduction</a> to Laravel for newcomers to the framework. It's a great place to start your journey.</p>
                                    </div>
                                </div>

                                <section id="requirements" class="doc_sub_section">
                                    <h3>Server Requirements</h3>
                                    <p>The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the <a href="#">Laravel Homestead</a> virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.</p>
                                    <p>However, if you are not using Homestead, you will need to make sure your server meets the following requirements:</p>
                                    <ul>
                                        <li>PHP >= 7.1.3</li>
                                        <li>OpenSSL PHP Extension</li>
                                        <li>PDO PHP Extension</li>
                                        <li>Mbstring PHP Extension</li>
                                        <li>Tokenizer PHP Extension</li>
                                        <li>XML PHP Extension</li>
                                        <li>Ctype PHP Extension</li>
                                        <li>JSON PHP Extension</li>
                                        <li>BCMath PHP Extension</li>
                                    </ul>
                                </section>

                                <section id="installing" class="doc_sub_section">
                                    <h3>Installing Laravel</h3>
                                    <p>Laravel utilizes <a href="#">Composer</a> to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.</p>
                                    <h4>Via Laravel Installer</h4>
                                    <p>First, download the Laravel installer using Composer:</p>

                                    <pre class="line-numbers"><code class="language-php">composer global require laravel/installer</code></pre>

                                    <p>Make sure to place composer's system-wide vendor bin directory in your <code class="language-php">$PATH</code> so the laravel executable can be located by your system. This directory exists in different locations based on your operating system; however, some common locations include:</p>

                                    <ul>
                                        <li>macOS: <code class="language-php">$HOME/.composer/vendor/bin</code></li>
                                        <li>GNU / Linux Distributions: <code class="language-php">$HOME/.config/composer/vendor/bin</code></li>
                                    </ul>

                                    <p>Once installed, the <code class="language-php">laravel new</code> command will create a fresh Laravel installation in the directory you specify. For instance, <code class="language-php">laravel new blog</code> will create a directory named <code class="language-php">blog</code> containing a fresh Laravel installation with all of Laravel's dependencies already installed:</p>

                                    <pre class="line-numbers"><code class="language-php">laravel new blog</code></pre>

                                    <h4>Via Composer Create-Project</h4>
                                    <p>Alternatively, you may also install Laravel by issuing the Composer <code class="language-php">create-project</code> command in your terminal:</p>

                                    <pre class="line-numbers"><code class="language-php">composer create-project --prefer-dist laravel/laravel blog</code></pre>

                                    <h4>Local Development Server</h4>
                                    <p>If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the <code class="language-php">serve</code> Artisan command. This command will start a development server at <code class="language-php">http://localhost:8000</code>:</p>

                                    <pre class="line-numbers"><code class="language-php">php artisan serve</code></pre>

                                    <p>Of course, more robust local development options are available via <a href="#">Homestead</a> and <a href="#">Valet</a>.</p>
                                </section>
                                <section id="configuration" class="doc_sub_section">
                                    <h3>Configuration</h3>
                                    <h4>Public Directory</h4>
                                    <p>After installing Laravel, you should configure your web server's document / web root to be the <code class="language-php">public</code> directory. The <code class="language-php">index.php</code> in this directory serves as the front controller for all HTTP requests entering your application.</p>

                                    <h4>Configuration Files</h4>
                                    <p>All of the configuration files for the Laravel framework are stored in the <code class="language-php">config</code> directory. Each option is documented, so feel free to look through the files and get familiar with the options available to you.</p>

                                    <h4>Directory Permissions</h4>
                                    <p>After installing Laravel, you may need to configure some permissions. Directories within the <code class="language-php">storage</code> and the <code class="language-php">bootstrap/cache</code> directories should be writable by your web server or Laravel will not run. If you are using the <a href="#">Homestead</a> virtual machine, these permissions should already be set.</p>

                                    <h4>Application Key</h4>
                                    <p>The next thing you should do after installing Laravel is set your application key to a random string. If you installed Laravel via Composer or the Laravel installer, this key has already been set for you by the <code class="language-php">php artisan key:generate</code> command.</p>
                                    <p>Typically, this string should be 32 characters long. The key can be set in the <code class="language-php">.env</code> environment file. If you have not renamed the <code class="language-php">.env.example</code> file to <code class="language-php">.env</code>, you should do that now. If the application key is not set, your user sessions and other encrypted data will not be secure!</p>

                                    <h4>Additional Configuration</h4>
                                    <p>Laravel needs almost no other configuration out of the box. You are free to get started developing! However, you may wish to review the <code class="language-php">config/app.php</code> file and its documentation. It contains several options such as <code class="language-php">timezone</code> and <code class="language-php">locale</code> that you may wish to change according to your application.</p>
                                    <p>You may also want to configure a few additional components of Laravel, such as:</p>

                                    <ul>
                                        <li><a href="#">Cache</a></li>
                                        <li><a href="#">Database</a></li>
                                        <li><a href="#">Session</a></li>
                                    </ul>
                                </section>
                            </section>

                            <section id="web_server" class="doc_section">
                                <h2 class="section_heading">Web Server Configuration</h2>
                                <section id="pretty_urls" class="doc_sub_section">
                                    <h3>Pretty Urls</h3>
                                    <h4>Apache</h4>
                                    <p>Laravel includes a <code class="language-php">public/.htaccess</code> file that is used to provide URLs without the <code class="language-php">index.php</code> front controller in the path. Before serving Laravel with Apache, be sure to enable the <code class="language-php">mod_rewrite</code> module so the <code class="language-php">.htaccess</code> file will be honored by the server.</p>
                                    <p>If the <code class="language-php">.htaccess</code> file that ships with Laravel does not work with your Apache installation, try this alternative:</p>

                                    <pre class="line-numbers"><code class="language-php">Options +FollowSymLinks -Indexes
RewriteEngine On

RewriteCond %{HTTP:Authorization} .
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]</code></pre>

                                    <h4>Nginx</h4>
                                    <p>If you are using Nginx, the following directive in your site configuration will direct all requests to the <code class="language-php">index.php</code> front controller:</p>

                                    <pre class="line-numbers"><code class="language-php">location / {
    try_files $uri $uri/ /index.php?$query_string;
}</code></pre>

                                    <p>Of course, when using <a href="#">Homestead</a> or <a href="#">Valet</a>, pretty URLs will be automatically configured.</p>
                                </section>
                            </section>

                            <div class="pagination_links">
                                <!--
                                <a href="#" class="btn prev_link"><span><img src="/img/icons/arrow.min.svg" alt="Previous Section"><span class="text">Configuration</span></span></a>
                                -->

                                <a href="#" class="btn next_link"><span><span class="text">Configuration</span><img src="/img/icons/arrow.min.svg" alt="Next Section"></span></a>
                            </div>
                        </section>
                    </section>
                </section>
            </div>
        </div>

    </div>
@stop