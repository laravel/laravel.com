@extends('partials.layout')

@section('content')
    @include('partials.header')

    <div class="relative overflow-hidden">
        <div class="hidden absolute right-[20%] top-12 pointer-events-nonesm:block ">
            <x-cube />
        </div>
        <div class="hidden absolute top-[25%] pointer-events-none sm:block md:right-1/2">
            <x-cube :delay="2000" />
        </div>
        <div class="hidden absolute -right-2 top-2/3 pointer-events-none sm:block md:right-1/4">
            <x-cube :delay="1000" />
        </div>
        <div class="hidden absolute bottom-0 right-6 -translate-y-20 pointer-events-none sm:block md:right-[12%]">
            <x-cube :delay="3000" />
        </div>

        <div class="relative max-w-screen-xl mx-auto px-5 pt-32 space-y-8 md:space-y-0 md:flex md:items-end">
            <div class="md:flex-1">
                <h1 class="max-w-md font-medium text-3xl tracking-tight sm:text-4xl md:max-w-4xl md:text-5xl md:leading-tight xl:text-6xl">The Laravel Team</h1>
                <p class="mt-3 max-w-xl text-gray-600 sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg">Laravel is a team of passionate developers from all around the world. We love building tools that make your life as a developer enjoyable, fun, and fulfilling. Follow us on Twitter and GitHub to keep up with what we're working on!</p>
            </div>
        </div>

        <div class="relative max-w-screen-xl mx-auto px-5 py-12">
            <ul class="grid grid-cols-1 gap-x-4 gap-y-6 md:grid-cols-2 lg:grid-cols-4 lg:gap-8">
                @foreach($team as $staff)
                <li>
                    <div class="space-y-4">
                        <div class="aspect-w-3 aspect-h-2">
                            <img class="transition object-cover shadow-lg rounded-lg filter grayscale hover:grayscale-0" loading="lazy" width="200" height="200" src="https://unavatar.vercel.app/github/{{ $staff['github_username'] }}" alt="{{ $staff['name'] }}">
                        </div>
                        <div class="text-lg leading-6 font-medium space-y-1">
                            <h3 class="text-red-600">{{ $staff['name'] }}</h3>
                            <p class="text-gray-600 text-sm">{{ $staff['location'] }}</p>
                        </div>

                        <ul class="flex space-x-5">
                            @if ($staff['twitter_username'] ?? false)
                            <li>
                                <a href="https://twitter.com/{{ $staff['twitter_username'] }}" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Twitter</span>

                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                            </li>
                            @endif
                            @if ($staff['github_username'] ?? false)
                            <li>
                                <a href="https://github.com/{{ $staff['github_username'] }}" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">GitHub</span>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        </div>
@stop
