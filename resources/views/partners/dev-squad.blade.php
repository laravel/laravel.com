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
                            <img src="/img/partners/devsquad.png" alt="Dev Squad">
                            <div class="actions">
                                <a href="mailto:phil@devsquad.com" class="btn"><span>Hire Dev Squad</span></a>
                                <a href="http://devsquad.com/" class="btn secondary"><span>Visit Website →</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contain">
                            <h3>You can think of DevSquad as the Navy SEALs of software development. Our team members have unique and diverse skills, and this cross-functionality lets us successfully complete any mission.</h3>
                            <div class="hero_img"><img src="/img/partners/img_devscquad_detail.png" alt="Dev Squad">
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
                            <p>All of our clients get their own dedicated Squad. Even if you need 30 developers, everyone working on your project is split into small agile teams of 2-6 people. A battle-tested small people can move quicker and with more precision than larger teams, just like the Navy SEALs.</p>

                            <div class="list_block">
                                <h3>Proficiencies</h3>
                                <ul>
                                    <li>Staff Augmentation</li>
                                    <li>Startup MVP Development</li>
                                    <li>Enterprise Modernization</li>
                                    <li>Project Rescue</li>
                                    <li>UI/UX Product design</li>
                                    <li>Laravel</li>
                                    <li>Vue.js</li>
                                    <li>Angular</li>
                                    <li>React</li>
                                    <li>SAAS Development</li>
                                </ul>
                            </div>

                            <p>Instead of the bug-filled code, you may have received in the past, we write robust software and test the hell out of it. But instead of just testing manually, we write additional code to test your code. This ensures bugs are spotted quickly and automatically before your employees or customers ever touch the software. And it prevents bigger problems down the road when you try to scale usage or add new features.</p>

                            <p>DevSquad gives you the proven proves and all the experience you need to build your software better, faster, and right the first time.</p>

                            <ul class="social_links">
                                <li><a href="https://twitter.com/teamdevsquad"><img src="/img/social/twitter.min.svg" alt="Twitter"></a></li>
                                <li><a href="https://www.linkedin.com/company/teamdevsquad/"><img src="/img/social/linkedin.min.svg" alt="LinkedIn"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
