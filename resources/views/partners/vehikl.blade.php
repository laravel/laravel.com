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
                            <img src="/img/partners/vehikl.min.svg" alt="Vehikl">
                            <div class="actions">
                                <a href="mailto:go+partner@vehikl.com" class="btn"><span>Hire Vehikl</span></a>
                                <a href="http://vehikl.com/" class="btn secondary"><span>Visit website →</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contain">
                            <h3>Vehikl is a team of code-crushing Laravel experts. Over the years we have built a variety of web applications for customers using Laravel as our framework of choice and implemented Lean Agile development techniques to build professional applications that are functional and easy to use.</h3>
                            <div class="hero_img"><img src="/img/partners/img_vehikl_detail.jpg" alt="Vehikl">
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
                            <p>Combining the power of Laravel, Lean Agile development techniques, and a diverse team with deep technical knowledge and experience allows us to provide a unique approach to make sure your work gets done as quickly, professionally, and economically as possible. Our customers range from smaller startups looking for help with working through a feature backlog as they scale, to larger established firms that need to refactor a legacy code base and build new features.</p>

                            <div class="list_block">
                                <h3>Proficiencies</h3>
                                <ul>
                                    <li>Laravel</li>
                                    <li>React</li>
                                    <li>Angular</li>
                                    <li>Vue</li>
                                    <li>UI/UX Product Design</li>
                                    <li>API Design</li>
                                    <li>Software Architecture</li>
                                    <li>Consulting</li>
                                    <li>Technical Leadership</li>
                                    <li>Staff Augmentation</li>
                                </ul>
                            </div>

                            <p>We integrate fully with your existing workflow and will dramatically increase your project’s velocity. We also provide mentorship to more junior developers and work to assist knowledge transfer to any new developers you onboard internally. As a development partner, Vehikl provides a flexible, scalable option while you ramp up an internal team.. Over the years we have built a variety of web applications for customers using Laravel as our framework of choice and implemented Lean Agile development techniques to build professional applications that are functional and easy to use.</p>

                            <ul class="social_links">
                                <li><a href="https://twitter.com/vehikl"><img src="/img/social/twitter.min.svg" alt="Twitter"></a></li>
                                <li><a href="https://github.com/vehikl"><img src="/img/social/github.min.svg" alt="GitHub"></a></li>
                                <li><a href="https://www.linkedin.com/company-beta/2240858/?pathWildcard=2240858"><img src="/img/social/linkedin.min.svg" alt="LinkedIn"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
