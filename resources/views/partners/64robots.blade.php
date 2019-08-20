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
                            <img src="/img/partners/64robots.min.svg" alt="64Robots">
                            <div class="actions">
                                <a href="mailto:jon@64robots.com" class="btn"><span>Hire 64Robots</span></a>
                                <a href="https://64robots.com/" class="btn secondary"><span>Visit Website →</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contain">
                            <h3>We launch your product to the next level. 64 Robots is a team of Laravel experts with a background in building successful startups and SaaS products. </h3>
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
                            <p>We specialize in building Laravel APIs, Vue.js single page applications and Quasar framework mobile apps.</p>

                            <div class="list_block">
                                <h3>Proficiencies</h3>
                                <ul>
                                    <li>Laravel Development</li>
                                    <li>Vue.js / Quasar / React</li>
                                    <li>APIs</li>
                                    <li>SaaS Products</li>
                                    <li>UI/UX Product Design</li>
                                    <li>Project Management</li>
                                    <li>Technical Leadership</li>
                                    <li>Startup Guidance</li>
                                </ul>
                            </div>

                            <p>Although we love working with companies of all sizes, our team excels at guiding early-stage, funded startups to make the right technology decisions and build a polished product that will put you on the right path.</p>

                            <p>We set ourselves apart by our level of involvement in your project. Think of us as an extension of your team. We’ve filled roles all the way from frontend developer, to project manager up to acting CTO. We are selective in the projects we take on and truly believe in doing everything we can to make them successful.</p>

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
