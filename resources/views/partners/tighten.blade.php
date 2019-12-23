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
                            <img src="/img/partners/tighten.min.svg" alt="Tighten">
                            <div class="actions">
                                <a href="mailto:hello@tighten.co" class="btn"><span>Hire Tighten</span></a>
                                <a href="https://tighten.co/laravel" class="btn secondary"><span>Visit Website →</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contain">
                            <h3>Tighten is a team of Laravel community leaders, web development industry veterans, and multi-disciplinary creators. We’ve built, rescued, refactored, and supported a huge number of Laravel applications since Laravel’s earliest days. Whatever your challenge, we have the experience and knowledge to help.</h3>
                            <div class="hero_img"><img src="/img/partners/img_tighten_detail-2.jpeg" alt="Tighten">
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
                            <p>We work with big enterprises, SMBs, non-profit organizations, and early-stage startups to devise, design, and deliver world-class applications that are loved by users and developers alike.
                            </p>

                            <div class="list_block">
                                <h3>Proficiencies</h3>
                                <ul>
                                    <li>Laravel Applications</li>
                                    <li>Laravel Codebase Audits</li>
                                    <li>APIs + Aggregators</li>
                                    <li>VueJS + React</li>
                                    <li>Training + Mentoring</li>
                                    <li>UX Design</li>
                                    <li>Content Strategy</li>
                                    <li>Staff Augmentation</li>
                                </ul>
                            </div>

                            <p>But we don’t just work on brand new apps.  If you have an existing codebase that needs some love, we’re happy to come in for a code audit or rescue.  We’ve seen more Laravel codebases than just about anybody, so we’re well-equipped to help you chart your best course forward.</p>

                            <p>Constant learning and open sharing with the Laravel community are essential to how we work. We are tireless advocates for the Laravel ecosystem, and we’re proud to have been a part of the Laravel Partners program right from the start.</p>

                            <ul class="social_links">
                                <li><a href="https://twitter.com/tightenco"><img src="/img/social/twitter.min.svg" alt="Twitter"></a></li>
                                <li><a href="https://github.com/tightenco"><img src="/img/social/github.min.svg" alt="GitHub"></a></li>
                                <li><a href="https://www.linkedin.com/company-beta/4795582/?pathWildcard=4795582"><img src="/img/social/linkedin.min.svg" alt="LinkedIn"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
