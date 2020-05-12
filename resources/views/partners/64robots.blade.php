@extends('partials.layout')

@section('content')
    @include('partials.header')

    <div class="remodal-bg">

        <div class="content_contain">
            <div class="page_contain">
                <section class="partners_hero inner">
                    <div class="contain">
                        <h6>Laravel Partner</h6>
                        <div class="hero_heading">
                            <img src="/img/partners/64Robots.min.svg" alt="64Robots">
                            <div class="actions">
                                <a href="https://www.64robots.com/launch-your-project" class="btn"><span>Hire 64 Robots</span></a>
                                <a href="https://64robots.com/" class="btn secondary"><span>Visit Website →</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contain">
                            <h3>64 Robots is a team of Laravel experts brought together by a desire to create cutting edge web products. Whether building something new or refactoring a product in need of help, we'll give you a personal and thoughtful approach to development. We believe in partnering for the long haul to bring your vision to life and support it as it grows.</h3>
                            <div class="hero_img"><img src="/img/partners/img_64robots_detail.png" alt="64Robots">
                            </div>
                        </div>
                    </div>
                </section>

                <div class="contain">
                    <div class="partners_detail_main">
                        <div class="bg">
                            <video poster="/img/blocks/blocks_2.jpg" playsinline autoplay muted loop>
                                <source src="/img/blocks/blocks_2.mp4" type="video/mp4">
                            </video>
                        </div>

                        <div class="content">
                            <p>We specialize in building Laravel APIs, Nuxt.js SSR applications, Vue.js SPAs and NativeScript-Vue mobile applications.</p>

                            <div class="list_block">
                                <h3>Proficiencies</h3>
                                <ul>
                                    <li>Laravel</li>
                                    <li>Vue.js / Nuxt.js</li>
                                    <li>NativeScript-Vue</li>
                                    <li>APIs</li>
                                    <li>SaaS/ecommerce Products</li>
                                    <li>UI/UX Product Design</li>
                                    <li>Staff Augmentation </li>
                                    <li>Code Audits & Refactoring</li>
                                </ul>
                            </div>

                            <p>We love working with companies of all sizes. We've guided early-stage, funded startups to a successful launch and helped large international companies refactor and rebuild existing products to scale into the future. Whatever your needs, we'll help you make the right technology decisions and build a polished product that will put you on the path to success.</p>

                            <p>We set ourselves apart by our level of involvement in your product. Think of us as an extension of your team. Whether augmenting an existing team or stepping in as de facto CTO to make the technical decisions, we're there for you. We're selective in the products that we take on, as we truly want to believe in our work and do everything we can to make them successful. </p>

                            <ul class="social_links">
                                <li><a href="https://twitter.com/64robots"><img src="/img/social/twitter.min.svg" alt="Twitter"></a></li>
                                <li><a href="https://de.linkedin.com/company/12904226"><img src="/img/social/linkedin.min.svg" alt="LinkedIn"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
