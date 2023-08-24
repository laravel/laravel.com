@extends('partials.layout')

@section('content')
    <div class="lg:absolute top-0 w-full bg-gradient-to-b from-white z-20">
        @include('partials.header', ['news' => false])
    </div>

    {{-- Hero --}}
    <section>
        <div
            x-data="{
                current: null,
                intervalId: null,
                items: {
                    vue: 'Vue App',
                    react: 'React App',
                    svelte: 'Svelte App',
                    alpine: 'Alpine.js App',
                    solid: 'Solid App',
                    swift: 'Swift App',
                    electron: 'Electron App',
                    ionic: 'Ionic App',
                    next: 'Next.js App',
                    nuxt: 'Nuxt App',
                },
                get label() {
                    return this.current ? this.items[this.current] : 'Big Idea'
                },
                start() {
                    this.intervalId = setInterval(() => {
                        const active = Object.keys(this.items).indexOf(this.current)
                        const next = active + 1 === Object.keys(this.items).length ? 0 : active + 1
                        this.current = Object.keys(this.items)[next]
                    }, 3000)
                },
                highlight(item) {
                    this.current = item
                    clearInterval(this.intervalId)
                },
                resume() {
                    this.start()
                }
            }"
            class="relative h-[300px] sm:h-[500px] lg:h-screen overflow-hidden flex items-center justify-center sm:py-12"
            x-init="start"
        >
            <div class="absolute inset-0 flex items-center justify-center z-10 pointer-events-none">
                <div>
                    <h1 class="max-w-lg sm:max-w-5xl px-4 mx-auto text-4xl font-bold text-center sm:text-5xl md:text-6xl lg:text-7xl pointer-events-auto">
                        The Powerhouse Behind <br><span class="text-red-500">Your <span class="whitespace-nowrap"><span x-text="label">Big Idea</span></span></span>
                    </h1>
                    <p class="hidden sm:block mt-6 max-w-2xl mx-auto text-center text-gray-700 text-md leading-relaxed md:mt-8 md:text-lg lg:mt-10 pointer-events-auto">Laravel is an intensely productive full-stack web framework. Pair Laravel and its rich ecosystem with Livewire, React, or Vue to build your next big idea and ship faster than you ever thought possible.</p>
                    <div class="hidden sm:flex mt-6 max-w-sm mx-auto flex-col justify-center items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
                        <x-button.primary class="w-full sm:w-auto pointer-events-auto" href="/docs">
                            Get Started
                        </x-button.primary>
                        <x-button.secondary class="w-full sm:w-auto pointer-events-auto" href="https://laracasts.com" target="_blank">
                            Watch Laracasts
                        </x-button.secondary>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-8 min-h-full" style="transform: scale(125%) rotateX(60deg) rotateZ(45deg);">
                @foreach (range(1, 80) as $i)
                    @if ($i === 61)
                        <!-- Vue -->
                        <div class="even:-translate-y-1/2">
                            <div class="transition duration-300 rounded-2xl aspect-square flex items-center justify-center text-4xl opacity-25 shadow-[32px_32px_40px_-20px_theme(colors.gray.400)]" :class="current === 'vue' ? '!opacity-100 !shadow-[64px_64px_100px_-20px_theme(colors.red.400)] -translate-y-1 -translate-x-1' : ''" @mouseover="highlight('vue')" @mouseout="resume">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 221" class="w-1/2"><path fill="#41B883" d="M204.8 0H256L128 220.8L0 0h97.92L128 51.2L157.44 0h47.36Z"/><path fill="#41B883" d="m0 0l128 220.8L256 0h-51.2L128 132.48L50.56 0H0Z"/><path fill="#35495E" d="M50.56 0L128 133.12L204.8 0h-47.36L128 51.2L97.92 0H50.56Z"/></svg>
                            </div>
                        </div>
                    @elseif ($i === 54)
                        <!-- React -->
                        <div class="even:-translate-y-1/2">
                            <div class="transition duration-300 rounded-2xl aspect-square flex items-center justify-center text-4xl opacity-25 shadow-[32px_32px_40px_-20px_theme(colors.gray.400)]" :class="current === 'react' ? '!opacity-100 !shadow-[64px_64px_100px_-20px_theme(colors.red.400)] -translate-y-1 -translate-x-1' : ''" @mouseover="highlight('react')" @mouseout="resume">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 228" class="w-1/2"><path fill="#00D8FF" d="M210.483 73.824a171.49 171.49 0 0 0-8.24-2.597c.465-1.9.893-3.777 1.273-5.621c6.238-30.281 2.16-54.676-11.769-62.708c-13.355-7.7-35.196.329-57.254 19.526a171.23 171.23 0 0 0-6.375 5.848a155.866 155.866 0 0 0-4.241-3.917C100.759 3.829 77.587-4.822 63.673 3.233C50.33 10.957 46.379 33.89 51.995 62.588a170.974 170.974 0 0 0 1.892 8.48c-3.28.932-6.445 1.924-9.474 2.98C17.309 83.498 0 98.307 0 113.668c0 15.865 18.582 31.778 46.812 41.427a145.52 145.52 0 0 0 6.921 2.165a167.467 167.467 0 0 0-2.01 9.138c-5.354 28.2-1.173 50.591 12.134 58.266c13.744 7.926 36.812-.22 59.273-19.855a145.567 145.567 0 0 0 5.342-4.923a168.064 168.064 0 0 0 6.92 6.314c21.758 18.722 43.246 26.282 56.54 18.586c13.731-7.949 18.194-32.003 12.4-61.268a145.016 145.016 0 0 0-1.535-6.842c1.62-.48 3.21-.974 4.76-1.488c29.348-9.723 48.443-25.443 48.443-41.52c0-15.417-17.868-30.326-45.517-39.844Zm-6.365 70.984c-1.4.463-2.836.91-4.3 1.345c-3.24-10.257-7.612-21.163-12.963-32.432c5.106-11 9.31-21.767 12.459-31.957c2.619.758 5.16 1.557 7.61 2.4c23.69 8.156 38.14 20.213 38.14 29.504c0 9.896-15.606 22.743-40.946 31.14Zm-10.514 20.834c2.562 12.94 2.927 24.64 1.23 33.787c-1.524 8.219-4.59 13.698-8.382 15.893c-8.067 4.67-25.32-1.4-43.927-17.412a156.726 156.726 0 0 1-6.437-5.87c7.214-7.889 14.423-17.06 21.459-27.246c12.376-1.098 24.068-2.894 34.671-5.345a134.17 134.17 0 0 1 1.386 6.193ZM87.276 214.515c-7.882 2.783-14.16 2.863-17.955.675c-8.075-4.657-11.432-22.636-6.853-46.752a156.923 156.923 0 0 1 1.869-8.499c10.486 2.32 22.093 3.988 34.498 4.994c7.084 9.967 14.501 19.128 21.976 27.15a134.668 134.668 0 0 1-4.877 4.492c-9.933 8.682-19.886 14.842-28.658 17.94ZM50.35 144.747c-12.483-4.267-22.792-9.812-29.858-15.863c-6.35-5.437-9.555-10.836-9.555-15.216c0-9.322 13.897-21.212 37.076-29.293c2.813-.98 5.757-1.905 8.812-2.773c3.204 10.42 7.406 21.315 12.477 32.332c-5.137 11.18-9.399 22.249-12.634 32.792a134.718 134.718 0 0 1-6.318-1.979Zm12.378-84.26c-4.811-24.587-1.616-43.134 6.425-47.789c8.564-4.958 27.502 2.111 47.463 19.835a144.318 144.318 0 0 1 3.841 3.545c-7.438 7.987-14.787 17.08-21.808 26.988c-12.04 1.116-23.565 2.908-34.161 5.309a160.342 160.342 0 0 1-1.76-7.887Zm110.427 27.268a347.8 347.8 0 0 0-7.785-12.803c8.168 1.033 15.994 2.404 23.343 4.08c-2.206 7.072-4.956 14.465-8.193 22.045a381.151 381.151 0 0 0-7.365-13.322Zm-45.032-43.861c5.044 5.465 10.096 11.566 15.065 18.186a322.04 322.04 0 0 0-30.257-.006c4.974-6.559 10.069-12.652 15.192-18.18ZM82.802 87.83a323.167 323.167 0 0 0-7.227 13.238c-3.184-7.553-5.909-14.98-8.134-22.152c7.304-1.634 15.093-2.97 23.209-3.984a321.524 321.524 0 0 0-7.848 12.897Zm8.081 65.352c-8.385-.936-16.291-2.203-23.593-3.793c2.26-7.3 5.045-14.885 8.298-22.6a321.187 321.187 0 0 0 7.257 13.246c2.594 4.48 5.28 8.868 8.038 13.147Zm37.542 31.03c-5.184-5.592-10.354-11.779-15.403-18.433c4.902.192 9.899.29 14.978.29c5.218 0 10.376-.117 15.453-.343c-4.985 6.774-10.018 12.97-15.028 18.486Zm52.198-57.817c3.422 7.8 6.306 15.345 8.596 22.52c-7.422 1.694-15.436 3.058-23.88 4.071a382.417 382.417 0 0 0 7.859-13.026a347.403 347.403 0 0 0 7.425-13.565Zm-16.898 8.101a358.557 358.557 0 0 1-12.281 19.815a329.4 329.4 0 0 1-23.444.823c-7.967 0-15.716-.248-23.178-.732a310.202 310.202 0 0 1-12.513-19.846h.001a307.41 307.41 0 0 1-10.923-20.627a310.278 310.278 0 0 1 10.89-20.637l-.001.001a307.318 307.318 0 0 1 12.413-19.761c7.613-.576 15.42-.876 23.31-.876H128c7.926 0 15.743.303 23.354.883a329.357 329.357 0 0 1 12.335 19.695a358.489 358.489 0 0 1 11.036 20.54a329.472 329.472 0 0 1-11 20.722Zm22.56-122.124c8.572 4.944 11.906 24.881 6.52 51.026c-.344 1.668-.73 3.367-1.15 5.09c-10.622-2.452-22.155-4.275-34.23-5.408c-7.034-10.017-14.323-19.124-21.64-27.008a160.789 160.789 0 0 1 5.888-5.4c18.9-16.447 36.564-22.941 44.612-18.3ZM128 90.808c12.625 0 22.86 10.235 22.86 22.86s-10.235 22.86-22.86 22.86s-22.86-10.235-22.86-22.86s10.235-22.86 22.86-22.86Z"/></svg>
                            </div>
                        </div>
                    @elseif ($i === 19)
                        <!-- Solid -->
                        <div class="even:-translate-y-1/2">
                            <div class="transition duration-300 rounded-2xl aspect-square flex items-center justify-center text-4xl opacity-25 shadow-[32px_32px_40px_-20px_theme(colors.gray.400)]" :class="current === 'solid' ? '!opacity-100 !shadow-[64px_64px_100px_-20px_theme(colors.red.400)] -translate-y-1 -translate-x-1' : ''" @mouseover="highlight('solid')" @mouseout="resume">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 239" class="w-1/2"><defs><linearGradient id="logosSolidjsIcon0" x1="-5.859%" x2="91.406%" y1="38.27%" y2="60.924%"><stop offset="10%" stop-color="#76B3E1"/><stop offset="30%" stop-color="#DCF2FD"/><stop offset="100%" stop-color="#76B3E1"/></linearGradient><linearGradient id="logosSolidjsIcon1" x1="56.996%" x2="37.941%" y1="38.44%" y2="68.375%"><stop offset="0%" stop-color="#76B3E1"/><stop offset="50%" stop-color="#4377BB"/><stop offset="100%" stop-color="#1F3B77"/></linearGradient><linearGradient id="logosSolidjsIcon2" x1="10.709%" x2="104.337%" y1="34.532%" y2="70.454%"><stop offset="0%" stop-color="#315AA9"/><stop offset="50%" stop-color="#518AC8"/><stop offset="100%" stop-color="#315AA9"/></linearGradient><linearGradient id="logosSolidjsIcon3" x1="61.993%" x2="17.762%" y1="29.58%" y2="105.119%"><stop offset="0%" stop-color="#4377BB"/><stop offset="50%" stop-color="#1A336B"/><stop offset="100%" stop-color="#1A336B"/></linearGradient></defs><path fill="#76B3E1" d="M256 50.473S170.667-12.32 104.654 2.17l-4.83 1.61c-9.66 3.22-17.71 8.05-22.541 14.49l-3.22 4.83l-24.151 41.862l41.862 8.05c17.71 11.271 40.251 16.101 61.182 11.271l74.063 14.49L256 50.474Z"/><path fill="url(#logosSolidjsIcon0)" d="M256 50.473S170.667-12.32 104.654 2.17l-4.83 1.61c-9.66 3.22-17.71 8.05-22.541 14.49l-3.22 4.83l-24.151 41.862l41.862 8.05c17.71 11.271 40.251 16.101 61.182 11.271l74.063 14.49L256 50.474Z" opacity=".3"/><path fill="#518AC8" d="m77.283 50.473l-6.44 1.61c-27.371 8.05-35.422 33.811-20.931 56.352c16.1 20.931 49.912 32.201 77.283 24.151l99.824-33.811S141.686 35.982 77.283 50.473Z"/><path fill="url(#logosSolidjsIcon1)" d="m77.283 50.473l-6.44 1.61c-27.371 8.05-35.422 33.811-20.931 56.352c16.1 20.931 49.912 32.201 77.283 24.151l99.824-33.811S141.686 35.982 77.283 50.473Z" opacity=".3"/><path fill="url(#logosSolidjsIcon2)" d="M209.308 122.926c-18.44-23.037-49.007-32.59-77.283-24.151l-99.824 32.201L0 187.328l180.327 30.591l32.201-57.962c6.44-11.27 4.83-24.15-3.22-37.031Z"/><path fill="url(#logosSolidjsIcon3)" d="M177.107 179.278c-18.44-23.037-49.008-32.59-77.283-24.151L0 187.328s85.333 64.403 151.346 48.302l4.83-1.61c27.371-8.05 37.032-33.811 20.93-54.742Z"/></svg>
                            </div>
                        </div>
                    @elseif ($i === 42)
                        <!-- Svelte -->
                        <div class="even:-translate-y-1/2">
                            <div class="transition duration-300 rounded-2xl aspect-square flex items-center justify-center text-4xl opacity-25 shadow-[32px_32px_40px_-20px_theme(colors.gray.400)]" :class="current === 'svelte' ? '!opacity-100 !shadow-[64px_64px_100px_-20px_theme(colors.red.400)] -translate-y-1 -translate-x-1' : ''" @mouseover="highlight('svelte')" @mouseout="resume">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 308" class="w-1/2"><path fill="#FF3E00" d="M239.682 40.707C211.113-.182 154.69-12.301 113.895 13.69L42.247 59.356a82.198 82.198 0 0 0-37.135 55.056a86.566 86.566 0 0 0 8.536 55.576a82.425 82.425 0 0 0-12.296 30.719a87.596 87.596 0 0 0 14.964 66.244c28.574 40.893 84.997 53.007 125.787 27.016l71.648-45.664a82.182 82.182 0 0 0 37.135-55.057a86.601 86.601 0 0 0-8.53-55.577a82.409 82.409 0 0 0 12.29-30.718a87.573 87.573 0 0 0-14.963-66.244"/><path fill="#FFF" d="M106.889 270.841c-23.102 6.007-47.497-3.036-61.103-22.648a52.685 52.685 0 0 1-9.003-39.85a49.978 49.978 0 0 1 1.713-6.693l1.35-4.115l3.671 2.697a92.447 92.447 0 0 0 28.036 14.007l2.663.808l-.245 2.659a16.067 16.067 0 0 0 2.89 10.656a17.143 17.143 0 0 0 18.397 6.828a15.786 15.786 0 0 0 4.403-1.935l71.67-45.672a14.922 14.922 0 0 0 6.734-9.977a15.923 15.923 0 0 0-2.713-12.011a17.156 17.156 0 0 0-18.404-6.832a15.78 15.78 0 0 0-4.396 1.933l-27.35 17.434a52.298 52.298 0 0 1-14.553 6.391c-23.101 6.007-47.497-3.036-61.101-22.649a52.681 52.681 0 0 1-9.004-39.849a49.428 49.428 0 0 1 22.34-33.114l71.664-45.677a52.218 52.218 0 0 1 14.563-6.398c23.101-6.007 47.497 3.036 61.101 22.648a52.685 52.685 0 0 1 9.004 39.85a50.559 50.559 0 0 1-1.713 6.692l-1.35 4.116l-3.67-2.693a92.373 92.373 0 0 0-28.037-14.013l-2.664-.809l.246-2.658a16.099 16.099 0 0 0-2.89-10.656a17.143 17.143 0 0 0-18.398-6.828a15.786 15.786 0 0 0-4.402 1.935l-71.67 45.674a14.898 14.898 0 0 0-6.73 9.975a15.9 15.9 0 0 0 2.709 12.012a17.156 17.156 0 0 0 18.404 6.832a15.841 15.841 0 0 0 4.402-1.935l27.345-17.427a52.147 52.147 0 0 1 14.552-6.397c23.101-6.006 47.497 3.037 61.102 22.65a52.681 52.681 0 0 1 9.003 39.848a49.453 49.453 0 0 1-22.34 33.12l-71.664 45.673a52.218 52.218 0 0 1-14.563 6.398"/></svg>
                            </div>
                        </div>
                    @elseif ($i === 21)
                        <!-- Next -->
                        <div class="even:-translate-y-1/2">
                            <div class="transition duration-300 rounded-2xl aspect-square flex items-center justify-center text-4xl opacity-25 shadow-[32px_32px_40px_-20px_theme(colors.gray.400)]" :class="current === 'next' ? '!opacity-100 !shadow-[64px_64px_100px_-20px_theme(colors.red.400)] -translate-y-1 -translate-x-1' : ''" @mouseover="highlight('next')" @mouseout="resume">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="w-1/2"><defs><linearGradient id="logosNextjsIcon0" x1="55.633%" x2="83.228%" y1="56.385%" y2="96.08%"><stop offset="0%" stop-color="#FFF"/><stop offset="100%" stop-color="#FFF" stop-opacity="0"/></linearGradient><linearGradient id="logosNextjsIcon1" x1="50%" x2="49.953%" y1="0%" y2="73.438%"><stop offset="0%" stop-color="#FFF"/><stop offset="100%" stop-color="#FFF" stop-opacity="0"/></linearGradient><circle id="logosNextjsIcon2" cx="128" cy="128" r="128"/></defs><mask id="logosNextjsIcon3" fill="#fff"><use href="#logosNextjsIcon2"/></mask><g mask="url(#logosNextjsIcon3)"><circle cx="128" cy="128" r="128"/><path fill="url(#logosNextjsIcon0)" d="M212.634 224.028L98.335 76.8H76.8v102.357h17.228V98.68L199.11 234.446a128.433 128.433 0 0 0 13.524-10.418Z"/><path fill="url(#logosNextjsIcon1)" d="M163.556 76.8h17.067v102.4h-17.067z"/></g></svg>
                            </div>
                        </div>
                    @elseif ($i === 51)
                        <!-- Nuxt -->
                        <div class="even:-translate-y-1/2">
                            <div class="transition duration-300 rounded-2xl aspect-square flex items-center justify-center text-4xl opacity-25 shadow-[32px_32px_40px_-20px_theme(colors.gray.400)]" :class="current === 'nuxt' ? '!opacity-100 !shadow-[64px_64px_100px_-20px_theme(colors.red.400)] -translate-y-1 -translate-x-1' : ''" @mouseover="highlight('nuxt')" @mouseout="resume">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 168" class="w-1/2"><path fill="#00DC82" d="M143.618 167.029h95.166c3.023 0 5.992-.771 8.61-2.237a16.963 16.963 0 0 0 6.302-6.115a16.324 16.324 0 0 0 2.304-8.352c0-2.932-.799-5.811-2.312-8.35L189.778 34.6a16.966 16.966 0 0 0-6.301-6.113a17.626 17.626 0 0 0-8.608-2.238c-3.023 0-5.991.772-8.609 2.238a16.964 16.964 0 0 0-6.3 6.113l-16.342 27.473l-31.95-53.724a16.973 16.973 0 0 0-6.304-6.112A17.638 17.638 0 0 0 96.754 0c-3.022 0-5.992.772-8.61 2.237a16.973 16.973 0 0 0-6.303 6.112L2.31 141.975a16.302 16.302 0 0 0-2.31 8.35c0 2.932.793 5.813 2.304 8.352a16.964 16.964 0 0 0 6.302 6.115a17.628 17.628 0 0 0 8.61 2.237h59.737c23.669 0 41.123-10.084 53.134-29.758l29.159-48.983l15.618-26.215l46.874 78.742h-62.492l-15.628 26.214Zm-67.64-26.24l-41.688-.01L96.782 35.796l31.181 52.492l-20.877 35.084c-7.976 12.765-17.037 17.416-31.107 17.416Z"/></svg>
                            </div>
                        </div>
                    @elseif ($i === 39)
                        <!-- Alpine.js -->
                        <div class="even:-translate-y-1/2">
                            <div class="transition duration-300 rounded-2xl aspect-square flex items-center justify-center text-4xl opacity-25 shadow-[32px_32px_40px_-20px_theme(colors.gray.400)]" :class="current === 'alpine' ? '!opacity-100 !shadow-[64px_64px_100px_-20px_theme(colors.red.400)] -translate-y-1 -translate-x-1' : ''" @mouseover="highlight('alpine')" @mouseout="resume">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 118" class="w-1/2"><path fill="#77C1D2" d="M199.111 0L256 56.639l-56.889 56.64l-56.889-56.64z"/><path fill="#2D3441" d="m56.889 0l117.938 117.421H61.049L0 56.639z"/></svg>
                            </div>
                        </div>
                    @elseif ($i === 58)
                        <!-- Ionic -->
                        <div class="even:-translate-y-1/2">
                            <div class="transition duration-300 rounded-2xl aspect-square flex items-center justify-center text-4xl opacity-25 shadow-[32px_32px_40px_-20px_theme(colors.gray.400)]" :class="current === 'ionic' ? '!opacity-100 !shadow-[64px_64px_100px_-20px_theme(colors.red.400)] -translate-y-1 -translate-x-1' : ''" @mouseover="highlight('ionic')" @mouseout="resume">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="w-1/2"><path fill="#3880FF" d="M128.152.001c20.777 0 40.34 4.854 58.692 14.257l2.426 1.214l-2.123 1.668c-5.156 4.095-9.251 9.403-11.83 15.469l-.758 1.668l-1.516-.758c-14.105-6.673-29.119-10.161-44.74-10.161c-57.782 0-104.644 47.014-104.644 104.644s46.71 104.645 104.493 104.645c57.782 0 104.644-47.014 104.644-104.645c0-13.8-2.578-27.298-8.038-40.038L224 86.296l1.668-.758c6.218-2.275 11.678-6.066 16.076-10.92l1.668-2.123l1.062 2.427C252.209 91.756 256 109.652 256 127.699c0 70.521-57.479 128-128 128S0 198.22 0 127.7S57.479-.3 128.152.001Zm0 69.764c32 0 58.237 26.086 58.388 58.389c0 32.303-26.085 58.389-58.388 58.389c-32.304 0-58.389-26.086-58.389-58.389c0-32.303 26.237-58.389 58.389-58.389Zm83.564-48.227c14.741 0 26.692 11.95 26.692 26.692c0 14.741-11.95 26.692-26.692 26.692s-26.692-11.95-26.692-26.692s11.95-26.692 26.692-26.692Z"/></svg>
                            </div>
                        </div>
                    @elseif ($i === 48)
                        <!-- Swift -->
                        <div class="even:-translate-y-1/2">
                            <div class="transition duration-300 rounded-2xl aspect-square flex items-center justify-center text-4xl opacity-25 shadow-[32px_32px_40px_-20px_theme(colors.gray.400)]" :class="current === 'swift' ? '!opacity-100 !shadow-[64px_64px_100px_-20px_theme(colors.red.400)] -translate-y-1 -translate-x-1' : ''" @mouseover="highlight('swift')" @mouseout="resume">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="w-1/2"><linearGradient id="logosSwift0" x1="-1845.501" x2="-1797.134" y1="1255.639" y2="981.338" gradientTransform="rotate(180 -846.605 623.252)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#FAAE42"/><stop offset="1" stop-color="#EF3E31"/></linearGradient><path fill="url(#logosSwift0)" d="M56.9 0h141.8c6.9 0 13.6 1.1 20.1 3.4c9.4 3.4 17.9 9.4 24.3 17.2c6.5 7.8 10.8 17.4 12.3 27.4c.6 3.7.7 7.4.7 11.1v138.3c0 4.4-.2 8.9-1.1 13.2c-2 9.9-6.7 19.2-13.5 26.7c-6.7 7.5-15.5 13.1-25 16.1c-5.8 1.8-11.8 2.6-17.9 2.6c-2.7 0-142.1 0-144.2-.1c-10.2-.5-20.3-3.8-28.8-9.5c-8.3-5.6-15.1-13.4-19.5-22.4c-3.8-7.7-5.7-16.3-5.7-24.9V56.9C.2 48.4 2 40 5.7 32.4c4.3-9 11-16.9 19.3-22.5C33.5 4.1 43.5.7 53.7.2c1-.2 2.1-.2 3.2-.2z"/><linearGradient id="logosSwift1" x1="130.612" x2="95.213" y1="4.136" y2="204.893" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#E39F3A"/><stop offset="1" stop-color="#D33929"/></linearGradient><path fill="url(#logosSwift1)" d="M216 209.4c-.9-1.4-1.9-2.8-3-4.1c-2.5-3-5.4-5.6-8.6-7.8c-4-2.7-8.7-4.4-13.5-4.6c-3.4-.2-6.8.4-10 1.6c-3.2 1.1-6.3 2.7-9.3 4.3c-3.5 1.8-7 3.6-10.7 5.1c-4.4 1.8-9 3.2-13.7 4.2c-5.9 1.1-11.9 1.5-17.8 1.4c-10.7-.2-21.4-1.8-31.6-4.8c-9-2.7-17.6-6.4-25.7-11.1c-7.1-4.1-13.7-8.8-19.9-14.1c-5.1-4.4-9.8-9.1-14.2-14.1c-3-3.5-5.9-7.2-8.6-11c-1.1-1.5-2.1-3.1-3-4.7L0 121.2V56.7C0 25.4 25.3 0 56.6 0h50.5l37.4 38c84.4 57.4 57.1 120.7 57.1 120.7s24 27 14.4 50.7z"/><path fill="#FFF" d="M144.7 38c84.4 57.4 57.1 120.7 57.1 120.7s24 27.1 14.3 50.8c0 0-9.9-16.6-26.5-16.6c-16 0-25.4 16.6-57.6 16.6c-71.7 0-105.6-59.9-105.6-59.9C91 192.1 135.1 162 135.1 162c-29.1-16.9-91-97.7-91-97.7c53.9 45.9 77.2 58 77.2 58c-13.9-11.5-52.9-67.7-52.9-67.7c31.2 31.6 93.2 75.7 93.2 75.7C179.2 81.5 144.7 38 144.7 38z"/></svg>
                            </div>
                        </div>
                    @elseif ($i === 12)
                        <!-- Electron -->
                        <div class="even:-translate-y-1/2">
                            <div class="transition duration-300 rounded-2xl aspect-square flex items-center justify-center text-4xl opacity-25 shadow-[32px_32px_40px_-20px_theme(colors.gray.400)]" :class="current === 'electron' ? '!opacity-100 !shadow-[64px_64px_100px_-20px_theme(colors.red.400)] -translate-y-1 -translate-x-1' : ''" @mouseover="highlight('electron')" @mouseout="resume">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 278" class="w-1/2"><path fill="#47848F" d="M90.317 59.645c-36.264-6.605-64.936.308-76.364 20.101c-8.527 14.77-6.09 34.353 5.912 55.285a3.719 3.719 0 1 0 6.452-3.699c-10.811-18.856-12.915-35.757-5.923-47.867c9.493-16.442 35.068-22.608 68.59-16.503a3.719 3.719 0 1 0 1.333-7.317Zm53.63-33.684c-2.959 5.723-8.932 9.635-15.819 9.635c-9.83 0-17.798-7.969-17.798-17.798C110.33 7.968 118.3 0 128.128 0c9.83 0 17.798 7.968 17.798 17.798c0 .257-.006.513-.016.767c29.461 15.237 49.933 67.197 49.933 127.226c0 24.69-3.452 48.382-9.879 68.92a3.719 3.719 0 1 1-7.097-2.221c6.196-19.802 9.539-42.747 9.539-66.699c0-56.524-18.789-105.163-44.458-119.83ZM16.469 193.319a18.05 18.05 0 0 1 1.33-.05c9.83 0 17.798 7.97 17.798 17.799c0 9.83-7.969 17.797-17.798 17.797c-9.83 0-17.798-7.968-17.798-17.797c0-6.692 3.693-12.52 9.151-15.56c-2.68-33.265 32.283-77.855 85.12-108.36c21.946-12.671 44.798-21.665 66.267-26.265a3.719 3.719 0 0 1 1.558 7.273c-20.69 4.433-42.817 13.141-64.107 25.433c-49.759 28.728-82.66 70.134-81.52 99.73Zm206.26 26.546a17.716 17.716 0 0 1-2.324-8.797c0-9.83 7.969-17.798 17.798-17.798c9.83 0 17.798 7.968 17.798 17.798c0 9.83-7.968 17.797-17.798 17.797a17.717 17.717 0 0 1-10.38-3.338c-28.392 16.703-82.625 8.184-133.66-21.282c-21.726-12.543-40.776-27.657-55.439-43.77a3.719 3.719 0 0 1 5.5-5.006c14.134 15.532 32.581 30.167 53.657 42.335c48.165 27.808 98.886 36.084 124.847 22.061Zm-1.166-63.914a3.719 3.719 0 0 1-5.676-4.805c21.946-25.926 29.34-51.086 19.867-67.492c-6.876-11.91-22.159-18.52-43.362-18.796a3.719 3.719 0 1 1 .097-7.437c23.575.307 41.315 7.98 49.706 22.514c11.404 19.752 3.113 47.965-20.632 76.016ZM72.564 221.49a3.719 3.719 0 0 1 7.001-2.507c11.476 32.045 29.591 51.082 48.563 51.082c13.645 0 26.91-9.774 37.71-27.74a3.719 3.719 0 0 1 6.375 3.832c-12.018 19.99-27.428 31.345-44.085 31.345c-22.839 0-43.15-21.344-55.564-56.011Zm175.999-10.423c0-5.722-4.639-10.361-10.36-10.361c-5.723 0-10.362 4.639-10.362 10.36c0 5.723 4.64 10.361 10.361 10.361c5.722 0 10.36-4.638 10.36-10.36Zm-230.765 10.36c5.722 0 10.36-4.638 10.36-10.36c0-5.722-4.638-10.361-10.36-10.361c-5.722 0-10.36 4.639-10.36 10.36c0 5.723 4.638 10.361 10.36 10.361Zm110.33-193.27c5.722 0 10.36-4.638 10.36-10.36c0-5.722-4.638-10.36-10.36-10.36c-5.722 0-10.36 4.638-10.36 10.36c0 5.722 4.638 10.36 10.36 10.36Zm2.718 130.22c-6.951 1.502-13.8-2.916-15.305-9.868c-1.499-6.952 2.916-13.8 9.868-15.305c6.951-1.502 13.8 2.915 15.305 9.867c1.502 6.952-2.916 13.8-9.868 15.305Z"/></svg>
                            </div>
                        </div>
                    @elseif ($i === 76)
                        <!-- Empty -->
                        <div class="rounded-2xl shadow-[32px_32px_40px_-20px_theme(colors.gray.400)] aspect-square even:-translate-y-1/2 flex items-center justify-center text-4xl opacity-25"></div>
                    @else
                        <div class="aspect-square even:-translate-y-1/2 flex items-center justify-center text-4xl text-gray-200"></div>
                    @endif
                @endforeach
            </div>
        </div>

        <p class="sm:hidden px-4 text-center text-gray-700 text-md leading-relaxed">Laravel is an intensely productive full-stack web framework. Pair Laravel and its rich ecosystem with Livewire, React, or Vue to build your next big idea and ship faster than you ever thought possible.</p>

        <div class="sm:hidden px-4 flex mt-6 max-w-sm mx-auto flex-col justify-center items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
            <x-button.primary class="w-full sm:w-auto" href="/docs">
                Get Started
            </x-button.primary>
            <x-button.secondary class="w-full sm:w-auto" href="https://laracasts.com" target="_blank">
                Watch Laracasts
            </x-button.secondary>
        </div>
    </section>

    {{-- Features --}}
    <section class="bg-gray-50 py-16 sm:py-32">
        <div class="relative max-w-screen-xl w-full mx-auto px-5">
            <div class="hidden lg:block z-0 absolute x-translate-y-12 top-[50px] pointer-events-none right-[300px]">
                <x-cube />
            </div>
            <div class="hidden lg:block z-0 absolute x-translate-y-20 pointer-events-none -right-[40px]">
                <x-cube :delay="2000" />
            </div>
            <div class="hidden lg:block z-0 absolute top-[300px] x-translate-y-20 pointer-events-none right-[80px]">
                <x-cube :delay="1000" />
            </div>

            <h2 class="text-4xl font-bold max-w-lg md:text-5xl">Everything you need to be amazing.</h2>
            <p class="mt-6 text-gray-700 leading-relaxed max-w-3xl">Out of the box, Laravel has elegant solutions for the common features needed by all modern web applications. It's time to start building amazing applications and stop wasting time searching for packages and reinventing the wheel.</p>

            @include('partials.features')

            <p class="mt-12 text-gray-700 leading-relaxed max-w-3xl">We've just scratched the surface. Laravel has you covered for everything you will need to build a web application, including email verification, rate limiting, and custom console commands. Check out the <a href="https://laravel.com/docs" class="text-red-600 underline hover:no-underline">Laravel documentation</a> to keep learning or get started right away with our <a href="https://bootcamp.laravel.com" class="text-red-600 underline hover:no-underline">Laravel bootcamp</a>.</p>
        </div>
    </section>

    {{-- Approaches --}}
    <section class="py-16 sm:py-24 max-w-screen-xl px-5 mx-auto">
        <h2 class="text-4xl font-bold md:text-5xl">One Framework,<br>Many Flavors.</h2>
        <p class="mt-6 text-gray-700 leading-relaxed max-w-3xl">There are dozens of ways to build your application's frontend. Thankfully, your options are wide open with Laravel. Whether you prefer a traditional PHP backend, a modern frontend using Laravel Livewire, or can't get enough React and Vue, Laravel allows you to deliver highly polished and maintainable applications in a fraction of the time.</p>

        <div
            x-data="{
                tab: 'inertia',
                dropdownOpen: false,
                tabs: ['inertia', 'livewire', 'traditional'],
                init() {
                    this.changeTab(location.hash.substring(1))

                    window.addEventListener('hashchange', () => this.changeTab(location.hash.substring(1)))
                },
                changeTab(tab, scroll = false) {
                    this.dropdownOpen = false
                    if (this.tabs.includes(tab)) {
                        this.tab = tab
                        history.pushState(null, null, '#' + tab)
                        if (scroll) {
                            const anchor = document.getElementsByName(tab)[0]
                            if (anchor && anchor.getBoundingClientRect().top < 0) {
                                anchor.scrollIntoView({ behavior: 'smooth' })
                            }
                        }
                    }
                }
            }"
            class="relative"
        >
            @push('inertia-mobile-nav')
                <div class="flex items-center gap-3 p-3">
                    <div class="flex-shrink-0 bg-gray-100 rounded-full h-12 w-12 flex items-center justify-center">
                        <svg class="h-4 fill-purple-600" viewBox="0 0 60 35" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.7673 0.789917H0.770508L17.1944 17.895L0.770508 35H17.7673L34.1912 17.895L17.7673 0.789917Z" />
                            <path d="M43.4535 0.789917H26.4567L42.8805 17.895L26.4567 35H43.4535L59.8773 17.895L43.4535 0.789917Z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold md:text-lg text-gray-800">Inertia</h3>
                        <p class="mt-1 text-sm text-gray-700">Supercharge Laravel with React, Vue, or Svelte</p>
                    </div>
                </div>
            @endpush

            @push('livewire-mobile-nav')
                <div class="flex items-center gap-3 p-3">
                    <div class="flex-shrink-0 bg-gray-100 rounded-full h-12 w-12 flex items-center justify-center">
                        <svg class="h-7" viewBox="0 0 75 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_13_53)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M66.7854 51.3246C65.5703 53.1971 64.647 55.5042 62.1764 55.5042C58.0185 55.5042 57.7937 48.9696 53.6335 48.9696C49.4733 48.9696 49.6981 55.5042 45.5402 55.5042C41.3822 55.5042 41.1574 48.9696 36.9972 48.9696C32.837 48.9696 33.0618 55.5042 28.9039 55.5042C24.7459 55.5042 24.5211 48.9696 20.3609 48.9696C16.2007 48.9696 16.4256 55.5042 12.2676 55.5042C10.9608 55.5042 10.0426 54.8587 9.26851 53.9736C6.29323 48.6963 4.58154 42.5122 4.58154 35.9005C4.58154 16.5435 19.253 0.851562 37.3513 0.851562C55.4495 0.851562 70.121 16.5435 70.121 35.9005C70.121 41.4352 68.9215 46.6703 66.7854 51.3246Z" fill="#FB70A9"/>
                                <path d="M24.2647 47.8645V62.3817C24.2647 64.9869 22.1926 67.0988 19.6365 67.0988C17.0804 67.0988 15.0083 64.9869 15.0083 62.3817L15.0083 44.8564C15.8721 43.2403 16.8589 41.8411 18.638 41.8411C21.534 41.8411 22.5459 45.549 24.2647 47.8645ZM41.749 48.6208V71.5776C41.749 74.4722 39.4466 76.8187 36.6065 76.8187C33.7664 76.8187 31.4641 74.4722 31.4641 71.5776V45.595C32.4325 43.692 33.4306 41.8411 35.4768 41.8411C38.7162 41.8411 39.5982 46.4804 41.749 48.6208ZM58.2048 48.1995V64.8656C58.2048 67.4707 56.1326 69.5826 53.5766 69.5826C51.0205 69.5826 48.9484 67.4707 48.9484 64.8656V44.3811C49.7542 42.9754 50.7137 41.8411 52.3156 41.8411C55.356 41.8411 56.3197 45.9276 58.2048 48.1995Z" fill="#4E56A6"/>
                                <path d="M24.2647 52.3137C23.4437 51.2891 22.4719 50.5288 21.0664 50.5288C17.7289 50.5288 17.1162 54.8158 15.0083 56.7485L15.0083 38.2572C15.0083 35.6521 17.0804 33.5402 19.6365 33.5402C22.1926 33.5402 24.2647 35.6521 24.2647 38.2572V52.3137ZM41.749 52.6445C40.8734 51.4571 39.8498 50.5288 38.2968 50.5288C34.5837 50.5288 34.2433 55.8351 31.4641 57.3022V49.1244C31.4641 46.2298 33.7664 43.8832 36.6065 43.8832C39.4466 43.8832 41.749 46.2298 41.749 49.1244V52.6445ZM58.2048 51.7267C57.4923 51.0118 56.6475 50.5288 55.5272 50.5288C51.9302 50.5288 51.4983 55.5083 48.9484 57.1535V40.5557C48.9484 37.9505 51.0205 35.8386 53.5766 35.8386C56.1326 35.8386 58.2048 37.9505 58.2048 40.5557V51.7267Z" fill="black" fill-opacity="0.298514"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M66.7854 51.3246C65.5703 53.1971 64.647 55.5042 62.1764 55.5042C58.0185 55.5042 57.7937 48.9696 53.6335 48.9696C49.4733 48.9696 49.6981 55.5042 45.5402 55.5042C41.3822 55.5042 41.1574 48.9696 36.9972 48.9696C32.837 48.9696 33.0618 55.5042 28.9039 55.5042C24.7459 55.5042 24.5211 48.9696 20.3609 48.9696C16.2007 48.9696 16.4256 55.5042 12.2676 55.5042C10.9608 55.5042 10.0426 54.8587 9.26851 53.9736C6.29323 48.6963 4.58154 42.5122 4.58154 35.9005C4.58154 16.5435 19.253 0.851562 37.3513 0.851562C55.4495 0.851562 70.121 16.5435 70.121 35.9005C70.121 41.4352 68.9215 46.6703 66.7854 51.3246Z" fill="#FB70A9"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M59.6943 54.806C68.2818 41.7857 68.5037 27.3432 60.36 11.4785C66.3964 17.7813 70.121 26.4307 70.121 35.9744C70.121 41.4883 68.8777 46.7036 66.6637 51.3404C65.4041 53.2058 64.4472 55.5042 61.8864 55.5042C61.01 55.5042 60.3021 55.235 59.6943 54.806Z" fill="#E24CA6"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M35.5944 44.6437C46.9901 44.6437 51.7883 37.9059 51.7883 28.3371C51.7883 18.7683 44.5381 9.96033 35.5944 9.96033C26.6508 9.96033 19.4005 18.7683 19.4005 28.3371C19.4005 37.9059 24.1987 44.6437 35.5944 44.6437Z" fill="white"/>
                                <path d="M31.2404 28.8785C34.5942 28.8785 37.3131 25.8199 37.3131 22.0469C37.3131 18.2739 34.5942 15.2153 31.2404 15.2153C27.8865 15.2153 25.1677 18.2739 25.1677 22.0469C25.1677 25.8199 27.8865 28.8785 31.2404 28.8785Z" fill="#030776"/>
                                <path d="M30.2283 23.6235C31.9052 23.6235 33.2646 22.2118 33.2646 20.4704C33.2646 18.729 31.9052 17.3174 30.2283 17.3174C28.5513 17.3174 27.1919 18.729 27.1919 20.4704C27.1919 22.2118 28.5513 23.6235 30.2283 23.6235Z" fill="white"/>
                            </g>
                            <defs>
                                <filter id="filter0_d_13_53" x="0.581543" y="0.851562" width="73.5395" height="83.9672" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_13_53"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_13_53" result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold md:text-lg text-gray-800">Livewire</h3>
                        <p class="mt-1 text-sm text-gray-700">Reactive server-rendered templates with PHP</p>
                    </div>
                </div>
            @endpush

            @push('traditional-mobile-nav')
                <div class="flex items-center gap-3 p-3">
                    <div class="flex-shrink-0 bg-gray-100 rounded-full h-12 w-12 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold md:text-lg text-gray-800">Traditional SPAs <span class="whitespace-nowrap">&amp; Mobile Applications</span></h3>
                        <p class="text-sm text-gray-700">Build powerful APIs faster than ever</p>
                    </div>
                </div>
            @endpush

            <div class="md:hidden mt-4 pt-4 bg-white sticky top-0 z-10 rounded-b-lg">
                <button class="w-full border border-red-400 rounded-lg bg-white text-left flex items-center shadow-sm" :class="{ 'rounded-b-none border-b-transparent': dropdownOpen }" @click="dropdownOpen = ! dropdownOpen">
                    <div x-show="tab === 'inertia'" class="flex-1">
                        @stack('inertia-mobile-nav')
                    </div>
                    <div x-show="tab === 'livewire'" class="flex-1">
                        @stack('livewire-mobile-nav')
                    </div>
                    <div x-show="tab === 'traditional'" class="flex-1">
                        @stack('traditional-mobile-nav')
                    </div>
                    <div class="flex-shrink-0 flex items-center pr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-5 h-5 fill-gray-700 transition" :class="{ 'rotate-180': dropdownOpen }">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>

                <div class="relative">
                    <div x-show="dropdownOpen" @click.outside="dropdownOpen = false" class="absolute top-0 border border-red-400 rounded-b-lg border-t-0 w-full z-10 bg-white shadow-sm">
                        <a x-show="tab !== 'inertia'" href="#inertia" @click.prevent="changeTab('inertia', true)">
                            @stack('inertia-mobile-nav')
                        </a>
                        <a x-show="tab !== 'livewire'" href="#livewire" @click.prevent="changeTab('livewire', true)">
                            @stack('livewire-mobile-nav')
                        </a>
                        <a x-show="tab !== 'traditional'" href="#traditional" @click.prevent="changeTab('traditional', true)">
                            @stack('traditional-mobile-nav')
                        </a>
                    </div>
                </div>
            </div>

            <div class="hidden md:grid pt-0 mt-12 grid-cols-3 gap-6">
                <a href="#inertia" @click.prevent="changeTab('inertia')" class="p-4 border-b-[3px]" :class="tab === 'inertia' ? 'border-red-500' : 'border-gray-200 hover:bg-gray-50 hover:border-gray-300'">
                    <div class="bg-gray-100 rounded-full h-12 w-12 flex items-center justify-center">
                        <svg class="h-4 fill-purple-600" viewBox="0 0 60 35" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.7673 0.789917H0.770508L17.1944 17.895L0.770508 35H17.7673L34.1912 17.895L17.7673 0.789917Z" />
                            <path d="M43.4535 0.789917H26.4567L42.8805 17.895L26.4567 35H43.4535L59.8773 17.895L43.4535 0.789917Z" />
                        </svg>
                    </div>
                    <h3 class="mt-2 font-bold text-lg text-gray-800">Inertia</h3>
                    <p class="mt-1 text-sm text-gray-700">Supercharge Laravel with React, Vue, or Svelte</p>
                </a>

                <a href="#livewire" @click.prevent="changeTab('livewire')" class="p-4 border-b-[3px]" :class="tab === 'livewire' ? 'border-red-500' : 'border-gray-200 hover:bg-gray-50 hover:border-gray-300'">
                    <div class="bg-gray-100 rounded-full h-12 w-12 flex items-center justify-center">
                        <svg class="h-7" viewBox="0 0 75 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_13_53)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M66.7854 51.3246C65.5703 53.1971 64.647 55.5042 62.1764 55.5042C58.0185 55.5042 57.7937 48.9696 53.6335 48.9696C49.4733 48.9696 49.6981 55.5042 45.5402 55.5042C41.3822 55.5042 41.1574 48.9696 36.9972 48.9696C32.837 48.9696 33.0618 55.5042 28.9039 55.5042C24.7459 55.5042 24.5211 48.9696 20.3609 48.9696C16.2007 48.9696 16.4256 55.5042 12.2676 55.5042C10.9608 55.5042 10.0426 54.8587 9.26851 53.9736C6.29323 48.6963 4.58154 42.5122 4.58154 35.9005C4.58154 16.5435 19.253 0.851562 37.3513 0.851562C55.4495 0.851562 70.121 16.5435 70.121 35.9005C70.121 41.4352 68.9215 46.6703 66.7854 51.3246Z" fill="#FB70A9"/>
                                <path d="M24.2647 47.8645V62.3817C24.2647 64.9869 22.1926 67.0988 19.6365 67.0988C17.0804 67.0988 15.0083 64.9869 15.0083 62.3817L15.0083 44.8564C15.8721 43.2403 16.8589 41.8411 18.638 41.8411C21.534 41.8411 22.5459 45.549 24.2647 47.8645ZM41.749 48.6208V71.5776C41.749 74.4722 39.4466 76.8187 36.6065 76.8187C33.7664 76.8187 31.4641 74.4722 31.4641 71.5776V45.595C32.4325 43.692 33.4306 41.8411 35.4768 41.8411C38.7162 41.8411 39.5982 46.4804 41.749 48.6208ZM58.2048 48.1995V64.8656C58.2048 67.4707 56.1326 69.5826 53.5766 69.5826C51.0205 69.5826 48.9484 67.4707 48.9484 64.8656V44.3811C49.7542 42.9754 50.7137 41.8411 52.3156 41.8411C55.356 41.8411 56.3197 45.9276 58.2048 48.1995Z" fill="#4E56A6"/>
                                <path d="M24.2647 52.3137C23.4437 51.2891 22.4719 50.5288 21.0664 50.5288C17.7289 50.5288 17.1162 54.8158 15.0083 56.7485L15.0083 38.2572C15.0083 35.6521 17.0804 33.5402 19.6365 33.5402C22.1926 33.5402 24.2647 35.6521 24.2647 38.2572V52.3137ZM41.749 52.6445C40.8734 51.4571 39.8498 50.5288 38.2968 50.5288C34.5837 50.5288 34.2433 55.8351 31.4641 57.3022V49.1244C31.4641 46.2298 33.7664 43.8832 36.6065 43.8832C39.4466 43.8832 41.749 46.2298 41.749 49.1244V52.6445ZM58.2048 51.7267C57.4923 51.0118 56.6475 50.5288 55.5272 50.5288C51.9302 50.5288 51.4983 55.5083 48.9484 57.1535V40.5557C48.9484 37.9505 51.0205 35.8386 53.5766 35.8386C56.1326 35.8386 58.2048 37.9505 58.2048 40.5557V51.7267Z" fill="black" fill-opacity="0.298514"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M66.7854 51.3246C65.5703 53.1971 64.647 55.5042 62.1764 55.5042C58.0185 55.5042 57.7937 48.9696 53.6335 48.9696C49.4733 48.9696 49.6981 55.5042 45.5402 55.5042C41.3822 55.5042 41.1574 48.9696 36.9972 48.9696C32.837 48.9696 33.0618 55.5042 28.9039 55.5042C24.7459 55.5042 24.5211 48.9696 20.3609 48.9696C16.2007 48.9696 16.4256 55.5042 12.2676 55.5042C10.9608 55.5042 10.0426 54.8587 9.26851 53.9736C6.29323 48.6963 4.58154 42.5122 4.58154 35.9005C4.58154 16.5435 19.253 0.851562 37.3513 0.851562C55.4495 0.851562 70.121 16.5435 70.121 35.9005C70.121 41.4352 68.9215 46.6703 66.7854 51.3246Z" fill="#FB70A9"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M59.6943 54.806C68.2818 41.7857 68.5037 27.3432 60.36 11.4785C66.3964 17.7813 70.121 26.4307 70.121 35.9744C70.121 41.4883 68.8777 46.7036 66.6637 51.3404C65.4041 53.2058 64.4472 55.5042 61.8864 55.5042C61.01 55.5042 60.3021 55.235 59.6943 54.806Z" fill="#E24CA6"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M35.5944 44.6437C46.9901 44.6437 51.7883 37.9059 51.7883 28.3371C51.7883 18.7683 44.5381 9.96033 35.5944 9.96033C26.6508 9.96033 19.4005 18.7683 19.4005 28.3371C19.4005 37.9059 24.1987 44.6437 35.5944 44.6437Z" fill="white"/>
                                <path d="M31.2404 28.8785C34.5942 28.8785 37.3131 25.8199 37.3131 22.0469C37.3131 18.2739 34.5942 15.2153 31.2404 15.2153C27.8865 15.2153 25.1677 18.2739 25.1677 22.0469C25.1677 25.8199 27.8865 28.8785 31.2404 28.8785Z" fill="#030776"/>
                                <path d="M30.2283 23.6235C31.9052 23.6235 33.2646 22.2118 33.2646 20.4704C33.2646 18.729 31.9052 17.3174 30.2283 17.3174C28.5513 17.3174 27.1919 18.729 27.1919 20.4704C27.1919 22.2118 28.5513 23.6235 30.2283 23.6235Z" fill="white"/>
                            </g>
                            <defs>
                                <filter id="filter0_d_13_53" x="0.581543" y="0.851562" width="73.5395" height="83.9672" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_13_53"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_13_53" result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <h3 class="mt-2 font-bold text-lg text-gray-800">Livewire</h3>
                    <p class="mt-1 text-sm text-gray-700">Reactive server-rendered templates with PHP</p>
                </a>

                <a href="#traditional" @click.prevent="changeTab('traditional')" class="p-4 border-b-[3px]" :class="tab === 'traditional' ? 'border-red-500' : 'border-gray-200 hover:bg-gray-50 hover:border-gray-300'">
                    <div class="bg-gray-100 rounded-full h-12 w-12 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                        </svg>
                    </div>
                    <h3 class="mt-2 font-bold text-lg text-gray-800">Traditional SPAs <span class="whitespace-nowrap">&amp; Mobile Applications</span></h3>
                    <p class="mt-1 text-sm text-gray-700">Build powerful APIs faster than ever</p>
                </a>
            </div>

            <div class="mt-8 md:mt-12">
                <a name="inertia" class="absolute top-0"></a>
                <div x-cloak x-show="tab === 'inertia'">
                    <p class="text-gray-700 max-w-4xl leading-relaxed">Laravel Inertia handles routing and transferring data between your Laravel back-end and frontend — no need to build an API or maintain two sets of routes. Pass data effortlessly from your database directly to the props of your frontend page components with all of the features of Laravel at your fingertips in one fantastic monorepo</p>

                    <div class="mt-12 bg-dark-600 grid grid-cols-1 md:grid-cols-2 divide-x divide-dark-500 rounded-lg overflow-hidden">
                        <div class="flex flex-col">
                            <div class="bg-dark-700 flex pt-3 pl-3">
                                <div class="py-2 px-4 rounded-t-md text-gray-200 bg-dark-600 text-sm">UserController.php</div>
                            </div>
                            <pre class="leading-8 rounded-none m-0 flex-1"><x-torchlight-code language="php">
                                // torchlight! {"lineNumbers": true}
                                class UserController
                                {
                                    public function index()
                                    {
                                        $users = User::active()
                                            ->orderByName()
                                            ->get(['id', 'name', 'email']);

                                        return Inertia::render('Users', [
                                            'users' => $users,
                                        ]);
                                    }
                                }
                            </x-torchlight-code></pre>
                        </div>

                        <div class="flex flex-col">
                            <div class="bg-dark-700 flex pt-3 pl-3">
                                <div class="py-2 px-4 rounded-t-md text-gray-200 bg-dark-600 text-sm">Users.jsx</div>
                            </div>
                            <pre class="leading-8 rounded-none m-0 flex-1"><x-torchlight-code language="jsx">
                                // torchlight! {"lineNumbers": true}
                                import Layout from './Layout'

                                export default function Users({ users }) {
                                  return (
                                    <Layout>
                                      {users.map(user => (
                                        <Link href={route('users.show', user)}>
                                          {user.name} ({user.email})
                                        </Link>
                                      ))}
                                    </Layout>
                                  )
                                }
                            </x-torchlight-code></pre>
                        </div>
                    </div>

                    <div class="mt-8 md:mt-12 grid grid-cols-1 md:grid-cols-2 md:gap-12 items-center">
                        <div>
                            <p class="text-gray-700 max-w-4xl leading-relaxed">Inertia gives you the developer experience and simplicity of creating a server-rendered, multi-page application with the user experience and responsiveness of a JavaScript SPA.</p>
                            <p class="mt-4 text-gray-700 max-w-4xl leading-relaxed">Your frontend components can focus on user interactions instead of API calls and data manipulation &mdash; no more manually triggering HTTP requests and juggling responses.</p>
                            <p class="mt-4 text-gray-700 max-w-4xl leading-relaxed">Inertia even offers server-side rendering on initial page loads for applications that benefit from search engine optimization.</p>
                            <p class="mt-4 leading-relaxed"><a href="https://inertiajs.com" class="text-red-600 underline hover:no-underline">Learn more</a></p>
                        </div>

                        <div class="mt-8 md:mt-0 border p-6">
                            <h4 class="font-bold text-lg text-gray-900">How does it work?</h4>
                            <p class="mt-4 text-gray-700 max-w-4xl leading-relaxed">Your application's initial page load will return an Inertia-powered SPA and page props in a single request. Subsequent requests from clicking links or submitting forms will automatically return only the page props that are needed.</p>
                            <p class="mt-4 text-gray-700 max-w-4xl leading-relaxed">When you deploy new assets, Inertia will automatically perform the next request as a full page load, so your users will have the latest assets without missing a beat.</p>
                        </div>
                    </div>
                </div>

                <a name="livewire" class="absolute top-0"></a>
                <div x-cloak x-show="tab === 'livewire'">
                    <p class="text-gray-700 max-w-4xl leading-relaxed">Livewire is a modern way to build dynamic interfaces using server-rendered templates instead of a JavaScript framework. It combines the simplicity and speed of building a server-rendered application with the user experience of a JavaScript SPA. You have to see it to believe it.</p>

                    <div class="mt-8 md:mt-12 bg-dark-600 grid grid-cols-1 md:grid-cols-2 divide-x divide-dark-500 rounded-lg overflow-hidden">
                        <div class="flex flex-col">
                            <div class="bg-dark-700 flex pt-3 pl-3">
                                <div class="py-2 px-4 rounded-t-md text-gray-200 bg-dark-600 text-sm">Search.php</div>
                            </div>
                            <pre class="leading-8 rounded-none m-0 flex-1"><x-torchlight-code language="php">
                                // torchlight! {"lineNumbers": true}
                                use Livewire\Component;

                                class Search extends Component
                                {
                                    public $search = '';

                                    public function render()
                                    {
                                        $users = User::search($this->search)->get();

                                        return view('livewire.search', [
                                            'users' => $users,
                                        ]);
                                    }
                                }
                            </x-torchlight-code></pre>
                        </div>

                        <div class="flex flex-col">
                            <div class="bg-dark-700 flex pt-3 pl-3">
                                <div class="py-2 px-4 rounded-t-md text-gray-200 bg-dark-600 text-sm">search.blade.php</div>
                            </div>
                            <pre class="leading-8 rounded-none m-0 flex-1"><x-torchlight-code language="blade"><?php echo <<<'HTML'
                                // torchlight! {"lineNumbers": true}
                                <div>
                                    <input wire:model="search"
                                        type="text"
                                        placeholder="Search users..." />

                                    <ul>
                                        @foreach ($users as $user)
                                            <li>{{ $user->username }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            HTML; ?></x-torchlight-code></pre>
                        </div>
                    </div>

                    <div class="mt-8 md:mt-12 grid grid-cols-1 md:grid-cols-2 md:gap-12 items-center">
                        <div>
                            <p class="text-gray-700 max-w-4xl leading-relaxed">When using Livewire, you won't need JavaScript to manage the DOM or state - you'll just sprinkle it in for some thoughtful interactions. <a href="https://alpinejs.dev" target="_blank" class="text-red-600 underline hover:no-underline">Alpine.js</a> is the perfect light-weight JavaScript library to pair with your Livewire application.</p>
                            <p class="mt-4 text-gray-700 max-w-4xl leading-relaxed">As the state of your Livewire component changes, your frontend will automatically be updated. But, Livewire doesn't stop there. Support for real-time validation, event handling, file downloads, authorization and more is included.</p>
                            <p class="mt-4 leading-relaxed"><a href="https://livewire.laravel.com/" class="text-red-600 underline hover:no-underline">Learn more</a></p>
                        </div>

                        <div class="mt-8 sm:mt-0 border p-6">
                            <h4 class="font-bold text-lg text-gray-900">How does it work?</h4>
                            <p class="mt-4 text-gray-700 max-w-4xl leading-relaxed">Livewire renders your HTML on the server using the Blade templating language. It automatically adds the JavaScript required to make the page reactive, and automatically re-renders components and updates the DOM as data changes.</p>
                        </div>
                    </div>
                </div>

                <a name="traditional" class="absolute top-0"></a>
                <div x-cloak x-show="tab === 'traditional'">
                    <p class="text-gray-700 max-w-4xl leading-relaxed">Don't need a frontend? No problem. Laravel is the perfect back-end API for your JavaScript SPAs and mobile applications. You'll have access to all of Laravel's features while maintaining the frontend development workflow you're used to.</p>

                    <div class="mt-8 md:mt-12 bg-dark-600 grid grid-cols-1 md:grid-cols-2 divide-x divide-dark-500 rounded-lg overflow-hidden">
                        <div class="flex flex-col">
                            <div class="bg-dark-700 flex pt-3 pl-3">
                                <div class="py-2 px-4 rounded-t-md text-gray-200 bg-dark-600 text-sm">UserController.php</div>
                            </div>
                            <pre class="leading-8 rounded-none m-0 flex-1"><x-torchlight-code language="php">
                                // torchlight! {"lineNumbers": true}
                                class UserController
                                {
                                    public function index()
                                    {
                                        return User::active()
                                            ->orderByName()
                                            ->paginate(25, ['id', 'name', 'email']);
                                    }
                                }
                            </x-torchlight-code></pre>
                        </div>

                        <div class="flex flex-col">
                            <div class="bg-dark-700 flex pt-3 pl-3">
                                <div class="py-2 px-4 rounded-t-md text-gray-200 bg-dark-600 text-sm">result.json</div>
                            </div>
                            <pre class="leading-8 rounded-none m-0 flex-1"><x-torchlight-code language="json">
                                // torchlight! {"lineNumbers": true}
                                {
                                    "data": [
                                        {
                                            "id": 1,
                                            "name": "Taylor Otwell",
                                            "email": "taylor@laravel.com",
                                        },
                                        // ...
                                    ],
                                    "from": 1,
                                    "to": 25,
                                    "total": 50,
                                    "per_page": 25,
                                    "current_page": 1,
                                    "last_page": 2,
                                    "first_page_url": "https://api.laravel.app/users?page=1",
                                    "last_page_url": "https://api.laravel.app/users?page=2",
                                    "next_page_url": "https://api.laravel.app/users?page=2",
                                    "prev_page_url": null,
                                    "path": "https://api.laravel.app/users",
                                }
                            </x-torchlight-code></pre>
                        </div>
                    </div>

                    <p class="mt-8 text-gray-700 max-w-4xl leading-relaxed">For authentication, you may leverage Laravel's secure, cookie-based authentication. Or, you may use Laravel Sanctum or Laravel Passport if you're building a mobile application or your frontend is hosted separately from your back-end API.</p>
                    <p class="mt-4 text-gray-700 max-w-4xl leading-relaxed">If your API operates at extreme scale, pair your Laravel application with <a href="https://laravel.com/docs/octane" class="text-red-600 underline hover:no-underline">Laravel Octane</a> and <a href="https://vapor.laravel.com" class="text-red-600 underline hover:no-underline">Laravel Vapor</a> to handle your traffic without breaking a sweat.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Starter Kits --}}
    <section class="bg-gray-50 py-16 sm:py-24">
        <div class="max-w-screen-xl px-5 mx-auto">
            <h2 class="text-4xl font-bold md:text-5xl">Dive in with<br class="hidden md:inline"> a Starter Kit.</h2>
            <p class="mt-6 text-gray-700 leading-relaxed max-w-3xl">
                Whether you prefer Livewire or React, Laravel's starter kits let you hit the ground running. In minutes, you can have a fully functioning application that pairs Laravel and Tailwind with the frontend of your choice.
            </p>

            <div class="mt-12 md:grid grid-cols-1 md:grid-cols-2 md:gap-8 bg-white rounded-t-lg border">
                <div class="p-10">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 272 48" class="h-12 max-w-full" role="image">
                        <title>Laravel Breeze</title>
                        <circle fill="#fcbf24" cx="24" cy="24" r="24"/>
                        <path fill="#d97707" d="M11.979 24l12.021-12.021 12.021 12.021-12.021 12.021z"/>
                        <path fill="#fef3c7" d="M41 7l-17 17v-12l5-5h12zm-17 17l17 17v-12l-5-5h-12zm-5 17l5-5v-12l-17 17h12zm-12-22l5 5h12l-17-17v12z"/>
                        <path d="M74.1 30.7h8v3.9h-12.1v-20.7h4.1v16.8zm21.2-10.9h3.9v14.8h-3.9v-1.7c-1.1 1.3-2.7 2.2-4.9 2.2-4 0-7.3-3.4-7.3-7.8s3.3-7.8 7.3-7.8c2.2 0 3.8.8 4.9 2.2v-1.9zm0 7.4c0-2.5-1.8-4.2-4.2-4.2-2.4 0-4.1 1.7-4.1 4.2s1.8 4.2 4.1 4.2c2.5 0 4.2-1.7 4.2-4.2zm11.2-4.9v-2.5h-3.9v14.8h3.9v-7.1c0-3.1 2.5-4 4.5-3.8v-4.3c-1.8.1-3.7.9-4.5 2.9zm17.6-2.5h3.9v14.8h-3.9v-1.7c-1.1 1.3-2.7 2.2-4.9 2.2-4 0-7.3-3.4-7.3-7.8s3.3-7.8 7.3-7.8c2.2 0 3.8.8 4.9 2.2v-1.9zm0 7.4c0-2.5-1.8-4.2-4.2-4.2-2.4 0-4.1 1.7-4.1 4.2s1.8 4.2 4.1 4.2c2.4 0 4.2-1.7 4.2-4.2zm13.5 3l-3.6-10.4h-4.2l5.7 14.8h4.4l5.7-14.8h-4.2l-3.8 10.4zm23.9-3c0 .6-.1 1.1-.1 1.6h-11.4c.5 2 2.2 2.8 4.2 2.8 1.5 0 2.7-.6 3.3-1.5l3.1 1.8c-1.4 2-3.6 3.2-6.5 3.2-5 0-8.2-3.4-8.2-7.8s3.2-7.8 7.9-7.8c4.5-.1 7.7 3.3 7.7 7.7zm-3.9-1.4c-.5-2.1-2.1-3-3.7-3-2.1 0-3.5 1.1-3.9 3h7.6zm6.5-12.8v21.6h3.9v-21.6h-3.9zM192.7 23.9c1.1-.4 1.9-1 2.5-1.8.6-.8.9-1.8.9-2.9 0-1.8-.6-3.1-1.8-4-1.2-.9-2.9-1.4-5-1.4h-8.3v20.8h8.5c2.2 0 4-.5 5.2-1.5 1.2-1 1.8-2.4 1.8-4.2 0-1.3-.3-2.4-1-3.3-.7-.8-1.6-1.4-2.8-1.7zm-9.9-8.6h6.1c3.5 0 5.2 1.3 5.2 3.9 0 1.3-.4 2.3-1.3 3-.9.7-2.2 1-3.9 1h-6.1v-7.9zm10.6 16.7c-.8.7-2.2 1-4 1h-6.6v-8.2h6.6c3.5 0 5.2 1.4 5.2 4.2 0 1.4-.4 2.4-1.2 3zm14-12.4c.5 0 .9 0 1.3.1l-.1 1.6c-.4-.1-.8-.1-1.4-.1-1.5 0-2.6.5-3.4 1.4-.7.9-1.1 2.1-1.1 3.4v8.6h-1.7v-10.6c0-1.5-.1-2.9-.2-4.1h1.7l.2 2.7c.4-1 1-1.8 1.8-2.3s1.8-.7 2.9-.7zm9.7 0c-1.4 0-2.6.3-3.6.9-1.1.6-1.9 1.5-2.5 2.7-.6 1.2-.9 2.5-.9 4 0 2.4.7 4.2 2 5.5s3.1 2 5.4 2c1.1 0 2.1-.2 3.1-.5 1-.4 1.9-.8 2.5-1.4l-.7-1.4c-1.5 1.2-3.1 1.8-4.9 1.8-1.8 0-3.1-.5-4.1-1.6-.9-1-1.4-2.5-1.4-4.5v-.1h11.4v-.4c0-2.2-.6-4-1.7-5.2-1-1.2-2.6-1.8-4.6-1.8zm-4.9 6.1c.2-1.5.8-2.6 1.6-3.4.9-.8 2-1.2 3.4-1.2s2.4.4 3.2 1.2c.8.8 1.2 1.9 1.3 3.4h-9.5zm21.2-6.1c-1.4 0-2.6.3-3.6.9-1.1.6-1.9 1.5-2.5 2.7-.6 1.2-.9 2.5-.9 4 0 2.4.7 4.2 2 5.5s3.1 2 5.4 2c1.1 0 2.1-.2 3.1-.5 1-.4 1.9-.8 2.5-1.4l-.7-1.4c-1.5 1.2-3.1 1.8-4.9 1.8-1.8 0-3.1-.5-4.1-1.6-.9-1-1.4-2.5-1.4-4.5v-.1h11.4v-.4c0-2.2-.6-4-1.7-5.2-1.1-1.2-2.6-1.8-4.6-1.8zm-5 6.1c.2-1.5.8-2.6 1.6-3.4.9-.8 2-1.2 3.4-1.2s2.4.4 3.2 1.2c.8.8 1.2 1.9 1.3 3.4h-9.5zm16.5 7.4h10.2v1.5h-12.5v-1.2l10-12h-9.6v-1.4h11.8v1.3l-9.9 11.8zm26.1-6v-.4c0-2.2-.6-4-1.7-5.2-1.1-1.2-2.6-1.9-4.6-1.9-1.4 0-2.6.3-3.6.9-1.1.6-1.9 1.5-2.5 2.7-.6 1.2-.9 2.5-.9 4 0 2.4.7 4.2 2 5.5s3.1 2 5.4 2c1.1 0 2.1-.2 3.1-.5 1-.4 1.9-.8 2.5-1.4l-.7-1.4c-1.5 1.2-3.1 1.8-4.9 1.8-1.8 0-3.1-.5-4.1-1.6-.9-1-1.4-2.5-1.4-4.5v-.1h11.4zm-9.6-4.8c.9-.8 2-1.2 3.4-1.2s2.4.4 3.2 1.2c.8.8 1.2 1.9 1.3 3.4h-9.5c.2-1.5.7-2.6 1.6-3.4z" class="fill-gray-900" />
                    </svg>
                    <p class="mt-6">Laravel Breeze is a light-weight starter kit that includes Tailwind styled authentication user profile management templates.</p>
                    <ul class="mt-6 space-y-4 flex-1">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="text-green-500 fill-current inline-block flex-shrink-0 h-6 py-1 mr-2">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            <div>User registration and login</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="text-green-500 fill-current inline-block flex-shrink-0 h-6 py-1 mr-2">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            <div>Password resets</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="text-green-500 fill-current inline-block flex-shrink-0 h-6 py-1 mr-2">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            <div>Email verification</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="text-green-500 fill-current inline-block flex-shrink-0 h-6 py-1 mr-2">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            <div>User profile management</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="text-green-500 fill-current inline-block flex-shrink-0 h-6 py-1 mr-2">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            <div>Blade or Inertia (with Vue or React)</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="text-green-500 fill-current inline-block flex-shrink-0 h-6 py-1 mr-2">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            <div>Optional TypeScript support</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="text-green-500 fill-current inline-block flex-shrink-0 h-6 py-1 mr-2">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            <div>Optional dark mode support</div>
                        </li>
                    </ul>
                    <p class="mt-6"><a href="/docs/starter-kits#laravel-breeze" class="font-semibold text-[#d97707] underline hover:no-underline">Learn more</a></p>
                </div>
                <div class="hidden md:block relative overflow-hidden mt-10">
                    <img width="1372" height="907" class="absolute max-w-none border shadow-xl rounded-lg" src="img/frontend/breeze-profile.png" />
                </div>
            </div>

            <div class="grid grid-cols-6 lg:items-center lg:gap-12 bg-white border shadow-xlg rounded-b-lg border-t-0 p-10">
                <div class="col-span-6 lg:col-span-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 317 48" class="h-12 max-w-full" role="image">
                        <path d="M74.09 30.04V13h-4.14v21H82.1v-3.96h-8.01zM95.379 19v1.77c-1.08-1.35-2.7-2.19-4.89-2.19-3.99 0-7.29 3.45-7.29 7.92s3.3 7.92 7.29 7.92c2.19 0 3.81-.84 4.89-2.19V34h3.87V19h-3.87zm-4.17 11.73c-2.37 0-4.14-1.71-4.14-4.23 0-2.52 1.77-4.23 4.14-4.23 2.4 0 4.17 1.71 4.17 4.23 0 2.52-1.77 4.23-4.17 4.23zM106.628 21.58V19h-3.87v15h3.87v-7.17c0-3.15 2.55-4.05 4.56-3.81V18.7c-1.89 0-3.78.84-4.56 2.88zM124.295 19v1.77c-1.08-1.35-2.7-2.19-4.89-2.19-3.99 0-7.29 3.45-7.29 7.92s3.3 7.92 7.29 7.92c2.19 0 3.81-.84 4.89-2.19V34h3.87V19h-3.87zm-4.17 11.73c-2.37 0-4.14-1.71-4.14-4.23 0-2.52 1.77-4.23 4.14-4.23 2.4 0 4.17 1.71 4.17 4.23 0 2.52-1.77 4.23-4.17 4.23zM141.544 19l-3.66 10.5-3.63-10.5h-4.26l5.7 15h4.41l5.7-15h-4.26zM150.354 28.09h11.31c.09-.51.15-1.02.15-1.59 0-4.41-3.15-7.92-7.59-7.92-4.71 0-7.92 3.45-7.92 7.92s3.18 7.92 8.22 7.92c2.88 0 5.13-1.17 6.54-3.21l-3.12-1.8c-.66.87-1.86 1.5-3.36 1.5-2.04 0-3.69-.84-4.23-2.82zm-.06-3c.45-1.92 1.86-3.03 3.93-3.03 1.62 0 3.24.87 3.72 3.03h-7.65zM164.516 34h3.87V12.1h-3.87V34zM185.248 34.36c3.69 0 6.9-2.01 6.9-6.3V13h-2.1v15.06c0 3.03-2.07 4.26-4.8 4.26-2.19 0-3.93-.78-4.62-2.61l-1.77 1.05c1.05 2.43 3.57 3.6 6.39 3.6zM203.124 18.64c-4.65 0-7.83 3.45-7.83 7.86 0 4.53 3.24 7.86 7.98 7.86 3.03 0 5.34-1.41 6.6-3.45l-1.74-1.02c-.81 1.44-2.46 2.55-4.83 2.55-3.18 0-5.55-1.89-5.97-4.95h13.17c.03-.3.06-.63.06-.93 0-4.11-2.85-7.92-7.44-7.92zm0 1.92c2.58 0 4.98 1.71 5.4 5.01h-11.19c.39-2.94 2.64-5.01 5.79-5.01zM221.224 20.92V19h-4.32v-4.2l-1.98.6V19h-3.15v1.92h3.15v9.09c0 3.6 2.25 4.59 6.3 3.99v-1.74c-2.91.12-4.32.33-4.32-2.25v-9.09h4.32zM225.176 22.93c0-1.62 1.59-2.37 3.15-2.37 1.44 0 2.97.57 3.6 2.1l1.65-.96c-.87-1.86-2.79-3.06-5.25-3.06-3 0-5.13 1.89-5.13 4.29 0 5.52 8.76 3.39 8.76 7.11 0 1.77-1.68 2.4-3.45 2.4-2.01 0-3.57-.99-4.11-2.52l-1.68.99c.75 1.92 2.79 3.45 5.79 3.45 3.21 0 5.43-1.77 5.43-4.32 0-5.52-8.76-3.39-8.76-7.11zM244.603 20.92V19h-4.32v-4.2l-1.98.6V19h-3.15v1.92h3.15v9.09c0 3.6 2.25 4.59 6.3 3.99v-1.74c-2.91.12-4.32.33-4.32-2.25v-9.09h4.32zM249.883 21.49V19h-1.98v15h1.98v-8.34c0-3.72 2.34-4.98 4.74-4.98v-1.92c-1.92 0-3.69.63-4.74 2.73zM263.358 18.64c-4.65 0-7.83 3.45-7.83 7.86 0 4.53 3.24 7.86 7.98 7.86 3.03 0 5.34-1.41 6.6-3.45l-1.74-1.02c-.81 1.44-2.46 2.55-4.83 2.55-3.18 0-5.55-1.89-5.97-4.95h13.17c.03-.3.06-.63.06-.93 0-4.11-2.85-7.92-7.44-7.92zm0 1.92c2.58 0 4.98 1.71 5.4 5.01h-11.19c.39-2.94 2.64-5.01 5.79-5.01zM286.848 19v2.94c-1.26-2.01-3.39-3.3-6.06-3.3-4.23 0-7.74 3.42-7.74 7.86s3.51 7.86 7.74 7.86c2.67 0 4.8-1.29 6.06-3.3V34h1.98V19h-1.98zm-5.91 13.44c-3.33 0-5.91-2.61-5.91-5.94 0-3.33 2.58-5.94 5.91-5.94s5.91 2.61 5.91 5.94c0 3.33-2.58 5.94-5.91 5.94zM309.01 18.64c-1.92 0-3.75.87-4.86 2.73-.84-1.74-2.46-2.73-4.56-2.73-1.8 0-3.42.72-4.59 2.55V19h-1.98v15H295v-8.31c0-3.72 2.16-5.13 4.32-5.13 2.13 0 3.51 1.41 3.51 4.08V34h1.98v-8.31c0-3.72 1.86-5.13 4.17-5.13 2.13 0 3.66 1.41 3.66 4.08V34h1.98v-9.36c0-3.75-2.31-6-5.61-6z" class="fill-gray-900" />
                        <path d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z" fill="#6875F5"/>
                        <path d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z" fill="#6875F5"/>
                    </svg>
                    <p class="mt-6">Laravel Jetstream is a powerful starter kit with authentication views, user profile management, team management, and much more.</p>
                    <p class="hidden lg:block mt-6"><a href="/docs/starter-kits#laravel-jetstream" class="font-semibold text-jetstream underline hover:no-underline">Learn more</a></p>
                </div>
                <ul class="mt-6 lg:mt-0 space-y-4 col-span-6 md:col-span-3 lg:col-span-2">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="text-green-500 fill-current inline-block flex-shrink-0 h-6 py-1 mr-2">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        User registration and login
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="text-green-500 fill-current inline-block flex-shrink-0 h-6 py-1 mr-2">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Password resets
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="text-green-500 fill-current inline-block flex-shrink-0 h-6 py-1 mr-2">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Email verification
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="text-green-500 fill-current inline-block flex-shrink-0 h-6 py-1 mr-2">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        User profile management
                    </li>
                </ul>
                <ul class="mt-4 md:mt-6 lg:mt-0 space-y-4 col-span-6 md:col-span-3 lg:col-span-2">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="text-green-500 fill-current inline-block flex-shrink-0 h-6 py-1 mr-2">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        User profile photos
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="text-green-500 fill-current inline-block flex-shrink-0 h-6 py-1 mr-2">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Livewire or Inertia (with Vue)
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="text-green-500 fill-current inline-block flex-shrink-0 h-6 py-1 mr-2">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Optional team management
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="text-green-500 fill-current inline-block flex-shrink-0 h-6 py-1 mr-2">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Optional dark mode, and more...
                    </li>
                </ul>
                <p class="lg:hidden col-span-6 mt-6"><a href="/docs/starter-kits#laravel-jetstream" class="font-semibold text-jetstream underline hover:no-underline">Learn more</a></p>
            </div>
        </div>
    </section>

    {{-- Community --}}
    <section class="py-16 sm:py-24">
        <div class="max-w-screen-xl px-5 mx-auto">
            <h2 class="text-4xl font-bold md:text-5xl">Community<br>and ecosystem.</h2>
            <p class="mt-6 text-gray-700 leading-relaxed max-w-3xl">Laravel's biggest strength is its passionate community and ecosystem. Enjoy conferences held around the globe or stop by your local meetup. Learn from Laracasts, our dedicated course platform, and enjoy a plethora of packages and tutorials.</p>
        </div>

        <div class="mt-12 max-w-screen-2xl w-full mx-auto grid grid-cols-2 md:grid-cols-4 px-4">
            <img src="/img/frontend/community-2.jpg" class="md:-mx-2 scale-105 md:scale-100 border-[10px] lg:border-[16px] w-full border-white shadow-xl -rotate-2 lg:-rotate-2" />
            <img src="/img/frontend/community-1.jpg" class="md:-mx-3 scale-105 md:scale-100 border-[10px] lg:border-[16px] w-full border-white shadow-xl rotate-2 lg:rotate-1" />
            <img src="/img/frontend/community-3.jpg" class="md:-mx-2 scale-105 md:scale-100 border-[10px] lg:border-[16px] w-full border-white shadow-xl -rotate-2 lg:-rotate-3" />
            <img src="/img/frontend/community-4.jpg" class="md:-mx-3 scale-105 md:scale-100 border-[10px] lg:border-[16px] w-full border-white shadow-xl rotate-2 lg:rotate-2" />
        </div>

        <div class="mt-24 max-w-screen-xl px-5 mx-auto flex flex-wrap justify-center items-center gap-12">
            <a href="https://laracasts.com">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6" viewBox="0 0 157 18">
                    <g fill="none" fill-rule="evenodd">
                        <path fill="#4A4A4A" fill-rule="nonzero" d="M0 2.694h3.406V14.65h7.38v2.778H0V2.694zM26.024 14.27H19.19l-1.303 3.157h-3.49l6.56-14.734h3.364l6.581 14.734h-3.574l-1.304-3.157zm-1.072-2.59l-2.334-5.64-2.334 5.64h4.668zm20.368 5.747l-2.839-4.105h-3.133v4.105h-3.406V2.694h6.37c1.305 0 2.437.217 3.397.652.96.435 1.7 1.053 2.218 1.853.519.8.778 1.747.778 2.841 0 1.095-.263 2.038-.788 2.831-.526.793-1.273 1.4-2.24 1.821l3.301 4.736H45.32zm-.063-9.388c0-.828-.267-1.463-.8-1.905-.532-.442-1.31-.663-2.333-.663h-2.776v5.136h2.776c1.023 0 1.801-.224 2.334-.673.532-.45.799-1.081.799-1.895zm19.337 6.23h-6.833l-1.304 3.158h-3.49l6.56-14.734h3.364l6.582 14.734h-3.575l-1.304-3.157zm-1.072-2.588L61.188 6.04l-2.334 5.642h4.668zm17.824 5.999c-1.5 0-2.857-.327-4.07-.98a7.3 7.3 0 0 1-2.859-2.715c-.694-1.157-1.04-2.466-1.04-3.925 0-1.46.346-2.768 1.04-3.926a7.3 7.3 0 0 1 2.86-2.715c1.212-.653 2.576-.979 4.09-.979 1.275 0 2.428.225 3.459.674a6.929 6.929 0 0 1 2.596 1.936l-2.186 2.02c-.996-1.15-2.23-1.725-3.701-1.725-.911 0-1.724.2-2.44.6-.714.4-1.271.957-1.67 1.673-.4.716-.6 1.53-.6 2.442 0 .912.2 1.726.6 2.442.399.715.956 1.273 1.67 1.673.716.4 1.529.6 2.44.6 1.472 0 2.705-.583 3.7-1.747l2.187 2.02a6.817 6.817 0 0 1-2.607 1.958c-1.037.45-2.194.674-3.47.674zm36.026 0a12.03 12.03 0 0 1-3.375-.474c-1.087-.316-1.96-.726-2.618-1.231l1.156-2.568c.631.463 1.381.835 2.25 1.115.87.28 1.738.421 2.608.421.967 0 1.682-.144 2.144-.431.463-.288.694-.67.694-1.147 0-.351-.137-.642-.41-.874-.273-.232-.624-.417-1.051-.558a20.91 20.91 0 0 0-1.735-.463c-1.121-.266-2.04-.533-2.754-.8a4.475 4.475 0 0 1-1.84-1.284c-.512-.59-.768-1.375-.768-2.357 0-.856.232-1.632.694-2.326.463-.695 1.16-1.246 2.092-1.653.933-.406 2.071-.61 3.417-.61.94 0 1.858.112 2.755.337.897.224 1.682.547 2.355.968l-1.052 2.59c-1.36-.773-2.72-1.159-4.079-1.159-.953 0-1.657.155-2.113.464-.456.308-.683.715-.683 1.22 0 .506.262.88.788 1.127.526.245 1.328.487 2.408.726 1.121.266 2.04.533 2.754.8a4.561 4.561 0 0 1 1.84 1.263c.512.575.767 1.354.767 2.336 0 .842-.234 1.61-.704 2.305-.47.694-1.174 1.245-2.113 1.652-.94.407-2.082.61-3.427.61zm14.922-12.209h-4.71V2.694h12.826v2.778h-4.71v11.956h-3.406V5.472zm18.18 12.209a12.03 12.03 0 0 1-3.374-.474c-1.086-.316-1.96-.726-2.618-1.231l1.157-2.568c.63.463 1.38.835 2.25 1.115.869.28 1.738.421 2.607.421.967 0 1.682-.144 2.144-.431.463-.288.694-.67.694-1.147 0-.351-.136-.642-.41-.874-.273-.232-.623-.417-1.051-.558a20.91 20.91 0 0 0-1.735-.463c-1.121-.266-2.04-.533-2.754-.8a4.475 4.475 0 0 1-1.84-1.284c-.512-.59-.768-1.375-.768-2.357 0-.856.232-1.632.694-2.326.463-.695 1.16-1.246 2.092-1.653.933-.406 2.072-.61 3.417-.61.94 0 1.858.112 2.755.337.897.224 1.682.547 2.355.968l-1.051 2.59c-1.36-.773-2.72-1.159-4.08-1.159-.953 0-1.657.155-2.113.464-.455.308-.683.715-.683 1.22 0 .506.263.88.788 1.127.526.245 1.328.487 2.408.726 1.121.266 2.04.533 2.754.8a4.561 4.561 0 0 1 1.84 1.263c.512.575.768 1.354.768 2.336 0 .842-.235 1.61-.705 2.305-.47.694-1.174 1.245-2.113 1.652-.94.407-2.082.61-3.427.61z"/>
                        <g fill="#4A4A4A" fill-rule="nonzero">
                            <path d="M94.06 4.688l2.4 2.401a1.266 1.266 0 1 1-1.79 1.79l-2.401-2.4a1.266 1.266 0 1 1 1.79-1.79zM99.191 9.82l5.143 5.143a1.266 1.266 0 1 1-1.79 1.79L97.4 11.612a1.266 1.266 0 1 1 1.79-1.79z"/>
                            <path d="M92.843 4.363l13.816-3.59a1.303 1.303 0 0 1 1.583.915 1.264 1.264 0 0 1-.9 1.56L93.525 6.836a1.303 1.303 0 0 1-1.583-.914 1.264 1.264 0 0 1 .9-1.56z"/>
                            <path d="M102.193 15.504l3.59-13.816a1.264 1.264 0 0 1 1.559-.9c.686.189 1.093.894.914 1.582l-3.59 13.817a1.264 1.264 0 0 1-1.56.9 1.303 1.303 0 0 1-.913-1.583z"/>
                        </g>
                        <path fill="#53B5FF" d="M101.718 9.147l-4.99 4.991a1.289 1.289 0 0 1-1.822-1.822l4.99-4.991a1.289 1.289 0 1 1 1.822 1.822zM94.288 16.578l-.75.75a1.289 1.289 0 0 1-1.822-1.822l.75-.75a1.289 1.289 0 1 1 1.822 1.822z"/>
                    </g>
                </svg>
            </a>

            <a href="https://laravel-news.com">
                <svg class="h-12" viewBox="0 0 529 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_50_104)">
                        <path d="M105.896 0H3.91849C2.10502 0 0.634911 1.46525 0.634911 3.27273V104.423C0.634911 106.23 2.10503 107.696 3.9185 107.696H105.896C107.71 107.696 109.18 106.23 109.18 104.423V3.27273C109.18 1.46525 107.71 0 105.896 0Z" fill="#FF2D20"/>
                        <path d="M66.937 72.8741H31.7954V26.9238H22.8857V80.7717H30.303H31.7954H71.1883L66.937 72.8741Z" fill="url(#paint0_linear_50_104)"/>
                        <path d="M86.9279 26.9238H78.4705V72.1112L53.8217 26.9238H40.7963V66.5021H49.118V35.5844L73.7669 80.7717H86.9279V26.9238Z" fill="white"/>
                        <path d="M49.118 46.8477H40.7963V71.0792H49.118V46.8477Z" fill="url(#paint1_linear_50_104)"/>
                    </g>
                    <path d="M140.534 75.6498V31.7061H149.825V67.9897H168.664V75.6498H140.534Z" fill="#FF2D20"/>
                    <path d="M184.043 76.272C181.941 76.272 180.067 75.9073 178.422 75.1777C176.777 74.4339 175.475 73.3396 174.516 71.8948C173.572 70.4358 173.1 68.6191 173.1 66.4448C173.1 64.6138 173.436 63.0761 174.109 61.8316C174.781 60.5871 175.697 59.5857 176.855 58.8276C178.014 58.0694 179.33 57.4973 180.803 57.111C182.291 56.7248 183.85 56.453 185.481 56.2957C187.398 56.0954 188.943 55.9094 190.116 55.7378C191.289 55.5518 192.14 55.28 192.669 54.9224C193.198 54.5648 193.463 54.0355 193.463 53.3346V53.2059C193.463 51.8469 193.034 50.7955 192.176 50.0517C191.332 49.3079 190.13 48.9359 188.571 48.9359C186.926 48.9359 185.617 49.3007 184.644 50.0303C183.671 50.7455 183.028 51.6467 182.713 52.7338L174.259 52.0472C174.688 50.0446 175.532 48.3137 176.791 46.8546C178.05 45.3813 179.673 44.2512 181.662 43.4644C183.664 42.6634 185.982 42.2629 188.614 42.2629C190.445 42.2629 192.197 42.4774 193.871 42.9066C195.559 43.3357 197.053 44.0009 198.355 44.9021C199.671 45.8032 200.708 46.9619 201.466 48.3781C202.225 49.7799 202.604 51.4607 202.604 53.4204V75.6498H193.935V71.0795H193.678C193.148 72.1094 192.44 73.0177 191.553 73.8045C190.666 74.577 189.601 75.1849 188.356 75.6283C187.112 76.0575 185.674 76.272 184.043 76.272ZM186.661 69.9637C188.006 69.9637 189.193 69.6991 190.223 69.1698C191.253 68.6262 192.061 67.8967 192.648 66.9812C193.234 66.0657 193.527 65.0286 193.527 63.87V60.3725C193.241 60.5584 192.848 60.7301 192.347 60.8874C191.861 61.0305 191.31 61.1664 190.695 61.2951C190.08 61.4096 189.465 61.5168 188.85 61.617C188.235 61.7028 187.677 61.7815 187.176 61.853C186.103 62.0104 185.166 62.2607 184.365 62.604C183.564 62.9473 182.942 63.4122 182.498 63.9987C182.055 64.5709 181.833 65.2861 181.833 66.1444C181.833 67.3889 182.284 68.3401 183.185 68.9982C184.101 69.6419 185.259 69.9637 186.661 69.9637Z" fill="#FF2D20"/>
                    <path d="M209.695 75.6498V42.692H218.557V48.4424H218.9C219.501 46.3969 220.509 44.852 221.926 43.8078C223.342 42.7492 224.972 42.2199 226.818 42.2199C227.275 42.2199 227.769 42.2485 228.298 42.3058C228.827 42.363 229.292 42.4417 229.693 42.5418V50.6525C229.264 50.5238 228.67 50.4093 227.912 50.3092C227.154 50.2091 226.46 50.159 225.831 50.159C224.486 50.159 223.284 50.4522 222.226 51.0387C221.182 51.6109 220.352 52.412 219.737 53.4419C219.136 54.4718 218.836 55.6591 218.836 57.0037V75.6498H209.695Z" fill="#FF2D20"/>
                    <path d="M242.873 76.272C240.77 76.272 238.896 75.9073 237.251 75.1777C235.606 74.4339 234.304 73.3396 233.346 71.8948C232.402 70.4358 231.93 68.6191 231.93 66.4448C231.93 64.6138 232.266 63.0761 232.938 61.8316C233.611 60.5871 234.526 59.5857 235.685 58.8276C236.843 58.0694 238.159 57.4973 239.633 57.111C241.121 56.7248 242.68 56.453 244.31 56.2957C246.227 56.0954 247.772 55.9094 248.945 55.7378C250.118 55.5518 250.969 55.28 251.499 54.9224C252.028 54.5648 252.292 54.0355 252.292 53.3346V53.2059C252.292 51.8469 251.863 50.7955 251.005 50.0517C250.161 49.3079 248.959 48.9359 247.4 48.9359C245.755 48.9359 244.446 49.3007 243.474 50.0303C242.501 50.7455 241.857 51.6467 241.542 52.7338L233.088 52.0472C233.518 50.0446 234.362 48.3137 235.62 46.8546C236.879 45.3813 238.503 44.2512 240.491 43.4644C242.494 42.6634 244.811 42.2629 247.443 42.2629C249.274 42.2629 251.026 42.4774 252.7 42.9066C254.388 43.3357 255.883 44.0009 257.185 44.9021C258.501 45.8032 259.538 46.9619 260.296 48.3781C261.054 49.7799 261.433 51.4607 261.433 53.4204V75.6498H252.764V71.0795H252.507C251.978 72.1094 251.27 73.0177 250.383 73.8045C249.496 74.577 248.43 75.1849 247.186 75.6283C245.941 76.0575 244.504 76.272 242.873 76.272ZM245.491 69.9637C246.835 69.9637 248.022 69.6991 249.052 69.1698C250.082 68.6262 250.891 67.8967 251.477 66.9812C252.064 66.0657 252.357 65.0286 252.357 63.87V60.3725C252.071 60.5584 251.677 60.7301 251.177 60.8874C250.69 61.0305 250.14 61.1664 249.524 61.2951C248.909 61.4096 248.294 61.5168 247.679 61.617C247.064 61.7028 246.506 61.7815 246.006 61.853C244.933 62.0104 243.996 62.2607 243.195 62.604C242.394 62.9473 241.771 63.4122 241.328 63.9987C240.884 64.5709 240.663 65.2861 240.663 66.1444C240.663 67.3889 241.113 68.3401 242.015 68.9982C242.93 69.6419 244.089 69.9637 245.491 69.9637Z" fill="#FF2D20"/>
                    <path d="M298.071 42.692L286.548 75.6498H276.249L264.727 42.692H274.382L281.227 66.2731H281.57L288.394 42.692H298.071Z" fill="#FF2D20"/>
                    <path d="M316.706 76.2935C313.316 76.2935 310.398 75.6069 307.952 74.2336C305.52 72.8461 303.646 70.8864 302.33 68.3544C301.014 65.8082 300.356 62.7971 300.356 59.3211C300.356 55.9309 301.014 52.9555 302.33 50.395C303.646 47.8345 305.498 45.839 307.887 44.4085C310.29 42.9781 313.108 42.2629 316.341 42.2629C318.516 42.2629 320.54 42.6133 322.414 43.3142C324.302 44.0009 325.947 45.0379 327.349 46.4255C328.765 47.813 329.866 49.5582 330.653 51.661C331.44 53.7494 331.833 56.1955 331.833 58.9992V61.5097H304.004V55.8451H323.229C323.229 54.529 322.943 53.3632 322.371 52.3476C321.798 51.332 321.005 50.5381 319.989 49.9659C318.988 49.3794 317.822 49.0861 316.491 49.0861C315.104 49.0861 313.874 49.408 312.801 50.0517C311.742 50.6811 310.913 51.5322 310.312 52.6051C309.711 53.6636 309.404 54.8437 309.389 56.1455V61.5312C309.389 63.1619 309.69 64.5709 310.29 65.7582C310.906 66.9454 311.771 67.8609 312.887 68.5046C314.002 69.1484 315.326 69.4702 316.856 69.4702C317.872 69.4702 318.802 69.3272 319.646 69.0411C320.49 68.755 321.212 68.3258 321.813 67.7537C322.414 67.1815 322.871 66.4805 323.186 65.6509L331.64 66.2088C331.211 68.24 330.331 70.0138 329.001 71.5301C327.685 73.0321 325.983 74.205 323.894 75.049C321.82 75.8787 319.424 76.2935 316.706 76.2935Z" fill="#FF2D20"/>
                    <path d="M346.939 31.7061V75.6498H337.798V31.7061H346.939Z" fill="#FF2D20"/>
                    <path d="M405.173 31.7061V75.6498H397.148L378.03 47.9918H377.708V75.6498H368.417V31.7061H376.571L395.539 59.3426H395.925V31.7061H405.173Z" fill="#FF2D20"/>
                    <path d="M427.697 76.2935C424.307 76.2935 421.389 75.6069 418.943 74.2336C416.511 72.8461 414.637 70.8864 413.321 68.3544C412.005 65.8082 411.347 62.7971 411.347 59.3211C411.347 55.9309 412.005 52.9555 413.321 50.395C414.637 47.8345 416.49 45.839 418.878 44.4085C421.282 42.9781 424.1 42.2629 427.332 42.2629C429.507 42.2629 431.531 42.6133 433.405 43.3142C435.293 44.0009 436.938 45.0379 438.34 46.4255C439.756 47.813 440.857 49.5582 441.644 51.661C442.431 53.7494 442.824 56.1955 442.824 58.9992V61.5097H414.995V55.8451H434.22C434.22 54.529 433.934 53.3632 433.362 52.3476C432.79 51.332 431.996 50.5381 430.98 49.9659C429.979 49.3794 428.813 49.0861 427.483 49.0861C426.095 49.0861 424.865 49.408 423.792 50.0517C422.734 50.6811 421.904 51.5322 421.303 52.6051C420.702 53.6636 420.395 54.8437 420.38 56.1455V61.5312C420.38 63.1619 420.681 64.5709 421.282 65.7582C421.897 66.9454 422.762 67.8609 423.878 68.5046C424.994 69.1484 426.317 69.4702 427.847 69.4702C428.863 69.4702 429.793 69.3272 430.637 69.0411C431.481 68.755 432.203 68.3258 432.804 67.7537C433.405 67.1815 433.863 66.4805 434.177 65.6509L442.631 66.2088C442.202 68.24 441.322 70.0138 439.992 71.5301C438.676 73.0321 436.974 74.205 434.885 75.049C432.811 75.8787 430.415 76.2935 427.697 76.2935Z" fill="#FF2D20"/>
                    <path d="M455.055 75.6498L446.086 42.692H455.334L460.44 64.8355H460.741L466.062 42.692H475.138L480.546 64.7068H480.825L485.845 42.692H495.072L486.124 75.6498H476.447L470.783 54.9224H470.375L464.71 75.6498H455.055Z" fill="#FF2D20"/>
                    <path d="M527.37 52.0901L519.002 52.6051C518.859 51.8898 518.551 51.2461 518.079 50.674C517.607 50.0875 516.985 49.6226 516.212 49.2793C515.454 48.9216 514.546 48.7428 513.487 48.7428C512.071 48.7428 510.877 49.0432 509.904 49.644C508.931 50.2305 508.445 51.0173 508.445 52.0043C508.445 52.791 508.76 53.4562 509.389 53.9998C510.018 54.5434 511.098 54.9796 512.629 55.3086L518.594 56.5102C521.798 57.1682 524.187 58.2268 525.761 59.6859C527.334 61.1449 528.121 63.0617 528.121 65.4363C528.121 67.5963 527.484 69.4917 526.211 71.1224C524.952 72.7531 523.222 74.0262 521.019 74.9417C518.83 75.8429 516.305 76.2935 513.444 76.2935C509.081 76.2935 505.605 75.3852 503.016 73.5685C500.442 71.7375 498.932 69.2485 498.489 66.1015L507.479 65.6294C507.751 66.9597 508.409 67.9754 509.453 68.6763C510.498 69.3629 511.835 69.7062 513.466 69.7062C515.068 69.7062 516.355 69.3987 517.328 68.7836C518.315 68.1542 518.816 67.346 518.83 66.359C518.816 65.5293 518.465 64.8498 517.779 64.3206C517.092 63.777 516.034 63.3621 514.603 63.0761L508.896 61.9388C505.677 61.2951 503.281 60.1794 501.707 58.5916C500.148 57.0037 499.369 54.9796 499.369 52.5193C499.369 50.4022 499.941 48.5783 501.085 47.0477C502.244 45.5171 503.867 44.337 505.956 43.5074C508.059 42.6777 510.519 42.2629 513.337 42.2629C517.5 42.2629 520.775 43.1426 523.164 44.9021C525.568 46.6615 526.969 49.0575 527.37 52.0901Z" fill="#FF2D20"/>
                    <defs>
                        <linearGradient id="paint0_linear_50_104" x1="22.8842" y1="53.8478" x2="71.2014" y2="53.8478" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white"/>
                            <stop offset="0.1217" stop-color="#FFFBFB"/>
                            <stop offset="0.241" stop-color="#FFF0EF"/>
                            <stop offset="0.3594" stop-color="#FFDEDC"/>
                            <stop offset="0.4773" stop-color="#FFC3C0"/>
                            <stop offset="0.5948" stop-color="#FFA29C"/>
                            <stop offset="0.7121" stop-color="#FF7970"/>
                            <stop offset="0.8272" stop-color="#FF493E"/>
                            <stop offset="0.8616" stop-color="#FF392D"/>
                            <stop offset="1" stop-color="#FF2D20"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_50_104" x1="44.971" y1="46.8594" x2="44.971" y2="71.1071" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white"/>
                            <stop offset="0.1217" stop-color="#FFFBFB"/>
                            <stop offset="0.241" stop-color="#FFF0EF"/>
                            <stop offset="0.3594" stop-color="#FFDEDC"/>
                            <stop offset="0.4773" stop-color="#FFC3C0"/>
                            <stop offset="0.5948" stop-color="#FFA29C"/>
                            <stop offset="0.7121" stop-color="#FF7970"/>
                            <stop offset="0.8272" stop-color="#FF493E"/>
                            <stop offset="0.8616" stop-color="#FF392D"/>
                            <stop offset="1" stop-color="#FF2D20"/>
                        </linearGradient>
                        <clipPath id="clip0_50_104">
                            <rect width="110" height="108" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </div>
    </section>
@endsection
