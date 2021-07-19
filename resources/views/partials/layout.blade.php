<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ isset($title) ? $title . ' - ' : null }}Laravel - The PHP Framework For Web Artisans</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    @if (isset($canonical))
    <link rel="canonical" href="{{ url($canonical) }}">
    @endif

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#ff2d20">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ff2d20">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://use.typekit.net/ins2wgm.css">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
</head>
<body
    x-data="{
        navIsOpen: false,
        searchIsOpen: false,
        search: '',
    }"
    class="language-php h-full w-full font-sans text-gray-900 antialiased"
>

@yield('content')

@include('partials.footer')

<script>
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>

<script>
    var algolia_app_id = '{{ config('algolia.connections.main.id', false) }}';
    var algolia_search_key = '{{ config('algolia.connections.main.search_key', false) }}';
    var version = '{{ isset($currentVersion) ? $currentVersion : DEFAULT_VERSION }}';
</script>

<script src="{{ mix('js/app.js') }}"></script>

<script>
    var _gaq=[['_setAccount','UA-23865777-1'],['_trackPageview']];
    (function(d,t){
        var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)
    }(document,'script'));
</script>
</body>
</html>
