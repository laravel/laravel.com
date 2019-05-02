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
                            <img src="/img/partners/byte5.png" alt="Byte5">
                            <div class="actions">
                                <a href="mailto:cwendler@byte5.de" class="btn"><span>Hire Byte5</span></a>
                                <a href="http://www.byte5.net/" class="btn secondary"><span>Visit website →</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contain">
                            <h3>byte5 is a web technology company based in Frankfurt, Germany. For over 10 years we have been specializing on innovative open source technologies that give our expert team all the opportunities to create great web applications, sites and shops for our international clients.</h3>
                            <div class="hero_img"><img src="/img/partners/img_byte5_detail.png" alt="Byte5">
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
                            <p>As an experienced consultant we have perfected a lean and agile approach to make sure that each client project gets exactly what it needs in order to be a long-term success. The projects we work on cooperatively with our clients' internal developers are based on a strong project management team that also takes the position of mentor and trainer when needed.</p>

                            <div class="list_block">
                                <h3>Proficiencies</h3>
                                <ul>
                                    <li>Laravel Development</li>
                                    <li>Project Management</li>
                                    <li>APIs</li>
                                    <li>Angular</li>
                                    <li>Technical Leadership</li>
                                    <li>Rescue Projects</li>
                                    <li>Training & Mentoring</li>
                                </ul>
                            </div>

                            <p>What we've learned from our experience with other technologies is the importance of a strong network. Thus we began hosting regular local Laravel events for developers in the economically strong Rhein-Main region in 2016.</p>

                            <ul class="social_links">
                                <li><a href="https://twitter.com/byte5net"><img src="/img/social/twitter.min.svg" alt="Twitter"></a></li>
                                <li><a href="https://de.linkedin.com/company/byte5-digital-media-gmbh"><img src="/img/social/linkedin.min.svg" alt="LinkedIn"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
