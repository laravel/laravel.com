@extends('partials.layout')

@section('content')
    @include('partials.header')

    <x-partners.hero
        primary-button-text="Get Hired"
        primary-button-url="https://www.cyber-duck.co.uk/our-culture/careers"
        secondary-button-url="https://www.cyber-duck.co.uk/how-we-work/technology/laravel?utm_source=Laravel%20Partner&utm_medium=Sponsorship"
    >
        <x-slot name="logo">
            <img src="/img/partners/cyberduck.png" alt="Hire Cyber-duck" style="max-width: 300px">
        </x-slot>
        <x-slot name="description">
            We have been trusted for over 13 years by organisations such as The Bank of England, Mitsubishi Electric and Cancer Research to produce game changing applications through service design underpinned by a user centred approach and an astute knowledge of Laravel and Vue.js.
        </x-slot>
        <x-slot name="image">
            <img src="/img/partners/img_cyberduck_detail.png" alt="Cyber Duck">
        </x-slot>
    </x-partners.hero>

    <x-partners.body
        twitter="https://twitter.com/Cyberduck_uk"
        linkedin="https://www.linkedin.com/company/cyber-duck/"
    >
        <x-slot name="content">
            <p>Our team is comprised of 45+ user experience experts, software developers and marketing strategists based in the UK and USA. We have been using Laravel for over 6 years since its inception and it is our preferred framework for product development. Working in an agile fashion, we have built and maintained bespoke products for many industries, constantly iterating and evolving platforms as business requirements change.</p>
            <p>We are an ISO 9001 certified in quality process and ISO27001 certified in security management as well as ISO9241 accredited in human centred design. On top of that we are Google Analytics and Google Tag Manager certified agency bringing a proven, user and data driven award winning process to each partnership.</p>
        </x-slot>
        <x-slot name="proficiencies">
            <li>Laravel Development</li>
            <li>Laravel Consulting</li>
            <li>Vue, React and Angular</li>
            <li>APIs</li>
            <li>Software Architecture</li>
            <li>Service Design</li>
            <li>User Centred Design (UCD)</li>
            <li>UI/UX Product Design</li>
            <li>Technical Leadership</li>
            <li>Project Management Office (PMO)</li>
        </x-slot>
    </x-partners.body>
@stop
