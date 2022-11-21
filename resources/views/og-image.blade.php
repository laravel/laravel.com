<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ isset($title) ? $title . ' - ' : null }}Laravel - The PHP Framework For Web Artisans</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <link rel="stylesheet" href="https://use.typekit.net/ins2wgm.css">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">

</head>
<body class="language-php h-full w-full font-sans text-gray-900 antialiased">

<div id="og-image" class="w-[1200px] h-[627px] bg-[#151314] mx-auto my-24 flex flex-col">
    <div class="p-6">
        <svg class="h-4" viewBox="0 0 200 50" xmlns="http://www.w3.org/2000/svg">
            <circle cx="23" cy="23" r="20" fill="transparent" stroke="#ff776e" stroke-width="3"/>
            <circle cx="90" cy="23" r="20" fill="transparent" stroke="#ffdf67" stroke-width="3"/>
            <circle cx="158" cy="23" r="20" fill="transparent" stroke="#6bc45a" stroke-width="3"/>
        </svg>
    </div>
    <div class="flex-1 font-mono text-xl overflow-hidden px-6">
        @if($src = $page->openGraph('src'))
            <x-torchlight-code language="php" :contents="$src"/>
        @else
            {{ $page->representativeCodeBlock() }}
        @endif
    </div>
    <div class="bg-gray-50 p-6">
        <div class="flex">
            <img class="w-12 mr-6" src="{{ asset('img/logomark.min.svg') }}" alt="Laravel" width="50" height="52">
            <div class="flex flex-col justify-center">
                <div class="font-normal text-lg opacity-75 -mb-1.5">
                    {{ $page->openGraph('section', 'Laravel Framework') }}
                </div>
                <div class="font-bold text-4xl">
                    {{ $page->title() }}
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
