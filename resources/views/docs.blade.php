@extends('partials.layout')

@section('content')
    <x-accessibility.skip-to-content-link />
    <div class="relative overflow-auto dark:bg-dark-700" id="docsScreen">
        <div class="relative lg:flex lg:items-start">
            <aside
                x-data="{
                    navIsOpen: false,
                    init() {
                        this.$watch('navIsOpen', (val) => {
                            if (val) {
                                document.body.classList.add('overflow-hidden');
                            } else {
                                document.body.classList.remove('overflow-hidden');
                            }
                        });
                    }
                }"
                class="hidden fixed top-0 bottom-0 left-0 z-20 h-full w-16 bg-gradient-to-b from-gray-100 to-white transition-all duration-300 overflow-hidden lg:sticky lg:w-80 lg:shrink-0 lg:flex lg:flex-col lg:justify-end lg:items-end 2xl:max-w-lg 2xl:w-full dark:from-dark-800 dark:to-dark-700"
                :class="{ 'w-64': navIsOpen }"
                @click.away="navIsOpen = false"
                @keydown.window.escape="navIsOpen = false"
            >
                <div class="relative min-h-0 flex-1 flex flex-col xl:w-80">
                    <a href="/" class="flex items-center py-8 px-4 lg:px-8 xl:px-16">
                        <img
                            class="w-8 h-8 shrink-0 transition-all duration-300 lg:w-12 lg:h-12"
                            :class="{ 'w-12 h-12': navIsOpen }"
                            src="/img/logomark.min.svg"
                            alt="Laravel"
                            width="50"
                            height="52"
                        >
                        <img
                            x-show="navIsOpen"
                            x-cloak
                            class="ml-4 transition-all duration-300 lg:hidden"
                            x-transition:enter="duration-250 ease-out"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="duration-250 ease-in"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            src="/img/logotype.min.svg"
                            alt="Laravel"
                            width="114"
                            height="29"
                        >
                        <img
                            src="/img/logotype.min.svg"
                            alt="Laravel"
                            class="hidden ml-4 lg:block"
                            width="114"
                            height="29"
                        >
                    </a>
                    <div class="overflow-y-auto overflow-x-hidden px-4 lg:overflow-hidden lg:px-8 xl:px-16">
                        <nav x-show="navIsOpen" x-cloak class="mt-4 lg:hidden">
                            <div class="docs_sidebar">
                                {!! $index !!}
                            </div>
                        </nav>
                        <nav id="indexed-nav" class="hidden lg:block lg:mt-4">
                            <div class="docs_sidebar">
                                {!! $index !!}
                            </div>
                        </nav>

                        @php
                            $promote = null;

                            switch(random_int(1, 3)) {
                                case 1:
                                    $promote = 'forge';
                                    break;

                                case 2:
                                    $promote = 'vapor';
                                    break;

                                case 3:
                                    $promote = 'spark';
                                    break;
                            }
                        @endphp

                        <div :class="{ 'hidden': !navIsOpen }" x-cloak class="mt-4 px-3 py-2 border-dashed border-gray-200 border rounded-lg text-xs leading-loose text-gray-700 lg:block dark:border-gray-400 dark:text-gray-200">
                            Laravel stands united with the people of Ukraine 🇺🇦 <a class="underline text-red-600" href="https://supportukrainenow.org/" target="_blank">Assistance</a>
                        </div>

                        @if ($promote == 'forge')
                            <div :class="{ 'hidden': !navIsOpen }" x-cloak class="mt-4 px-3 py-2 border-dashed border-gray-200 border rounded-lg text-xs leading-loose text-gray-700 lg:block dark:border-gray-400 dark:text-gray-200">
                                <span class="font-medium">Laravel Forge:</span> create and manage PHP 8 servers. Deploy your Laravel applications in seconds. <a class="underline text-red-600" href="https://forge.laravel.com">Sign up now!</a>.
                            </div>
                        @endif

                        @if ($promote == 'vapor')
                            <div :class="{ 'hidden': !navIsOpen }" x-cloak class="mt-4 px-3 py-2 border-dashed border-gray-200 border rounded-lg text-xs leading-loose text-gray-700 lg:block dark:border-gray-400 dark:text-gray-200">
                                <span class="font-medium">Laravel Vapor:</span> experience extreme scale on a dedicated serverless platform for Laravel. <a class="underline text-red-600" href="https://vapor.laravel.com">Sign up now!</a>.
                            </div>
                        @endif

                        @if ($promote == 'spark')
                            <div :class="{ 'hidden': !navIsOpen }" x-cloak class="mt-4 px-3 py-2 border-dashed border-gray-200 border rounded-lg text-xs leading-loose text-gray-700 lg:block dark:border-gray-400 dark:text-gray-200">
                                <span class="font-medium">Laravel Spark:</span> The next generation of Spark is <a class="underline text-red-600" href="https://spark.laravel.com">now available</a>.
                            </div>
                        @endif
                    </div>
                    <div class="sticky bottom-0 flex-1 flex flex-col justify-end lg:hidden">
                        <div class="py-4 px-4 bg-white">
                            <button class="relative ml-1 w-6 h-6 text-red-600 lg:hidden focus:outline-none focus:shadow-outline" aria-label="Menu" @click.prevent="navIsOpen = !navIsOpen">
                                <svg x-show="! navIsOpen" x-transition.opacity class="absolute inset-0 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                                <svg x-show="navIsOpen" x-transition.opacity x-cloak class="absolute inset-0 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </aside>

            <header
                class="lg:hidden"
                @keydown.window.escape="navIsOpen = false"
                @click.away="navIsOpen = false"
            >
                <div class="relative mx-auto w-full py-10 bg-white transition duration-200 dark:bg-dark-700">
                    <div class="mx-auto px-8 sm:px-16 flex items-center justify-between">
                        <a href="/" class="flex items-center">
                            <img class="" src="/img/logomark.min.svg" alt="Laravel">
                            <img class="hidden ml-5 sm:block" src="/img/logotype.min.svg" alt="Laravel">
                        </a>
                        <div class="flex-1 flex items-center justify-end">
                            <button id="header__sun" onclick="toSystemMode()" title="Switch to system theme" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                                 </svg>
                            </button>
                            <button id="header__moon" onclick="toLightMode()" title="Switch to light mode" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M17.75,4.09L15.22,6.03L16.13,9.09L13.5,7.28L10.87,9.09L11.78,6.03L9.25,4.09L12.44,4L13.5,1L14.56,4L17.75,4.09M21.25,11L19.61,12.25L20.2,14.23L18.5,13.06L16.8,14.23L17.39,12.25L15.75,11L17.81,10.95L18.5,9L19.19,10.95L21.25,11M18.97,15.95C19.8,15.87 20.69,17.05 20.16,17.8C19.84,18.25 19.5,18.67 19.08,19.07C15.17,23 8.84,23 4.94,19.07C1.03,15.17 1.03,8.83 4.94,4.93C5.34,4.53 5.76,4.17 6.21,3.85C6.96,3.32 8.14,4.21 8.06,5.04C7.79,7.9 8.75,10.87 10.95,13.06C13.14,15.26 16.1,16.22 18.97,15.95M17.33,17.97C14.5,17.81 11.7,16.64 9.53,14.5C7.36,12.31 6.2,9.5 6.04,6.68C3.23,9.82 3.34,14.64 6.35,17.66C9.37,20.67 14.19,20.78 17.33,17.97Z" />
                                </svg>
                            </button>
                            <button id="header__indeterminate" onclick="toDarkMode()" title="Switch to dark mode" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 2A10 10 0 0 0 2 12A10 10 0 0 0 12 22A10 10 0 0 0 22 12A10 10 0 0 0 12 2M12 4A8 8 0 0 1 20 12A8 8 0 0 1 12 20V4Z" />
                                </svg>
                            </button>
                            <button class="ml-2 relative w-10 h-10 p-2 text-red-600 lg:hidden focus:outline-none focus:shadow-outline" aria-label="Menu" @click.prevent="navIsOpen = !navIsOpen">
                                <svg x-show="! navIsOpen" x-transition.opacity class="absolute inset-0 mt-2 ml-2 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                                <svg x-show="navIsOpen" x-transition.opacity x-cloak class="absolute inset-0 mt-2 ml-2 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                        </div>
                    </div>
                    <span :class="{ 'shadow-sm': navIsOpen }" class="absolute inset-0 z-20 pointer-events-none"></span>
                </div>
                <div
                    x-show="navIsOpen"
                    x-transition:enter="duration-150"
                    x-transition:leave="duration-100 ease-in"
                    x-cloak
                >
                    <nav
                        x-show="navIsOpen"
                        x-cloak
                        class="absolute w-full transform origin-top shadow-sm z-10"
                        x-transition:enter="duration-150 ease-out"
                        x-transition:enter-start="opacity-0 -translate-y-8 scale-75"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="duration-100 ease-in"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 -translate-y-8 scale-75"
                    >
                        <div class="relative p-8 bg-white docs_sidebar dark:bg-dark-600">
                            {!! $index !!}
                        </div>
                    </nav>
                </div>
            </header>

            <section class="flex-1 dark:bg-dark-700">
                <div class="max-w-screen-lg px-8 sm:px-16 lg:px-24">
                    <div class="flex flex-col items-end border-b border-gray-200 py-1 transition-colors dark:border-gray-700 lg:mt-8 lg:flex-row-reverse">
                        <div class="hidden lg:flex items-center justify-center ml-8">
                            <button id="header__sun" onclick="toSystemMode()" title="Switch to system theme" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                                 </svg>
                            </button>
                            <button id="header__moon" onclick="toLightMode()" title="Switch to light mode" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M17.75,4.09L15.22,6.03L16.13,9.09L13.5,7.28L10.87,9.09L11.78,6.03L9.25,4.09L12.44,4L13.5,1L14.56,4L17.75,4.09M21.25,11L19.61,12.25L20.2,14.23L18.5,13.06L16.8,14.23L17.39,12.25L15.75,11L17.81,10.95L18.5,9L19.19,10.95L21.25,11M18.97,15.95C19.8,15.87 20.69,17.05 20.16,17.8C19.84,18.25 19.5,18.67 19.08,19.07C15.17,23 8.84,23 4.94,19.07C1.03,15.17 1.03,8.83 4.94,4.93C5.34,4.53 5.76,4.17 6.21,3.85C6.96,3.32 8.14,4.21 8.06,5.04C7.79,7.9 8.75,10.87 10.95,13.06C13.14,15.26 16.1,16.22 18.97,15.95M17.33,17.97C14.5,17.81 11.7,16.64 9.53,14.5C7.36,12.31 6.2,9.5 6.04,6.68C3.23,9.82 3.34,14.64 6.35,17.66C9.37,20.67 14.19,20.78 17.33,17.97Z" />
                                </svg>
                            </button>
                            <button id="header__indeterminate" onclick="toDarkMode()" title="Switch to dark mode" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 2A10 10 0 0 0 2 12A10 10 0 0 0 12 22A10 10 0 0 0 22 12A10 10 0 0 0 12 2M12 4A8 8 0 0 1 20 12A8 8 0 0 1 12 20V4Z" />
                                </svg>
                            </button>
                        </div>
                        <div class="w-full lg:w-40 lg:pl-12">
                            <div>
                                <label class="text-gray-600 text-xs tracking-widest uppercase dark:text-gray-500" for="version-switcher">Version</label>
                                <div x-data class="relative w-full bg-white transition-all duration-500 focus-within:border-gray-600 dark:bg-gray-800">
                                    <select
                                        id="version-switcher"
                                        aria-label="Laravel version"
                                        class="appearance-none flex-1 w-full px-0 py-1 placeholder-gray-900 tracking-wide bg-white focus:outline-none dark:bg-dark-700 dark:text-gray-400 dark:placeholder-gray-500"
                                        @change="window.location = $event.target.value"
                                    >
                                        @foreach ($versions as $key => $display)
                                            <option {{ $currentVersion == $key ? 'selected' : '' }} value="{{ url('docs/'.$key.$currentSection) }}">{{ $display }}</option>
                                        @endforeach
                                    </select>
                                    <img class="absolute inset-y-0 right-0 mt-2.5 w-2.5 h-2.5 text-gray-900 pointer-events-none" id="docs_search__version_arrow" src="/img/icons/drop_arrow.min.svg" alt="">
                                    <img class="absolute inset-y-0 right-0 mt-2.5 w-2.5 h-2.5 text-gray-900 pointer-events-none" id="docs_search__version_arrow_dark" src="/img/icons/drop_arrow.dark.min.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="relative mt-8 flex items-center justify-end w-full h-10 lg:mt-0">
                            <div class="flex-1 flex items-center">
                                <button
                                    class="relative inline-flex items-center text-gray-800 transition-colors dark:text-gray-400 w-full"
                                    @click.prevent="$dispatch('toggle-search-modal')"
                                >
                                    <svg class="w-5 h-5 text-gray-700 pointer-events-none transition-colors dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                                    <span class="ml-3">Search</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <section class="mt-8 md:mt-16">
                        <section class="docs_main max-w-prose">
                            @unless ($currentVersion == 'master' || version_compare($currentVersion, DEFAULT_VERSION) >= 0)
                                <blockquote>
                                    <div class="mb-10 max-w-2xl mx-auto px-4 py-8 shadow-lg dark:bg-dark-600 lg:flex lg:items-center">
                                        <div class="w-20 h-20 mb-6 flex items-center justify-center shrink-0 bg-orange-600 lg:mb-0">
                                            <img src="{{ asset('/img/callouts/exclamation.min.svg') }}" alt="Icon" class="opacity-75" />
                                        </div>

                                        <p class="mb-0 lg:ml-4">
                                            <strong>WARNING</strong> You're browsing the documentation for an old version of Laravel.
                                            Consider upgrading your project to <a href="{{ route('docs.version', DEFAULT_VERSION) }}">Laravel {{ DEFAULT_VERSION }}</a>.
                                        </p>
                                    </div>
                                </blockquote>
                            @endunless

                            @if ($currentVersion == 'master' || version_compare($currentVersion, DEFAULT_VERSION) > 0)
                                <blockquote>
                                    <div class="callout">
                                        <div class="mb-10 max-w-2xl mx-auto px-4 py-8 shadow-lg lg:flex lg:items-center">
                                        <div class="w-20 h-20 mb-6 flex items-center justify-center shrink-0 bg-orange-600 lg:mb-0">
                                            <img src="{{ asset('/img/callouts/exclamation.min.svg') }}" alt="Icon" class="opacity-75" />
                                        </div>

                                        <p class="mb-0 lg:ml-4">
                                            <strong>WARNING</strong> You're browsing the documentation for an upcoming version of Laravel.
                                            The documentation and features of this release are subject to change.
                                        </p>
                                    </div>
                                </blockquote>
                            @endif
                            <x-accessibility.main-content-wrapper>
                                {!! $content !!}
                                <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CKYILK3E&placement=laravelcom" id="_carbonads_js"></script>
                            </x-accessibility.main-content-wrapper>
                        </section>
                    </section>
                </div>
            </section>
        </div>
    </div>
@stop
