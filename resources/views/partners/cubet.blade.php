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
                            <img src="/img/partners/cubet.png" alt="Cubet">
                            <div class="actions">
                                <a href="mailto:sales@cubettech.com" class="btn"><span>Hire Cubet</span></a>
                                <a href="https://cubettech.com/services/laravel" class="btn secondary"><span>Visit Website →</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contain">
                            <h3>CUBET is an IT consultancy and software product development company with a strong presence in the US, UK, and India. Trusted by more than 200 customers worldwide, Cubet has been creating applications that are both resilient and scalable, adding value to the end customers, making organizations digital and delivering Agile projects with confidence. </h3>
                            <div class="hero_img"><img src="/img/partners/img_cubet_detail.jpeg" alt="Cubet">
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
                            <p>Cubet follows a lean-agile software development methodology and has been consulting for start-ups, mid-size companies to established companies making upgrades faster, lowering the IT costs and reducing business risks. Cubet helps them shift from their legacy systems to Laravel, build new applications or migrate existing solutions to Laravel.</p>

                            <div class="list_block">
                                <h3>Proficiencies</h3>
                                <ul>
                                    <li>Laravel - Development / Code Audit / Consultation</li>
                                    <li>Vue / Angular / React - Frontend Development</li>
                                    <li>UI / UX Product Design</li>
                                    <li>API Design and Development </li>
                                    <li>Consulting Services</li>
                                    <li>Rescue Projects</li>
                                    <li>Performance Review & Improvements</li>
                                    <li>Technical Leadership</li>
                                    <li>Startup Guidance</li>
                                    <li>Product Ideation and Development</li>
                                    <li>Staff Augmentation</li>
                                </ul>
                            </div>

                            <p>Cubet is a constant contributor to the Laravel powered software development and also offers code auditing, performance optimization and supports its customers with a successful product launch. They have different proven engagement models depending on your project size and specific requirements.</p>

                            <p>Cubet is always willing to talk with you about the enormous possibilities of using Laravel for your next idea - however big or small. Do reach out to them for your next project. </p>

                            <ul class="social_links">
                                <li><a href="https://twitter.com/CubetTech"><img src="/img/social/twitter.min.svg" alt="Twitter"></a></li>
                                <li><a href="https://github.com/cubettech"><img src="/img/social/github.min.svg" alt="GitHub"></a></li>
                                <li><a href="https://www.linkedin.com/company/cubet-technologies/"><img src="/img/social/linkedin.min.svg" alt="LinkedIn"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
