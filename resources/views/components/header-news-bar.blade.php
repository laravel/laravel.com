@php
    $news = ['nova', 'forge', 'vapor', 'herd', 'pulse', 'reverb', 'laracon-au'];
    $news = ['cloud', 'nightwatch'];
@endphp

<div class="hidden lg:flex items-center justify-center bg-gradient-to-b from-red-500 to-red-600 p-2 text-center text-white text-sm h-9">
    <template id="news-herd">
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
            Get started with PHP and Laravel faster than ever using <a href="https://herd.laravel.com" class="underline">Laravel Herd</a>.
        </div>
    </template>

    <template id="news-laracon">
        <div><svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>

        <div class="mt-px ml-1">
            Join us in Dallas, TX! Tickets are now available for <a href="https://laracon.us" class="underline">Laracon US</a>.
        </div>
    </template>

    <template id="news-laracon-in">
        <div><svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>

        <div class="mt-px ml-1">
            Let's go to India! Tickets are now available for <a href="https://laracon.in" class="underline">Laracon IN</a>.
        </div>
    </template>

    <template id="news-laracon-eu">
        <div><svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>

        <div class="mt-px ml-1">
            Let's go to Europe! Tickets are now available for <a href="https://laracon.eu" class="underline">Laracon EU</a>.
        </div>
    </template>

    <template id="news-laracon-au">
        <div><svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>

        <div class="mt-px ml-1">
            Let's go down under! Tickets are now available for <a href="https://laracon.au" class="underline">Laracon AU</a>.
        </div>
    </template>

    <template id="news-forge">
        <div><svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></div>

        <div class="mt-px ml-1">
            Servers with PHP 8.3 are now available for provisioning via <a href="https://forge.laravel.com" class="underline">Laravel Forge</a>.
        </div>
    </template>

    <template id="news-vapor">
        <div><svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg></div>

        <div class="mt-px ml-1">
            Deploy Laravel with the infinite scale of serverless using <a href="https://vapor.laravel.com" class="underline">Laravel Vapor</a>.
        </div>
    </template>

    <template id="news-cloud">
        {{-- <div><svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg></div> --}}

        <div class="mt-px ml-1">
            Join the waitlist for <a href="https://cloud.laravel.com" class="underline">Laravel Cloud</a>, the future of shipping.
        </div>
    </template>

    <template id="news-nightwatch">
        <div class="mt-px ml-1">
            Join the waitlist for <a href="https://nightwatch.laravel.com" class="underline">Laravel Nightwatch</a>, first-class monitoring designed for Laravel.
        </div>
    </template>

    <template id="news-pulse">
        <div><svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg></div>

        <div class="mt-px ml-1">
            How's your health? Check your application's vital signs using <a href="https://pulse.laravel.com" class="underline">Laravel Pulse</a>.
        </div>
    </template>

    <template id="news-reverb">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M3.707 6.293l2.586 -2.586a1 1 0 0 1 1.414 0l5.586 5.586a1 1 0 0 1 0 1.414l-2.586 2.586a1 1 0 0 1 -1.414 0l-5.586 -5.586a1 1 0 0 1 0 -1.414z" />
              <path d="M6 10l-3 3l3 3l3 -3" />
              <path d="M10 6l3 -3l3 3l-3 3" />
              <path d="M12 12l1.5 1.5" />
              <path d="M14.5 17a2.5 2.5 0 0 0 2.5 -2.5" />
              <path d="M15 21a6 6 0 0 0 6 -6" />
            </svg>
        </div>

        <div class="mt-px ml-1">
            Incoming transmission received. <a href="https://reverb.laravel.com" class="underline">Laravel Reverb</a> is now available!
        </div>
    </template>

    <template id="news-nova">
        <div>
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
            </svg>
        </div>

        <div class="mt-px ml-1">
            Take your administration backend to another dimension with <a href="https://nova.laravel.com" class="underline">Laravel Nova</a>.
        </div>
    </template>

    <template id="news-careers">
        <div>
            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
            </svg>
        </div>

        <div class="mt-px ml-1">
            Laravel is hiring! <a href="{{ route('careers') }}" class="underline">Help us build the future of Laravel</a>.
        </div>

    </template>
</div>
<script>
    const activeNewsTemplate = document.getElementById(
        'news-'+@js($news)[Math.floor(Math.random() * {{ count($news) }})]
    )

    activeNewsTemplate.replaceWith(activeNewsTemplate.content)
</script>
