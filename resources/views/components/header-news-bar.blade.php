<?php
    $news = Illuminate\Support\Arr::random(['herd', 'nova', 'forge', 'vapor', 'merch', 'laracon']);
?>

<div class="hidden lg:flex items-center justify-center bg-gradient-to-b from-red-500 to-red-600 p-2 text-center text-white text-sm">
    @if ($news === 'herd')
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" stroke-linecap="round" fill="none" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M3 4m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" />
              <path d="M7 8v1" />
              <path d="M17 8v1" />
              <path d="M12.5 4c-.654 1.486 -1.26 3.443 -1.5 9h2.5c-.19 2.867 .094 5.024 .5 7" />
              <path d="M7 15.5c3.667 2 6.333 2 10 0" />
            </svg>
        </div>

        <div class="mt-px ml-1">
            On macOS? Get started with PHP and Laravel faster than ever using <a href="https://herd.laravel.com" class="underline">Laravel Herd</a>.
        </div>

    @elseif ($news === 'laracon')
        <div><svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>

        <div class="mt-px ml-1">
            See you down under! Tickets are now available for <a href="https://laracon.au" class="underline">Laracon AU</a>.
        </div>

    @elseif ($news === 'forge')
        <div><svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></div>

        <div class="mt-px ml-1">
            Servers with PHP 8.2 are now available for provisioning via <a href="https://forge.laravel.com" class="underline">Laravel Forge</a>.
        </div>

    @elseif ($news === 'vapor')
        <div><svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg></div>

        <div class="mt-px ml-1">
            Deploy Laravel with the infinite scale of serverless using <a href="https://vapor.laravel.com" class="underline">Laravel Vapor</a>.
        </div>

    @elseif ($news === 'nova')
        <div>
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
            </svg>
        </div>

        <div class="mt-px ml-1">
            Take your administration backend to another dimension with <a href="https://nova.laravel.com" class="underline">Laravel Nova</a>.
        </div>

    @elseif ($news === 'merch')
        <div>
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path>
            </svg>
        </div>

        <div class="mt-px ml-1">
            Shop the latest Laravel merchandise in our <a href="https://laravel.bigcartel.com/products" class="underline">official store</a>.
        </div>
    @endif
</div>
