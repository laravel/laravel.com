@extends('partials.layout')

@section('content')
    @include('partials.header')

    <x-partners.hero
        primary-button-text="Hire Kirschbaum"
        primary-button-url="mailto:hello@kirschbaumdevelopment.com"
        secondary-button-url="https://kirschbaumdevelopment.com/"
    >
        <x-slot name="logo">
            <img src="/img/partners/kirschbaum.min.svg" alt="Kirschbaum Development">
        </x-slot>
        <x-slot name="description">
            We are a team of carefully curated Laravel experts with a history of delivering practical and efficient solutions to complex problems. We bring products and services to market quickly by leveraging iterative processes and lean development techniques.
        </x-slot>
        <x-slot name="image">
            <img src="/img/partners/img_kirschbaum_detail.png" alt="Kirschbaum Development">
        </x-slot>
    </x-partners.hero>

    <x-partners.body
        twitter="https://twitter.com/n_kirschbaum"
        github="https://github.com/kirschbaum-development"
        linkedin="https://www.linkedin.com/company/kirschbaumdevelopmentgroupllc"
    >
        <x-slot name="content">
            <p>The companies we work with appreciate our ability to work seamlessly with their technical, and non-technical teams. Our developer-led company is comprised of individuals who are not only exceptional coders, but exceptional problem solvers with business sense. If there's a more efficient path to reach your goals, we'll propose it even if it means fewer development hours for us.</p>
            <p>We are proud to have helped some of the largest companies in the world develop products, streamline systems, and better reach their customers using Laravel.</p>
            <p>We look forward to working with you!</p>
        </x-slot>
        <x-slot name="proficiencies">
            <li>Laravel Development</li>
            <li>Vue.js / Angular / Ionic</li>
            <li>Machine Learning</li>
            <li>APIs / Microservices</li>
            <li>SaaS Products</li>
            <li>Technical Leadership</li>
            <li>Rescue Projects</li>
            <li>Staff Augmentation</li>
            <li>Team Building / Mentoring</li>
            <li>Direction for Start-ups</li>
        </x-slot>
    </x-partners.body>
@stop
