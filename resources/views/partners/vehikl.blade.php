@extends('partials.layout')

@section('content')
    @include('partials.header')

    <x-partners.hero
        primary-button-text="Hire Vehikl"
        primary-button-url="mailto:go+partner@vehikl.com"
        secondary-button-url="http://vehikl.com/"
    >
        <x-slot name="logo">
            <img src="/img/partners/vehikl.min.svg" alt="Vehikl">
        </x-slot>
        <x-slot name="description">
            Vehikl is a team of code-crushing Laravel experts. Over the years we have built a variety of web applications for customers using Laravel as our framework of choice and implemented Lean Agile development techniques to build professional applications that are functional and easy to use.
        </x-slot>
        <x-slot name="image">
            <img src="/img/partners/img_vehikl_detail.jpg" alt="Vehikl">
        </x-slot>
    </x-partners.hero>

    <x-partners.body
        twitter="https://twitter.com/vehikl"
        github="https://github.com/vehikl"
        linkedin="https://www.linkedin.com/company-beta/2240858/?pathWildcard=2240858"
    >
        <x-slot name="content">
                <p>Combining the power of Laravel, Lean Agile development techniques, and a diverse team with deep technical knowledge and experience allows us to provide a unique approach to make sure your work gets done as quickly, professionally, and economically as possible. Our customers range from smaller startups looking for help with working through a feature backlog as they scale, to larger established firms that need to refactor a legacy code base and build new features.</p>
                <p>We integrate fully with your existing workflow and will dramatically increase your project’s velocity. We also provide mentorship to more junior developers and work to assist knowledge transfer to any new developers you onboard internally. As a development partner, Vehikl provides a flexible, scalable option while you ramp up an internal team. Over the years we have built a variety of web applications for customers using Laravel as our framework of choice and implemented Lean Agile development techniques to build professional applications that are functional and easy to use.</p>
        </x-slot>
        <x-slot name="proficiencies">
            <li>Laravel</li>
            <li>React</li>
            <li>Angular</li>
            <li>Vue</li>
            <li>UI/UX Product Design</li>
            <li>API Design</li>
            <li>Software Architecture</li>
            <li>Consulting</li>
            <li>Technical Leadership</li>
            <li>Staff Augmentation</li>
        </x-slot>
    </x-partners.body>
@stop
