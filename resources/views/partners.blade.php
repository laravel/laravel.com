@extends('partials.layout')

@section('content')
    @include('partials.header')

    <div class="">
        <div class="content_contain">
            <div class="relative overflow-hidden">
                <div class="contain">
                    <section class="py-12 md:py-20 xl:py-28">
                        <div style="width: 120%;z-index: -9998" class="hidden md:transform md:translate-x-1/4 md:absolute md:-top-24 md:-right-48 md:flex md:items-center lg:-top-32 xl:-top-48">
                            <video poster="/img/blocks/blocks_1.jpg" playsinline autoplay muted loop>
                                <source src="/img/blocks/blocks_1.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="max-w-screen-xl mx-auto px-8 space-y-8 md:space-y-0 md:flex md:items-end">
                            <div class="md:flex-1">
                                <h1 class="max-w-md font-medium text-3xl tracking-tight sm:text-4xl md:max-w-4xl md:text-5xl md:leading-tight xl:text-6xl">Making the web a better place with Laravel</h1>
                                <p class="mt-3 max-w-xl text-gray-600 sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg">Laravel Partners are elite shops providing top-notch Laravel development and consulting. Each of our partners can help you craft a beautiful, well-architected project.</p>
                            </div>
                            <div class="md:px-12 md:flex-shrink-0 md:flex md:items-end md:justify-center">
                                <x-button.primary href="https://docs.google.com/forms/d/e/1FAIpQLSeOTE1G6zxSPbKdmQ59UKkL_Rja_ddAyG6Y6xxGdSGAWlNTFA/viewform?usp=sf_link">
                                    Become A Partner
                                </x-button.primary>
                            </div>
                        </div>
                    </section>
                </div>

                <section class="relative">
                    <div class="max-w-screen-xl mx-auto px-8 py-12 md:py-20 lg:py-32">
                        <div class="flex flex-col">
                            @if($featured == 'tighten')
                                <img class="w-full md:absolute md:right-1/2 md:top-0 md:w-224" src="/img/partners/img_tighten_detail.jpeg" alt="Tighten" style="right: 48%;">
                                <div class="p-12 bg-white shadow-lg md:relative md:w-3/4 md:ml-auto lg:px-24 lg:py-20">
                                    <h6 class="text-gray-600 font-medium text-sm">Featured Partner</h6>
                                    <img class="mt-6" src="/img/partners/tighten.min.svg" alt="Tighten">
                                    <p class="mt-6 text-gray-600 lg:text-lg">Tighten is a team of Laravel community leaders, web development industry veterans, and multi-disciplinary creators. We’ve built, rescued, refactored, and supported a huge number of Laravel applications since Laravel’s earliest days. Whatever your challenge, we have the experience and knowledge to help.</p>
                                    <a href="/partner/tighten" class="group mt-8 inline-flex items-center text-red-600 font-medium">
                                        <span>More about Tighten</span>
                                        <span class="ml-3 transform transition group-hover:translate-x-1">→</span>
                                    </a>
                                </div>
                            @elseif($featured == 'vehikl')
                                <img class="w-full md:absolute md:right-1/2 md:top-0 md:w-224" src="/img/partners/img_vehikl.jpg" alt="Vehikl">
                                <div class="p-12 bg-white shadow-lg md:relative md:w-3/4 md:ml-auto lg:px-24 lg:py-20">
                                    <h6 class="text-gray-600 font-medium text-sm">Featured Partner</h6>
                                    <img class="mt-6" src="/img/partners/vehikl.min.svg" alt="Vehikl">
                                    <p class="mt-6 text-gray-600 lg:text-lg">Vehikl is a team of code-crushing Laravel experts. Over the years we have built a variety of web applications for customers using Laravel as our framework of choice and implemented Lean Agile development techniques to build professional applications that are functional and easy to use.</p>
                                    <a href="/partner/vehikl" class="group mt-8 inline-flex items-center text-red-600 font-medium">
                                        <span>More about Vehikl</span>
                                        <span class="ml-3 transform transition group-hover:translate-x-1">→</span>
                                    </a>
                                </div>
                            @elseif($featured == 'devsquad')
                                <img class="w-full md:absolute md:right-1/2 md:top-0 md:w-224" src="/img/partners/img_devsquad_detail.jpg" alt="DevSquad" style="right: 53%;">
                                <div class="p-12 bg-white shadow-lg md:relative md:w-3/4 md:ml-auto lg:px-24 lg:py-20">
                                    <h6 class="text-gray-600 font-medium text-sm">Featured Partner</h6>
                                    <img class="mt-6" src="/img/partners/devsquad.png" alt="DevSquad" style="max-width: 200px;">
                                    <p class="mt-6 text-gray-600 lg:text-lg">DevSquad team members have unique and diverse skills, and this cross-functionality lets us successfully complete any mission.</p>
                                    <a href="/partner/dev-squad" class="group mt-8 inline-flex items-center text-red-600 font-medium">
                                        <span>More about DevSquad</span>
                                        <span class="ml-3 transform transition group-hover:translate-x-1">→</span>
                                    </a>
                                </div>
                            @elseif($featured == '64robots')
                                <img class="w-full md:absolute md:right-1/2 md:top-0 md:w-224" src="/img/partners/img_64robots_detail.jpg" alt="64Robots" style="right: 40%;">
                                <div class="p-12 bg-white shadow-lg md:relative md:w-3/4 md:ml-auto lg:px-24 lg:py-20">
                                    <h6 class="text-gray-600 font-medium text-sm">Featured Partner</h6>
                                    <img class="mt-6" src="/img/partners/64Robots.min.svg" alt="DevSquad" style="max-width: 200px;">
                                    <p class="mt-6 text-gray-600 lg:text-lg">64 Robots is a team of Laravel experts brought together by a desire to create cutting edge web products. Whether building something new or refactoring a product in need of help, we'll give you a personal and thoughtful approach to development.</p>
                                    <a href="/partner/64robots" class="group mt-8 inline-flex items-center text-red-600 font-medium">
                                        <span>More about 64 Robots</span>
                                        <span class="ml-3 transform transition group-hover:translate-x-1">→</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </section>

                <div class="max-w-screen-xl mx-auto px-8 py-12 md:py-32">
                    <ul class="grid grid-cols-1 gap-x-4 gap-y-6 md:grid-cols-2 lg:grid-cols-3 lg:gap-8">
                        @foreach($otherPartners as $i => $otherPartner)
                            <li>
                                <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                    @if($otherPartner == 'tighten')
                                        <div class="h-10">
                                            <img src="/img/partners/tighten.min.svg" alt="Tighten" class="h-full">
                                        </div>
                                        <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Their team of top-notch Laravel developers will build your product, help you take it to market, and iterate with you as things change.</p>
                                        <a href="/partner/tighten" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                            <span>More about Tighten</span>
                                            <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                        </a>
                                    @elseif($otherPartner == 'vehikl')
                                        <div class="h-10">
                                            <img src="/img/partners/vehikl.min.svg" alt="Vehikl" class="h-full">
                                        </div>
                                        <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">A team of code-crushing Laravel experts. Over the years we have built a variety of web applications for customers using Laravel.</p>
                                        <a href="/partner/vehikl" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                            <span>More about Vehikl</span>
                                            <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                        </a>
                                    @elseif($otherPartner == 'devsquad')
                                        <div class="h-10">
                                            <img src="/img/partners/devsquad.png" alt="DevSquad" class="h-full">
                                        </div>
                                        <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">DevSquad team members have unique and diverse skills, and this cross-functionality lets us successfully complete any mission.</p>
                                        <a href="/partner/dev-squad" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                            <span>More about DevSquad</span>
                                            <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                        </a>
                                    @elseif($otherPartner == '64robots')
                                        <div class="h-10">
                                            <img src="/img/partners/64Robots.min.svg" alt="64 Robots" class="h-full">
                                        </div>
                                        <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">64 Robots is a team of Laravel experts with a background in building successful startups and SaaS products.</p>
                                        <a href="/partner/64robots" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                            <span>More about 64 Robots</span>
                                            <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                        </a>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-10">
                                    <img src="/img/partners/kirschbaum-2.min.svg" alt="Kirschbaum" class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">A team of carefully curated Laravel experts with a history of delivering practical and efficient solutions to complex problems.</p>
                                <a href="/partner/kirschbaum-development-group" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>More about Kirschbaum</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-10">
                                    <img src="/img/partners/byte5.png" alt="byte5" class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Specializing in innovative open source technologies to create great web applications, sites and shops for their international clients.</p>
                                <a href="/partner/byte5" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>More about byte5</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-10">
                                    <img src="/img/partners/cubet.png" alt="Cubet" class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Cubet Techno Labs is a 150+ member Digital Engineering company, helping to deliver your digital dreams to perfection.</p>
                                <a href="/partner/cubet" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>More about Cubet</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-10">
                                    <img src="/img/partners/ideil.min.svg" alt="ideil." class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">ideil’s main focus is custom software development. This is the thing that they enjoy doing as it is always a new challenge.</p>
                                <a href="/partner/ideil" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>More about ideil.</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div>
                                    <img src="/img/partners/cyberduck.png" alt="Cyber-Duck" class="h-full w-64">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">The Cyber-Duck team is comprised of 45+ user experience experts, software developers and marketing strategists based in the UK and USA.</p>
                                <a href="/partner/cyber-duck" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>More about Cyber-Duck</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-10">
                                    <img src="/img/partners/aboutyou.svg" alt="About You" class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">ABOUT YOU is one of the fastest-growing e-commerce startups in Europe located in the city center of Hamburg.</p>
                                <a href="/partner/about-you" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>More about About You</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-14">
                                    <img src="/img/partners/romega.svg" alt="Romega Software" class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Braden and Ben are infrastructure, development, and business management leaders who offer you their expertise and partnership so you can move from ideation to deployment and beyond with confidence.</p>
                                <a href="/partner/romega-software" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>More about Romega</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-14">
                                    <img src="/img/partners/curotec.png" alt="Curotect" class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Curotec is a team of Laravel architects and senior engineers with extensive experience in web, e-commerce, integrations, and application development</p>
                                <a href="/partner/curotec" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>More about Curotec</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-14">
                                    <img src="/img/partners/jump24.jpg" alt="Jump24" class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Having worked across many different industries and client sizes, we relish in solving complex challenges to ensure that our projects are a success.</p>
                                <a href="/partner/jump24" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>More about Jump24</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-14">
                                    <img src="/img/partners/few.svg" alt="Few" class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">We design and build rad digital products for teams of all sizes, from startups to enterprise organizations.</p>
                                <a href="/partner/few" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>More about Few</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
