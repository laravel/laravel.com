@extends('partials.layout')

@section('content')
    @include('partials.header')

    <div class="remodal-bg partners_page">

        <div class="content_contain">
            <div class="page_contain">
                <div class="contain">
                    <section class="partners_hero">
                        <div class="hero_bg">
                            <video poster="/img/blocks/blocks_1.jpg" playsinline autoplay muted loop>
                                <source src="/img/blocks/blocks_1.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="hero_content">
                            <h1>Making the web a better place with Laravel</h1>
                            <p>Laravel Partners are elite shops providing top-notch Laravel development and consulting. Each of our partners can help you craft a beautiful, well-architected project.</p>
                        </div>
                        <div class="hero_btn">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeOTE1G6zxSPbKdmQ59UKkL_Rja_ddAyG6Y6xxGdSGAWlNTFA/viewform?usp=sf_link" class="btn"><span>Become A Partner</span></a>
                        </div>
                    </section>
                </div>

                <section class="featured_partner">
                    <div class="contain">
                        <div class="featured_contain">
                            @if($featured == 'tighten')
                                <img class="featured_img" src="/img/partners/img_tighten_detail.jpeg" alt="Tighten" style="right: 48%;">
                                <div class="featured_content">
                                    <h6>Featured Partner</h6>
                                    <img class="logo" src="/img/partners/tighten.min.svg" alt="Tighten">
                                    <p>Tighten is a team of Laravel community leaders, web development industry veterans, and multi-disciplinary creators. We’ve built, rescued, refactored, and supported a huge number of Laravel applications since Laravel’s earliest days. Whatever your challenge, we have the experience and knowledge to help.</p>
                                    <a href="/partner/tighten" class="learn_more">More about Tighten <span>→</span></a>
                                </div>
                            @elseif($featured == 'vehikl')
                                <img class="featured_img" src="/img/partners/img_vehikl.jpg" alt="Vehikl">
                                <div class="featured_content">
                                    <h6>Featured Partner</h6>
                                    <img class="logo" src="/img/partners/vehikl.min.svg" alt="Vehikl">
                                    <p>Vehikl is a team of code-crushing Laravel experts. Over the years we have built a variety of web applications for customers using Laravel as our framework of choice and implemented Lean Agile development techniques to build professional applications that are functional and easy to use.</p>
                                    <a href="/partner/vehikl" class="learn_more">More about Vehikl <span>→</span></a>
                                </div>
                            @endif
                        </div>
                    </div>
                </section>

                <div class="contain">
                    <div class="partners_block content_block bg_left">
                        <div class="bg">
                            <video poster="/img/blocks/blocks_2.jpg" playsinline autoplay muted loop>
                                <source src="/img/blocks/blocks_2.mp4" type="video/mp4">
                            </video>
                        </div>
                        <ul class="partners_list">
                            <li>
                                <div class="content">
                                    @if($featured == 'tighten')
                                        <div class="logo_contain">
                                            <img src="/img/partners/vehikl.min.svg" alt="Vehikl">
                                        </div>
                                        <p class="small">A team of code-crushing Laravel experts. Over the years we have built a variety of web applications for customers using Laravel.</p>
                                        <a href="/partner/vehikl" class="learn_more">More about Vehikl <span>→</span></a>
                                    @elseif($featured == 'vehikl')
                                        <div class="logo_contain">
                                            <img src="/img/partners/tighten.min.svg" alt="Tighten">
                                        </div>
                                        <p class="small">Their team of top-notch Laravel developers will build your product, help you take it to market, and iterate with you as things change.</p>
                                        <a href="/partner/tighten" class="learn_more">More about Tighten <span>→</span></a>
                                    @endif
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/kirschbaum.min.svg" alt="Kirschbaum">
                                    </div>
                                    <p class="small">A team of carefully curated Laravel experts with a history of delivering practical and efficient solutions to complex problems.</p>
                                    <a href="/partner/kirschbaum-development-group" class="learn_more">More about Kirschbaum
                                        <span>→</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/byte5.png" width="107" alt="byte5">
                                    </div>
                                    <p class="small">Specializing in innovative open source technologies to create great web applications, sites and shops for their international clients.</p>
                                    <a href="/partner/byte5" class="learn_more">More about byte5 <span>→</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/64Robots.min.svg" alt="64 Robots">
                                    </div>
                                    <p class="small">64 Robots is a team of Laravel experts with a background in building successful startups and SaaS products.</p>
                                    <a href="/partner/64robots" class="learn_more">More about 64 Robots
                                        <span>→</span></a>
                                </div>
                            </li>

                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/cubet.png" alt="Cubet">
                                    </div>
                                    <p class="small">Cubet Techno Labs is a 150+ member Digital Engineering company, helping to deliver your digital dreams to perfection.</p>
                                    <a href="/partner/cubet" class="learn_more">More about Cubet <span>→</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/devsquad.png" width="183" alt="DevSquad">
                                    </div>
                                    <p class="small">DevSquad team members have unique and diverse skills, and this cross-functionality lets us successfully complete any mission.</p>
                                    <a href="/partner/dev-squad" class="learn_more">More about DevSquad
                                        <span>→</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/ideil.min.svg" alt="ideil.">
                                    </div>
                                    <p class="small">ideil’s main focus is custom software development. This is the thing that they enjoy doing as it is always a new challenge.</p>
                                    <a href="/partner/ideil" class="learn_more">More about ideil. <span>→</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/cyberduck.png" width="245" alt="Cyber-Duck">
                                    </div>
                                    <p class="small">The Cyber-Duck team is comprised of 45+ user experience experts, software developers and marketing strategists based in the UK and USA.</p>
                                    <a href="/partner/cyber-duck" class="learn_more">More about Cyber-Duck
                                        <span>→</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/aboutyou.svg" alt="About You">
                                    </div>
                                    <p class="small">ABOUT YOU is one of the fastest-growing e-commerce startups in Europe located in the city center of Hamburg.</p>
                                    <a href="/partner/about-you" class="learn_more">More about About You. <span>→</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/a2design.svg" alt="A2 Design" style="height: 80px;margin-left: -14px;">
                                    </div>
                                    <p class="small">A2 Design is a team of top-notch Laravel developers with a deep history in building successful startups and SaaS platforms by employing agile and lean development techniques.</p>
                                    <a href="/partner/a2-design" class="learn_more">More about A2 Design. <span>→</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
