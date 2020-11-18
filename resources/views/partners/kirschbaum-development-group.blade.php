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
                            <img src="/img/partners/kirschbaum.min.svg" alt="Kirschbaum Development">
                            <div class="actions">
                                <a href="mailto:hello@kirschbaumdevelopment.com" class="btn"><span>Hire Kirschbaum</span></a>
                                <a href="https://kirschbaumdevelopment.com/" class="btn secondary"><span>Visit Website →</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contain">
                            <h3>The Kirschbaum team of Laravel experts are exceptional coders, and exceptional problem solvers – if there's a more efficient path to reach your goals, we'll find it. We've helped companies save millions, and we've enabled organizations without millions to compete with those who do.</h3>
                            <div class="hero_img"><img src="/img/partners/img_kirschbaum_detail-2.jpg" alt="Kirschbaum Development">
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
                            <p>The companies we work with appreciate our ability to work seamlessly with both their technical and non-technical teams. We cut out the middlemen—our developers are great communicators with business sense, so you speak directly with the people working on your project and nothing is lost in translation.</p>

                            <div class="list_block">
                                <h3>Proficiencies</h3>
                                <ul>
                                    <li>Laravel Development</li>
                                    <li>Vue.js / Angular / Ionic</li>
                                    <li>Machine Learning</li>
                                    <li>APIs / Microservices</li>
                                    <li>SaaS Products</li>
                                    <li>Technical Leadership</li>
                                    <li>Rescue Projects</li>
                                    <li>Staff Augmentation</li>
                                    <li>Team Building / Mentoring</li>
                                    <li>Direction for Start-ups</li>
                                </ul>
                            </div>

                            <p>With a history of delivering practical solutions to complex problems, our focus is on your long-term success. We leverage innovative approaches and bleeding edge technologies to get your products and services to market quickly, while anticipating the need to scale and adapt as your business requirements evolve.</p>

                            <p>We'd love to chat with you about your project!</p>

                            <ul class="social_links">
                                <li><a href="https://twitter.com/n_kirschbaum"><img src="/img/social/twitter.min.svg" alt="Twitter"></a></li>
                                <li><a href="https://github.com/kirschbaum-development"><img src="/img/social/github.min.svg" alt="GitHub"></a></li>
                                <li><a href="https://www.linkedin.com/company/kirschbaumdevelopmentgroupllc"><img src="/img/social/linkedin.min.svg" alt="LinkedIn"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
