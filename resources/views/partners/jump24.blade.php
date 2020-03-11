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
                            <img src="/img/partners/jump24.jpg" alt="Jump24"  style="max-width: 300px">
                            <div class="actions">
                                <a href="mailto:ollie@jump24.co.uk" class="btn"><span>Hire Jump24</span></a>
                                <a href="http://jump24.co.uk" class="btn secondary"><span>Visit Website →</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contain">
                            <h3>Jump24 is a client centric Laravel development studio based in Birmingham, UK. Our team is comprised of multidisciplinary leaders who have been involved in the Laravel community since 2013. Since our inception we have grown organically through word of mouth and now work with some of the most exciting and challenging products and companies in the UK and beyond.</h3>
                            <div class="hero_img"><img src="/img/partners/img_jump24_detail.jpg" alt="Jump24">
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
                            <p>Having worked across many different industries and client sizes, we relish in solving complex challenges to ensure that our projects are a success.</p>

                            <div class="list_block">
                                <h3>Proficiencies</h3>
                                <ul>
                                    <li>Startup MVP Development</li>
                                    <li>UI/UX design</li>
                                    <li>Laravel Development</li>
                                    <li>Laravel Consulting</li>
                                    <li>Vue.js & React</li>
                                    <li>SAAS Development</li>
                                    <li>Software Architecture</li>
                                    <li>API Development</li>
                                </ul>
                            </div>

                            <p>Employing agile methodologies, we can build any product from sophisticated API driven platforms to cutting edge web applications. We always ensure that we are on hand from initial concept to the final design to make our clients ideas come to life. </p>

                            <p>Continual learning is a fundamental principle which we stand by, and in our local community we host a local tech event 'BrumPHP' every quarter to help others enhance and develop knowledge in the field of Laravel.</p>

                            <ul class="social_links">
                                <li><a href="https://twitter.com/jumptwenty4"><img src="/img/social/twitter.min.svg" alt="Twitter"></a></li>
                                <li><a href="https://www.linkedin.com/company/5385766"><img src="/img/social/linkedin.min.svg" alt="LinkedIn"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
