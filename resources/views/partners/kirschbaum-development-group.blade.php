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
                            <h3>We are a team of carefully curated Laravel experts with a history of delivering practical and efficient solutions to complex problems. We bring products and services to market quickly by leveraging iterative processes and lean development techniques.</h3>
                            <div class="hero_img"><img src="/img/partners/img_kirschbaum_detail.png" alt="Kirschbaum Development">
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
                            <p>You can count on us to bring passion, dedication, and stability to our work. We value efficient processes and tools, and we value people and relationships even more. We view ourselves as master craftspeople who respect the importance and significance of what we do. Think "This Old House" on your server.</p>

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

                            <p>We are proud to have helped some of the largest companies in the world develop products, streamline systems, and better reach their customers using Laravel. We're honored to have this opportunity to be part of the Laravel Partners program.</p>

                            <p>We look forward to working with you!</p>

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
