@extends('partials.layout')

@section('content')
    @include('partials.header')

    <x-partners.hero
        primary-button-text="Join Worksome"
        primary-button-url="https://www.worksome.com/job/"
        secondary-button-url="https://www.worksome.com/"
    >
        <x-slot name="logo">
            <img src="/img/partners/worksome.svg" alt="Worksome" style="width: 350px">
        </x-slot>
        <x-slot name="description">
            Worksome is one of the most exciting and fast growing freelance platform startups in the world. It is built and operated by a group of amazing Laravel experts, who bring their whole selves to work every day in order to make work work better for everyone.
        </x-slot>
        <x-slot name="image">
            <img src="/img/partners/worksome_detail.png" alt="Worksome">
        </x-slot>
    </x-partners.hero>

    <x-partners.body
        proficienciesWording="About"
    >
        <x-slot name="content">
            <p>Worksome is a fast growing Copenhagen based freelance platform, where the heart of the company is our technology and the people who build and support it.</p>

            <p>The company was founded in 2016 and today counts over 35 employees spread across 3 office locations in Copenhagen, London and New York. We are proud to be connecting over 30.000 freelancers with over 20.000 companies - leading the revolution of flexible work.</p>

            <p>Our product and engineering team is primarily located in our central downtown office in the amazing city of Copenhagen, where we strive to build the best freelance technology platform in the world. We do this heavily relying on Laravel as a core technology framework for the vast majority of our systems, even building complex freelancer to job matching algorithms only using PHP and Laravel. Our frontend systems are mainly built using a mix of Vue.js and Blade.</p>

            <p>The vision for Worksome is to be the number one platform for flexible talent in the world.
                We want to make work work better by providing the critical infrastructure that enables people to only work on what they truly love, and for companies to always have access to the right talent.
                At the right time. At the right price. With zero friction.
            </p>

            <p>If all this sounds like something that you can get excited about, then please head over to our to our
                <a style="text-decoration: underline" href="https://www.worksome.com/job/">jobs page here</a> - or explore Worksome as the platform where you can find new talent for your team or find your next gig as an independent freelancer.</p>
        </x-slot>
        <x-slot name="proficiencies">
            <li>Laravel focused development team</li>
            <li>Blade & Vue.js frontend</li>
            <li>Modern technology stack & tools</li>
            <li>Top-tier equipment provided</li>
            <li>Relocation and VISA help</li>
            <li>Central Copenhagen location</li>
            <li>Flexible working hours</li>
            <li>Developer conference trips</li>
            <li>6 weeks paid vacation</li>
            <li>Free drinks and meals provided</li>
            <li>Equity- and pension plans</li>
        </x-slot>
    </x-partners.body>
@stop
