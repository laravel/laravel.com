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
                            <img src="/img/partners/few.svg" alt="Few">
                            <div class="actions">
                                <a href="mailto:hello@few.io" class="btn"><span>Hire Few</span></a>
                                <a href="https://few.io/" class="btn secondary"><span>Visit Website →</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contain">
                            <h3>We design and build rad digital products for teams of all sizes, from startups to enterprise organizations. From concept to scale, we have a proven process for helping companies build their brand experience, identify core features for an MVP, develop a roadmap for the future of their product and bring it to life.</h3>
                            <div class="hero_img"><img src="/img/partners/img_few_detail.jpg" alt="Few">
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
                            <p>Since 2014, Few has been helping clients take software products to market. Few works hand-in-hand with clients to provide them the resources they need to strategize, design, build and launch thoughtful, elegant and scalable solutions.</p>

                            <div class="list_block">
                                <h3>Proficiencies</h3>
                                <ul>
                                    <li>Product Strategy</li>
                                    <li>Web Application Development - VueJS + Laravel</li>
                                    <li>UX / UI Product Design</li>
                                    <li>iOS & Android Application Development - React Native + Laravel</li>
                                    <li>API Design + Development</li>
                                    <li>Visual Design</li>
                                    <li>AR Design + Development</li>
                                    <li>Branding</li>
                                    <li>Go-to-Market Strategy</li>
                                    <li>Content Strategy</li>
                                    <li>Staff Augmentation</li>
                                </ul>
                            </div>

                            <p>We take a transparent, team-based approach to projects. Our world-class team of developers, product managers, and designers work alongside you to build and deploy software. </p>

                            <p>We use Slack to provide constant communication between you and the project manager, we typically work in two week sprints that allow you to know what features and functionality will be coming down the pipeline, with weekly progress updates to discuss any pivots or issues. All while tracking our time in detail so you are fully aware of what has been worked on and when.</p>

                            <ul class="social_links">
                                <li><a href="https://twitter.com/fewnet"><img src="/img/social/twitter.min.svg" alt="Twitter"></a></li>
                                <li><a href="https://www.linkedin.com/company/workwithfew"><img src="/img/social/linkedin.min.svg" alt="LinkedIn"></a></li>
                                <li><a href="https://www.facebook.com/workwithfew"><img src="/img/social/facebook.min.svg" alt="Facebook"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
