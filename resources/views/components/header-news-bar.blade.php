<?php
    $news = Illuminate\Support\Arr::random(['laracon', 'forge', 'vapor']);
?>

<div class="hidden lg:flex items-center justify-center bg-gradient-to-b from-red-500 to-red-600 p-2 text-center text-white text-sm">
    @if ($news === 'laracon')
        <div><svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>

        <div class="mt-px ml-1">
            Tickets are now available for <a href="https://laracon.us" class="underline">Laracon US</a> and <a href="https://laracon.in" class="underline">Laracon India</a>.
        </div>
    @endif

    @if ($news === 'forge')
        <div><svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></div>

        <div class="mt-px ml-1">
            Servers with PHP 8.2 are now available for provisioning via <a href="https://forge.laravel.com" class="underline">Laravel Forge</a>.
        </div>
    @endif

    @if ($news === 'vapor')
        <div><svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg></div>

        <div class="mt-px ml-1">
            Deploy Laravel with the infinite scale of serverless using <a href="https://vapor.laravel.com" class="underline">Laravel Vapor</a>.
        </div>
    @endif
</div>
