@extends('partials.layout')

@section('content')
    @include('partials.header')

    <x-partners.hero
        primary-button-text="Hire Dev Squad"
        primary-button-url="mailto:phil@devsquad.com"
        secondary-button-url="https://devsquad.com/hire-laravel-developers/"
    >
        <x-slot name="logo">
            <img src="/img/partners/devsquad.png" alt="Dev Squad" style="width: 200px;">
        </x-slot>
        <x-slot name="description">
            You can think of DevSquad as the Navy SEALs of software development. Our team members have unique and diverse skills, and this cross-functionality lets us successfully complete any mission.
        </x-slot>
        <x-slot name="image">
            <img src="/img/partners/img_devsquad_detail.jpg" alt="Dev Squad">
        </x-slot>
    </x-partners.hero>

    <x-partners.body
        linkedin="https://www.linkedin.com/company/teamdevsquad/"
        facebook="https://facebook.com/teamdevsquad"
    >
        <x-slot name="content">
            <p>All of our clients get their own dedicated Squad. Even if you need 30 developers, everyone working on your project is split into small agile teams of 2-6 people. A battle-tested small team can move quicker and with more precision than larger teams, just like the Navy SEALs.</p>
            <p>Instead of the bug-filled code, you may have received in the past, we write robust software and test the hell out of it. But instead of just testing manually, we write additional code to test your code. This ensures bugs are spotted quickly and automatically before your employees or customers ever touch the software. And it prevents bigger problems down the road when you try to scale usage or add new features.</p>
            <p>DevSquad gives you the proven proves and all the experience you need to build your software better, faster, and right the first time.</p>
        </x-slot>
        <x-slot name="proficiencies">
            <li>Staff Augmentation</li>
            <li>Startup MVP Development</li>
            <li>Enterprise Modernization</li>
            <li>Project Rescue</li>
            <li>UI/UX Product design</li>
            <li>Laravel</li>
            <li>Vue.js</li>
            <li>Angular</li>
            <li>React</li>
            <li>SAAS Development</li>
        </x-slot>
    </x-partners.body>
@stop
