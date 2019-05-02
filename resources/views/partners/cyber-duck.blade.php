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
                            <img src="/img/partners/cyberduck.png" alt="Hire Cyber Duck" style="max-width: 300px">
                            <div class="actions">
                                <a href="https://www.cyber-duck.co.uk/our-culture/careers" class="btn"><span>Get Hired</span></a>
                                <a href="https://www.cyber-duck.co.uk/how-we-work/technology/laravel?utm_source=Laravel%20Partner&utm_medium=Sponsorship" class="btn secondary"><span>Visit website →</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contain">
                            <h3>We have been trusted for over 13 years by organisations such as The Bank of England, Mitsubishi Electric and Cancer Research to produce game changing applications through service design underpinned by a user centred approach and an astute knowledge of Laravel and Vue.js.</h3>
                            <div class="hero_img"><img src="/img/partners/img_cyberduck_detail.png" alt="Cyber Duck">
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
                            <p>Our team is comprised of 45+ user experience experts, software developers and marketing strategists based in the UK and USA. We have been using Laravel for over 6 years since its inception and it is our preferred framework for product development. Working in an agile fashion, we have built and maintained bespoke products for many industries, constantly iterating and evolving platforms as business requirements change.</p>

                            <div class="list_block">
                                <h3>Proficiencies</h3>
                                <ul>
                                    <li>Laravel Development</li>
                                    <li>Laravel Consulting</li>
                                    <li>Vue, React and Angular</li>
                                    <li>APIs</li>
                                    <li>Software Architecture</li>
                                    <li>Service Design</li>
                                    <li>User Centred Design (UCD)</li>
                                    <li>UI/UX Product Design</li>
                                    <li>Technical Leadership</li>
                                    <li>Project Management Office (PMO)</li>
                                </ul>
                            </div>

                            <p>We are an ISO 9001 certified in quality process and ISO27001 certified in security management as well as ISO9241 accredited in human centred design. On top of that we are Google Analytics and Google Tag Manager certified agency bringing a proven, user and data driven award winning process to each partnership.</p>

                            <ul class="social_links">
                                <li><a href="https://twitter.com/Cyberduck_uk"><img src="/img/social/twitter.min.svg" alt="Twitter"></a></li>
                                <li><a href="https://www.linkedin.com/company/cyber-duck/"><img src="/img/social/linkedin.min.svg" alt="LinkedIn"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
