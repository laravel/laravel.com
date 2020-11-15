@extends('partials.layout')

@section('content')
    @include('partials.header')

    <x-partners.hero
        primary-button-text="Hire Cubet"
        primary-button-url="mailto:sales@cubettech.com"
        secondary-button-url="https://cubettech.com/services/laravel"
    >
        <x-slot name="logo">
            <img src="/img/partners/cubet.png" alt="Cubet">
        </x-slot>
        <x-slot name="description">
            CUBET is an IT consultancy and software product development company with a strong presence in the US, UK, and India. Trusted by more than 200 customers worldwide, Cubet has been creating applications that are both resilient and scalable, adding value to the end customers, making organizations digital and delivering Agile projects with confidence.
        </x-slot>
        <x-slot name="image">
            <img src="/img/partners/img_cubet_detail.jpeg" alt="Cubet">
        </x-slot>
    </x-partners.hero>

    <x-partners.body
        twitter="https://twitter.com/CubetTech"
        github="https://github.com/cubettech"
        linkedin="https://www.linkedin.com/company/cubet-technologies/"
    >
        <x-slot name="content">
            <p>Cubet follows a lean-agile software development methodology and has been consulting for start-ups, mid-size companies to established companies making upgrades faster, lowering the IT costs and reducing business risks. Cubet helps them shift from their legacy systems to Laravel, build new applications or migrate existing solutions to Laravel.</p>
            <p>Cubet is a constant contributor to the Laravel powered software development and also offers code auditing, performance optimization and supports its customers with a successful product launch. They have different proven engagement models depending on your project size and specific requirements.</p>
            <p>Cubet is always willing to talk with you about the enormous possibilities of using Laravel for your next idea - however big or small. Do reach out to them for your next project.</p>
        </x-slot>
        <x-slot name="proficiencies">
            <li>Laravel - Development / Code Audit / Consultation</li>
            <li>Vue / Angular / React - Frontend Development</li>
            <li>UI / UX Product Design</li>
            <li>API Design and Development </li>
            <li>Consulting Services</li>
            <li>Rescue Projects</li>
            <li>Performance Review & Improvements</li>
            <li>Technical Leadership</li>
            <li>Startup Guidance</li>
            <li>Product Ideation and Development</li>
            <li>Staff Augmentation</li>
        </x-slot>
    </x-partners.body>
@stop
