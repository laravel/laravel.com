@extends('partials.layout')

@section('content')
    @include('partials.header')

    <x-partners.hero
        primary-button-text="Hire Tighten"
        primary-button-url="mailto:hello@tighten.co"
        secondary-button-url="https://tighten.co/laravel"
    >
        <x-slot name="logo">
            <img src="/img/partners/tighten.min.svg" alt="Tighten">
        </x-slot>
        <x-slot name="description">
            Tighten is a team of Laravel community leaders, web development industry veterans, and multi-disciplinary creators. We’ve built, rescued, refactored, and supported a huge number of Laravel applications since Laravel’s earliest days. Whatever your challenge, we have the experience and knowledge to help.
        </x-slot>
        <x-slot name="image">
            <img src="/img/partners/img_tighten_detail-2.jpeg" alt="Tighten">
        </x-slot>
    </x-partners.hero>

    <x-partners.body
        twitter="https://twitter.com/tightenco"
        github="https://github.com/tightenco"
        linkedin="https://www.linkedin.com/company-beta/4795582/?pathWildcard=4795582"
    >
        <x-slot name="content">
            <p>We work with big enterprises, SMBs, non-profit organizations, and early-stage startups to devise, design, and deliver world-class applications that are loved by users and developers alike.</p>
            <p>But we don’t just work on brand new apps.  If you have an existing codebase that needs some love, we’re happy to come in for a code audit or rescue.  We’ve seen more Laravel codebases than just about anybody, so we’re well-equipped to help you chart your best course forward.</p>
            <p>Constant learning and open sharing with the Laravel community are essential to how we work. We are tireless advocates for the Laravel ecosystem, and we’re proud to have been a part of the Laravel Partners program right from the start.</p>
        </x-slot>
        <x-slot name="proficiencies">
            <li>Laravel Applications</li>
            <li>Laravel Codebase Audits</li>
            <li>APIs + Aggregators</li>
            <li>VueJS + React</li>
            <li>Training + Mentoring</li>
            <li>UX Design</li>
            <li>Content Strategy</li>
            <li>Staff Augmentation</li>
        </x-slot>
    </x-partners.body>
@stop
