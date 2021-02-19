@extends('partials.layout')

@section('content')
    @include('partials.header')

    <x-partners.hero
        primary-button-text="Hire Kirschbaum"
        primary-button-url="mailto:hello@kirschbaumdevelopment.com"
        secondary-button-url="https://kirschbaumdevelopment.com/"
    >
        <x-slot name="logo">
            <img src="/img/partners/kirschbaum-2.min.svg"  width="500" alt="Kirschbaum Development">
        </x-slot>
        <x-slot name="description">
            We are a team of carefully curated Laravel experts with a history of delivering practical and efficient solutions to complex problems. We bring products and services to market quickly by leveraging iterative processes and lean development techniques.
        </x-slot>
        <x-slot name="image">
            <img src="/img/partners/img_kirschbaum_detail-2.jpg" alt="Kirschbaum Development">
        </x-slot>
    </x-partners.hero>

    <x-partners.body
        twitter="https://twitter.com/kirschbaum_dev"
        github="https://github.com/kirschbaum-development"
        linkedin="https://www.linkedin.com/company/kirschbaumdevelopmentgroupllc"
    >
        <x-slot name="content">
            <p>The Kirschbaum team of Laravel experts are exceptional coders, and exceptional problem solvers – if there's a more efficient path to reach your goals, we'll find it. We've helped companies save millions, and we've enabled organizations without millions to compete with those who do.</p>
            <p>The companies we work with appreciate our ability to work seamlessly with both their technical and non-technical teams. We cut out the middlemen—our developers are great communicators with business sense, so you speak directly with the people working on your project and nothing is lost in translation.</p>
            <p>With a history of delivering practical solutions to complex problems, our focus is on your long-term success. We leverage innovative approaches and bleeding edge technologies to get your products and services to market quickly, while anticipating the need to scale and adapt as your business requirements evolve.</p>
            <p>We'd love to chat with you about your project!</p>
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
