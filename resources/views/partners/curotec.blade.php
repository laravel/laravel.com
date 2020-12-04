@extends('partials.layout')

@section('content')
    @include('partials.header')

    <x-partners.hero
        primary-button-text="Hire Curotec"
        primary-button-url="mailto:info@curotec.com"
        secondary-button-url="https://www.curotec.com"
    >
        <x-slot name="logo">
            <img src="/img/partners/curotec.png" alt="Curotec" style="width: 200px;">
        </x-slot>

        <x-slot name="description">
            Curotec is a team of Laravel architects and senior engineers with extensive experience in web, e-commerce, integrations, and application development. Curotec Laravel engineers are positioned to partner with you to create beautiful, functional, and purpose-built applications.
        </x-slot>

        <x-slot name="image">
            <img src="/img/partners/curotec_detail.jpg" alt="Curotec">
        </x-slot>
    </x-partners.hero>

    <x-partners.body
        twitter="https://twitter.com/curotec"
        linkedin="https://www.linkedin.com/company/curotec/"
    >
        <x-slot name="content">
            <p>Our experience extends from ground-up development using the Laravel framework to side-by-side collaborations that make in-house teams more productive with Laravel.</p>
            <p>Innovation doesn’t stop or start at a company’s size. That’s why our skilled Laravel development team has helped a wide variety of businesses - from enterprises to digital-first startups - realize their vision with highly-usable, seamless, professionally-built applications.</p>
            <p>Our team is equipped to take your ideas from concept to launch, pairing the powerful Laravel framework with complementary technologies and deep software planning and design experience to transform your vision into reality. But Curotec can do more than greenfield development, drawing on the comprehensive skill set of our teams and leaders to step in at any stage of development, from planning and design to long-term support. </p>
            <p> Rounding out the team with digital strategy, UX, and DevOps, the Curotec Laravel engineers are positioned to partner with you to create beautiful, functional, and purpose-built applications.</p>
        </x-slot>
        <x-slot name="proficiencies">
            <li>Staff Augmentation</li>
            <li>MVP Development</li>
            <li>E-commerce</li>
            <li>Application Modernization</li>
            <li>Product Discovery</li>
            <li>Project Rescue</li>
            <li>Code Audits</li>
            <li>SaaS Development</li>
            <li>UI/UX Design</li>
            <li>Laravel</li>
            <li>Vue.js / Nuxt.js</li>
            <li>iOS</li>
            <li>Android</li>
            <li>React</li>
            <li>Flutter</li>

        </x-slot>
    </x-partners.body>
@stop
