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
                            <img src="/img/partners/romega.svg" alt="Romega">
                            <div class="actions">
                                <a href="mailto:bkeith@romegasoftware.com" class="btn"><span>Hire Romega</span></a>
                                <a href="https://romegadigital.com/" class="btn secondary"><span>Visit Website →</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contain">
                            <h3>Managing development, infrastructure, execution, and everything between is time-consuming and error-prone. Whether your goal is to build software, augment staff, upgrade security, or get a product out the door, Romega Software can back you with 30+ years of industry experience, giving you the confidence to create and deploy.</h3>
                            <div class="hero_img"><img src="/img/partners/romega_detail.jpg" alt="Romega">
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
                            <p>Infrastructure and development don’t have to be at odds. Incorporating these efforts help your business and your product become more stable, more scalable, and more secure. This concept comes from our own background. </p>

                            <div class="list_block">
                                <h3>Proficiencies</h3>
                                <ul>
                                    <li>Infrastructure and security</li>
                                    <li>Processes and deployment</li>
                                    <li>MVP consultation/business objectives and cost consultation </li>
                                    <li>API integrations</li>
                                    <li>API design</li>
                                    <li>Staff augmentation</li>
                                    <li>Digital signage and display integration</li>
                                    <li>Multi-Tenancy design</li>
                                    <li>End-to-end technology partner</li>
                                </ul>
                            </div>

                            <p>We’ve worked in, for, and with SaaS businesses of all sizes, as well as with multiple Fortune 500 companies. It’s frustrating when multiple portions of the process are disconnected. Success comes when there’s a sense of confidence in every decision made throughout. We’ve done the latter for our clients, and we want to do the same for you.  </p>

                            <p>Our biggest priority is getting to know your business and your pain points, so we can help you eliminate them efficiently. Access to direct and real-time communication is pivotal to accomplishing any goal, so we make that a priority.</p>

                            <p>This partnership doesn’t end after deployment. We offer continued support by managing and monitoring your software, proactively finding issues before they become problems, and keeping you on the latest, greatest technology. Laravel is our chosen tool to make this happen.</p>

                            <ul class="social_links">
                                <li><a href="https://twitter.com/romegasoftware"><img src="/img/social/twitter.min.svg" alt="Twitter"></a></li>
                                <li><a href="https://github.com/romegasoftware"><img src="/img/social/github.min.svg" alt="GitHub"></a></li>
                                <li><a href="https://www.linkedin.com/company/romegasoftware/"><img src="/img/social/linkedin.min.svg" alt="LinkedIn"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
