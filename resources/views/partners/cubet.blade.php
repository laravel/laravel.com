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
                            <img src="/img/partners/cubet.min.svg" alt="Cubet">
                            <div class="actions">
                                <a href="mailto:sales@cubettech.com" class="btn"><span>Hire Cubet</span></a>
                                <a href="https://cubettech.com/" class="btn secondary"><span>Visit website →</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contain">
                            <h3>Cubet Techno Labs is a 150+ member Digital Engineering company with offices in India and London, helping to deliver your digital dreams to perfection. Formed in 2007, Cubet has been focused on SMAC (Social/Mobile/Analytics/Cloud) development and consulting to help enterprises and online businesses go from idea to execution.</h3>
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
                            <p>Our extensive Laravel development services are perfect for highly agile business methodologies. Our certified Laravel developers create brilliant extensions and accurately map web applications to ensure faster, optimal performance of your solutions. With a clear focus on creating optimized database integrations that reduce lag and increase performance, our Laravel development services provide speed, agility and performance.</p>

                            <div class="list_block">
                                <h3>Proficiencies</h3>
                                <ul>
                                    <li>Laravel Development</li>
                                    <li>Vue / Angular / React</li>
                                    <li>UI / UX Product Design</li>
                                    <li>API Design</li>
                                    <li>Software Architecture</li>
                                    <li>Consulting</li>
                                    <li>Staff Augmentation</li>
                                    <li>SaaS Products</li>
                                    <li>Startup Guidance</li>
                                </ul>
                            </div>

                            <p>We always place great emphasis on FOSS (Free, Open-Source Software) front end and back end technologies including JavaScript Frameworks like Vue/Node/Angular/React/Meteor and Mobile app technologies- iOS/Android/React Native as well as cloud deployment on AWS. There is a dedicated team of UI/UX/HTML developers, Project Management and QA experts to support all projects and ensure bug free releases, all working alongside our London based account management teams.</p>

                            <p>We have over 30+ portfolio of enterprise mobile/web application projects built on the Laravel framework and we would be happy to talk with you about the enormous possibilities of using it for your next idea - however big or small. Some of our clients include enterprises like The British Medical Journal as well innovative Tech Start-ups like Active Inspiration from the UK, US, EU & Australia.</p>

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
