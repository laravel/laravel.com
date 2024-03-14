@extends('partials.layout')

@section('content')
    <div class="absolute top-0 w-full">
        @include('partials.header')
    </div>

    <img src="{{ Vite::asset('resources/images/l11-background-blur.png') }}" class="absolute right-0 w-full max-w-[200px] sm:max-w-[300px] md:max-w-[400px] lg:max-w-[500px] xl:max-w-[600px] 2xl:max-w-[700px] 2xl:-top-24">

    <section class="relative overflow-hidden pt-48 pb-20 lg:pt-48 xl:pt-56 xl:pb-28">
        <div class="relative max-w-screen-xl px-5 mx-auto">
            <div class="relative">
                <h1 class="max-w-3xl mx-auto text-5xl sm:text-5xl font-bold text-center md:text-6xl lg:text-7xl">Join us.<br>Make the web.<br>Better.</h1>
                <div
                    class="mt-6 max-w-sm mx-auto flex flex-col justify-center items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
                    <x-button.primary class="w-full sm:w-auto" href="#positions">
                        Open Positions
                    </x-button.primary>
                </div>
            </div>
        </div>
    </section>

    <hr class="bg-gradient-to-r from-white from-10% via-red-500 via-50% to-white to-90% border-none h-[1px] max-w-screen-xl w-full mx-auto xl:px-5">

    <div class="max-w-screen-xl w-full mx-auto px-5 py-20 space-y-16">
        <h2 class="text-4xl font-bold md:text-5xl">Benefits</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-16">
            @foreach ([
                [
                    'image' => 'resources/images/health-benefits.svg',
                    'title' => 'Inclusive health package',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ],
                [
                    'image' => 'resources/images/learn-and-grow.svg',
                    'title' => 'Learn and grow',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ],
                [
                    'image' => 'resources/images/life-work-balance.svg',
                    'title' => 'Balanced working life',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ],
                [
                    'image' => 'resources/images/diversity-inclusion.svg',
                    'title' => 'Diversity and inclusion',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ],
                [
                    'image' => 'resources/images/perks.svg',
                    'title' => 'Generous perks program',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ],
                [
                    'image' => 'resources/images/diversity-inclusion.svg',
                    'title' => 'Inclusive health package',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ],
            ] as $benefit)
                <div class="space-y-4">
                    <img src="{{ Vite::asset($benefit['image']) }}" class="h-8 w-6 pb-2" loading="lazy">
                    <h3 class="text-xl font-bold leading-tight">{{ $benefit['title'] }}</h3>
                    <p>{{ $benefit['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <hr class="bg-gradient-to-r from-white from-10% via-red-500 via-50% to-white to-90% border-none h-[1px] max-w-screen-xl w-full mx-auto xl:px-5">

    <div class="max-w-screen-xl w-full mx-auto px-5 py-20 space-y-16" id="positions">
        <h2 class="text-4xl font-bold md:text-5xl">Open positions</h2>
        <div class="space-y-4">
            @foreach ([
                [
                    'title' => 'Vibes master',
                    'location' => 'Bow Tie Nebula',
                    'link' => '#',
                ],
                [
                    'title' => 'Front-end developer',
                    'location' => 'United States',
                    'link' => '#',
                ],
                [
                    'title' => 'Product owner',
                    'location' => 'Remote',
                    'link' => '#',
                ],
            ] as $job)
                <div class="p-6 bg-gray-50 border border-gray-100 space-y-4 sm:space-y-0 sm:flex sm:items-center sm:justify-between">
                    <div class="space-y-2">
                        <h3 class="text-xl font-bold leading-tight">{{ $job['title'] }}</h3>
                        <p>{{ $job['location'] }}</p>
                    </div>
                    <x-button.primary class="w-full sm:w-auto" href="{{ $job['link'] }}">
                        Apply
                    </x-button.primary>
                </div>
            @endforeach
        </div>
    </div>
@stop
