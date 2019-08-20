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
                            <img src="/img/partners/ideil.min.svg" alt="ideil">
                            <div class="actions">
                                <a href="mailto:welcome@ideil.com" class="btn"><span>Hire ideil</span></a>
                                <a href="https://about.ideil.com/" class="btn secondary"><span>Visit Website →</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contain">
                            <h3>We are a web development company of 30+ high-skilled professionals.</h3>
                            <div class="hero_img"><img src="/img/partners/img_ideil_detail.png" alt="ideil">
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
                            <p>Our main focus is custom software development. This is the thing that we enjoy doing the most as it is always a new challenge for us to take.</p>

                            <div class="list_block">
                                <h3>Proficiencies</h3>
                                <ul>
                                    <li>Laravel Development</li>
                                    <li>Vue.js</li>
                                    <li>APIs / Microservices</li>
                                    <li>UI/UX Product Design</li>
                                    <li>Software Architecture</li>
                                    <li>Project Management</li>
                                    <li>Technical Leadership</li>
                                    <li>E-commerce</li>
                                    <li>Rescue Projects</li>
                                    <li>Codebase Audit</li>
                                    <li>iOS App Development</li>
                                    <li>Android App Development</li>
                                </ul>
                            </div>

                            <p>The web stack we're working with involves the hottest and at the same time battle-tested solutions and frameworks — Laravel, Vue.js, Nginx, MySQL. To offer our clients seamless support and full-cycle service we have a team of mobile developers that collaborate tightly with our backend team. This helps us minimize the communication barriers that are often present in distributed teams.</p>

                            <p>Communication is the key for every successful partnership and we value every bit of your time and hear every word. You make yourself clear on the topic and we distribute responsibilities among the members of the team. Tasks just get done.</p>

                            <p>ideil. has a keen sense of satisfaction and you can experience it as well with your next delivered product. Be it a brilliant design, sophisticated technology or carefully considered details, people can not resist this magic.</p>

                            <ul class="social_links">
                                <li><a href="https://twitter.com/ideil"><img src="/img/social/twitter.min.svg" alt="Twitter"></a></li>
                                <li><a href="https://github.com/ideil"><img src="/img/social/github.min.svg" alt="GitHub"></a></li>
                                <li><a href="https://www.linkedin.com/company/ideil/"><img src="/img/social/linkedin.min.svg" alt="LinkedIn"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
