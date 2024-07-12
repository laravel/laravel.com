@extends('partials.layout')

@section('content')
    <div class="absolute top-0 w-full">
        @include('partials.header')
    </div>

    <img src="{{ Vite::asset('resources/images/l11-background-blur.png') }}" class="absolute right-0 w-full max-w-[200px] sm:max-w-[300px] md:max-w-[400px] lg:max-w-[500px] xl:max-w-[600px] 2xl:max-w-[700px] 2xl:-top-24">

    <section class="relative overflow-hidden pt-48 pb-20 lg:pt-48 xl:pt-56 xl:pb-28">
        <div class="relative max-w-screen-xl px-5 mx-auto">
            <div class="relative">
                <h1 class="max-w-3xl mx-auto text-5xl sm:text-5xl font-bold text-center md:text-6xl lg:text-7xl">Make the web.<br>Better.<br>Together.</h1>
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
                    'image' => 'resources/images/learn-and-grow.svg',
                    'title' => 'Learn and grow',
                    'description' => 'Work with the best and brightest in the Laravel ecosystem, building the tools that Laravel developers love.',
                ],
                [
                    'image' => 'resources/images/health-benefits.svg',
                    'title' => 'Health benefits',
                    'description' => 'Laravel is proud to offer robust, private health benefits no matter what country you reside in.',
                ],
                [
                    'image' => 'resources/images/life-work-balance.svg',
                    'title' => 'Remote workplace',
                    'description' => 'We are a fully distributed team working together to build the next generation of Laravel packages and products.',
                ],
                [
                    'image' => 'resources/images/vacation.svg',
                    'title' => 'Take a vacation',
                    'description' => 'We believe well-rested employees do their best work. Laravel offers generous vacation time plus your country\'s holidays.',
                ],
                [
                    'image' => 'resources/images/perks.svg',
                    'title' => 'Retirement contributions',
                    'description' => 'Retirement fund / pension contributions are available to Laravel employees, tailored to your country.',
                ],
                [
                    'image' => 'resources/images/diversity-inclusion.svg',
                    'title' => 'Stock option eligibility',
                    'description' => 'Laravel employees are eligible for stock options so that you share in Laravel\'s overall success.',
                ],
            ] as $benefit)
                <div class="space-y-4">
                    <img src="{{ Vite::asset($benefit['image']) }}" class="h-8 w-6 pb-2" height="32" width="24" loading="lazy">
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
            @if (count($jobs) > 0)
                @foreach ($jobs as $job)
                    <div class="p-6 bg-gray-50 border border-gray-100 space-y-4 sm:space-y-0 sm:flex sm:items-center sm:justify-between">
                        <div class="space-y-2">
                            <h3 class="text-xl font-bold leading-tight">{{ $job['title'] }}</h3>
                            <p>Remote</p>
                        </div>
                        <x-button.primary class="w-full sm:w-auto" href="{{ $job['url'] }}">
                            Read more
                        </x-button.primary>
                    </div>
                @endforeach
            @else
                <div class="text-xl max-w-4xl">
                    Thank you for your interest in joining Laravel. Unfortunately, we do not have any open positions at the moment. Please check back later for future opportunities.
                </div>
            @endif
        </div>
    </div>
@stop
