@php
    // Adding a few more "tickets" for cloud to get chosen in the random array, requested by Hank
    $news = ['cloud', 'cloud', 'cloud', 'nova', 'forge', 'vapor', 'herd', 'pulse', 'reverb', 'laracon-au'];
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
        <div><svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M6.442 2.244a.51.51 0 0 1 .262.076l3.691 2.062a.457.457 0 0 1 .213.225.537.537 0 0 1 .035.212v7.37l2.708-1.514V6.851c0-.098.024-.191.085-.275a.688.688 0 0 1 .224-.185h.001l3.682-2.058a.443.443 0 0 1 .217-.061c.082 0 .155.026.218.061l3.751 2.101a.42.42 0 0 1 .192.203c.033.08.035.16.035.22v4.084a.48.48 0 0 1-.056.246.531.531 0 0 1-.198.187l-.005.003-3.448 1.925v3.811c0 .089-.01.182-.062.268a.548.548 0 0 1-.208.186h-.002l-7.36 4.111a.586.586 0 0 1-.277.078.586.586 0 0 1-.277-.078l-.004-.002-7.339-4.113-.02-.013a.785.785 0 0 1-.15-.11.371.371 0 0 1-.106-.271V4.757c0-.183.117-.302.216-.356l3.718-2.082a.537.537 0 0 1 .264-.075ZM3.735 4.8l2.702-1.513L9.147 4.8l-2.71 1.52L3.735 4.8Zm13.822 3.552L14.849 6.84l2.708-1.513 2.701 1.513-2.701 1.513ZM9.65 5.635l-2.709 1.52v7.103l2.709-1.52V5.636Zm-3.707 1.52L3.23 5.64v11.213l6.422 3.59v-3.026L6.23 15.54l-.008-.005c-.051-.03-.125-.074-.181-.14a.439.439 0 0 1-.098-.295V7.154Zm8.405 3.52V7.673l2.715 1.52v2.99l-2.715-1.508Zm3.7 1.509v-2.99l2.715-1.52v3l-2.715 1.51Zm-7.912 4.392L7.45 15.092l6.4-3.588 2.7 1.522-6.413 3.55Zm.506 3.867v-3.026l6.421-3.567v3.003l-6.421 3.59Z" clip-rule="evenodd"/><path fill="currentColor" fill-rule="evenodd" d="m9.86 21.676-7.34-4.113-.02-.013a.785.785 0 0 1-.15-.11.371.371 0 0 1-.106-.271V4.757c0-.183.117-.302.216-.356l3.718-2.082a.537.537 0 0 1 .264-.075.51.51 0 0 1 .262.076l3.691 2.062a.457.457 0 0 1 .213.225.537.537 0 0 1 .035.212v7.37l2.708-1.514V6.851c0-.098.024-.191.085-.275a.688.688 0 0 1 .224-.185h.001l3.682-2.058a.443.443 0 0 1 .217-.061c.082 0 .155.026.218.061l3.751 2.101a.42.42 0 0 1 .192.203c.033.08.035.16.035.22v4.084a.48.48 0 0 1-.056.246.531.531 0 0 1-.198.187l-.005.003-3.448 1.925v3.811c0 .089-.01.182-.062.268a.548.548 0 0 1-.208.186h-.002l-7.36 4.111a.586.586 0 0 1-.277.078.586.586 0 0 1-.277-.078l-.004-.002Zm8.433-8.231v3.668a.742.742 0 0 1-.097.394.787.787 0 0 1-.295.271H17.9l-.004.003-7.362 4.111-.002.002a.827.827 0 0 1-.392.106.828.828 0 0 1-.391-.106l-.003-.002-.006-.003-7.343-4.116-.024-.014v-.001l-.005-.003a.99.99 0 0 1-.191-.143.615.615 0 0 1-.177-.443V4.757a.65.65 0 0 1 .342-.57l3.716-2.08A.78.78 0 0 1 6.442 2c.15 0 .277.047.383.109l3.688 2.06a.7.7 0 0 1 .32.344c.054.13.053.252.053.303v6.957l2.221-1.24V6.85c0-.14.036-.286.133-.419a.928.928 0 0 1 .3-.253l.002-.001 3.682-2.058a.686.686 0 0 1 .336-.092.69.69 0 0 1 .336.092l3.753 2.101a.663.663 0 0 1 .351.636v4.084c0 .095-.01.23-.088.367a.773.773 0 0 1-.284.275l-.002.001-.009.005-3.324 1.856ZM6.11 15.75l-.012-.007-.005-.003a.898.898 0 0 1-.238-.19.682.682 0 0 1-.155-.452V7.298L3.473 6.055V16.71l5.934 3.317v-2.465L6.11 15.75Zm3.54 1.666v3.026l-6.42-3.59V5.64l2.714 1.514V15.1c0 .116.03.214.098.294.056.067.13.11.18.14l.009.006 3.42 1.878ZM3.736 4.8l2.702 1.52 2.71-1.52-2.71-1.513L3.735 4.8Zm.498 0 2.204-1.234 2.21 1.235-2.21 1.239L4.233 4.8Zm13.323 3.273 2.203-1.234-2.203-1.234-2.207 1.234 2.207 1.234Zm0 .28 2.702-1.514-2.701-1.513-2.708 1.513 2.708 1.513ZM7.187 7.296v6.545l2.22-1.246V6.051l-2.22 1.246Zm-.244-.143v7.104l2.709-1.52V5.636l-2.709 1.52Zm7.651 3.377V8.09l2.227 1.247v2.433l-2.227-1.238Zm2.471 1.653-2.715-1.51v-3l2.715 1.52v2.99Zm.985 0 2.715-1.51v-3l-2.715 1.52v2.99Zm2.471-4.095-2.227 1.247v2.433l2.227-1.238V8.09Zm-10.383 8.208L7.952 15.09l5.898-3.306 2.2 1.24-5.913 3.273Zm6.414-3.271-6.414 3.55-2.687-1.484 6.4-3.588 2.7 1.522Zm-5.908 7.417 6.421-3.59V13.85l-6.421 3.567v3.026Zm6.177-6.178-5.934 3.295v2.467l5.934-3.317v-2.445Z" clip-rule="evenodd"/></svg></div>

        <div class="mt-px ml-1">
            Join the waitlist for <a href="https://cloud.laravel.com" class="underline">Laravel Cloud</a>, the future of shipping!
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
