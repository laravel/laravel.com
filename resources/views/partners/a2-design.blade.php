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
                            <img src="/img/partners/a2design.svg" alt="A2 Design" style="height: 90px;">
                            <div class="actions">
                                <a href="mailto:sales@a2design.biz" class="btn"><span>Hire A2 Design</span></a>
                                <a href="https://www.a2design.biz/" class="btn secondary"><span>Visit Website</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contain">
                            <h3>A2 Design is a team of top-notch Laravel developers with a deep history in building successful startups and SaaS platforms by employing agile and lean development techniques.</h3>
                            <div class="hero_img"><img src="/img/partners/img_a2design_detail.jpg" alt="A2 Design">
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

                        <div class="content" style="padding-top:40px">
                            <p>Our passion is working with early-stage startups. We love to collaborate closely with founders from the very onset of the project. Once the path is charted we use iterative processes to build a product efficiently. When the startup gains traction and starts to grow we can easily scale up a team as all our developers are Laravel experts.</p>

                            <div class="list_block">
                                <h3>Proficiencies</h3>
                                <ul>
                                    <li>Laravel Applications</li>
                                    <li>APIs</li>
                                    <li>Vue.js / React</li>
                                    <li>AngularJS / Ionic</li>
                                    <li>UX Design</li>
                                    <li>SaaS Products</li>
                                    <li>Staff Augmentation</li>
                                    <li>Startup MVP Development</li>
                                </ul>
                            </div>

                            <p>Our team has a decade-long experience that spans a wide range of industries and ideas. Having built many successful projects we now share our experience with the community via meetups and young-grad programs.</p>

                            <p>Our clients can count on transparent pricing, deep technical knowledge, and a personal touch. We are looking forward to hearing from you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
