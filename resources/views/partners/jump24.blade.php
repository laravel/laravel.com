@extends('partials.layout')

@section('content')
    @include('partials.header')

    <x-partners.hero
        primary-button-text="Hire Jump24"
        primary-button-url="mailto:ollie@jump24.co.uk"
        secondary-button-url="http://jump24.co.uk"
    >
        <x-slot name="logo">
            <img src="/img/partners/jump24.jpg" alt="Jump24"  style="max-width: 300px">
        </x-slot>
        <x-slot name="description">
            Jump24 is a client centric Laravel development studio based in Birmingham, UK. Our team is comprised of multidisciplinary leaders who have been involved in the Laravel community since 2013. Since our inception we have grown organically through word of mouth and now work with some of the most exciting and challenging products and companies in the UK and beyond.
        </x-slot>
        <x-slot name="image">
            <img src="/img/partners/img_jump24_detail.jpg" alt="Jump24">
        </x-slot>
    </x-partners.hero>

    <x-partners.body
        twitter="https://twitter.com/jumptwenty4"
        linkedin="https://www.linkedin.com/company/5385766"
    >
        <x-slot name="content">
            <p>Having worked across many different industries and client sizes, we relish in solving complex challenges to ensure that our projects are a success.</p>
            <p>Employing agile methodologies, we can build any product from sophisticated API driven platforms to cutting edge web applications. We always ensure that we are on hand from initial concept to the final design to make our clients ideas come to life. </p>
            <p>Continual learning is a fundamental principle which we stand by, and in our local community we host a local tech event 'BrumPHP' every quarter to help others enhance and develop knowledge in the field of Laravel.</p>
        </x-slot>
        <x-slot name="proficiencies">
            <li>Startup MVP Development</li>
            <li>UI/UX design</li>
            <li>Laravel Development</li>
            <li>Laravel Consulting</li>
            <li>Vue.js & React</li>
            <li>SAAS Development</li>
            <li>Software Architecture</li>
            <li>API Development</li>
        </x-slot>
    </x-partners.body>
@stop
