<div class="relative">
    <div class="max-w-screen-xl mx-auto px-8 py-12 lg:py-24">
        <div style="width: 130%;z-index: -9998" class="hidden md:transform md:-translate-x-1/2 md:absolute md:inset-y-0 md:left-0 md:w-full md:flex md:items-center xl:left-16 2xl:left-32">
            <video poster="/img/blocks/blocks_2.jpg" playsinline autoplay muted loop>
                <source src="/img/blocks/blocks_2.mp4" type="video/mp4">
            </video>
        </div>
        <div class="md:w-3/4 md:ml-auto lg:grid lg:gap-6 lg:grid-cols-5 xl:gap-16 xl:grid-cols-12">
            <div class="space-y-12 text-gray-600 md:text-lg lg:col-span-3 xl:col-span-7 parnters_body">
                {{ $content }}
            </div>
            <div class="mt-12 lg:mt-0 lg:col-span-2 xl:col-span-5">
                <div class="p-12 bg-white shadow-lg xl:p-16">
                    <h3 class="text-xl font-medium md:text-3xl">{{ $proficienciesWording ?? 'Proficiencies' }}</h3>
                    <ul class="mt-3 grid grid-cols-1 gap-4 list-custom font-medium text-sm text-gray-600 leading-4 md:grid-cols-2 lg:grid-cols-1">
                        {{ $proficiencies }}
                    </ul>
                </div>
                <ul class="mt-12 flex items-center space-x-4">
                    @isset ($twitter)
                        <li>
                            <a href="{{ $twitter }}">
                                <img class="opacity-25" src="/img/social/twitter.min.svg" alt="Twitter">
                            </a>
                        </li>
                    @endif
                    @isset ($github)
                        <li>
                            <a href="{{ $github }}">
                                <img class="opacity-25" src="/img/social/github.min.svg" alt="GitHub">
                            </a>
                        </li>
                    @endif
                    @isset ($linkedin)
                        <li>
                            <a href="{{ $linkedin }}">
                                <img class="opacity-25" src="/img/social/linkedin.min.svg" alt="LinkedIn">
                            </a>
                        </li>
                    @endif
                    @isset ($facebook)
                        <li>
                            <a href="{{ $facebook }}">
                                <img class="opacity-25" src="/img/social/facebook.min.svg" alt="Facebook">
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
