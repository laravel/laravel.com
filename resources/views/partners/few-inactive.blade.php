@extends('partials.layout')

@section('content')
    @include('partials.header')

    <x-partners.hero
        primary-button-text="Hire Few"
        primary-button-url="mailto:hello@few.io"
        secondary-button-url="https://few.io/"
    >
        <x-slot name="logo">
            <img src="/img/partners/few.svg" alt="Few">
        </x-slot>
        <x-slot name="description">
            We design and build rad digital products for teams of all sizes, from startups to enterprise organizations. From concept to scale, we have a proven process for helping companies build their brand experience, identify core features for an MVP, develop a roadmap for the future of their product and bring it to life.
        </x-slot>
        <x-slot name="image">
            <img src="/img/partners/img_few_detail.jpg" alt="Few">
        </x-slot>
    </x-partners.hero>

    <x-partners.body
        twitter="https://twitter.com/fewnet"
        linkedin="https://www.linkedin.com/company/workwithfew"
        facebook="https://www.facebook.com/workwithfew"
    >
        <x-slot name="content">
            <p>Since 2014, Few has been helping clients take software products to market. Few works hand-in-hand with clients to provide them the resources they need to strategize, design, build and launch thoughtful, elegant and scalable solutions.</p>
            <p>We take a transparent, team-based approach to projects. Our world-class team of developers, product managers, and designers work alongside you to build and deploy software. </p>
            <p>We use Slack to provide constant communication between you and the project manager, we typically work in two week sprints that allow you to know what features and functionality will be coming down the pipeline, with weekly progress updates to discuss any pivots or issues. All while tracking our time in detail so you are fully aware of what has been worked on and when.</p>
        </x-slot>
        <x-slot name="proficiencies">
            <li>Product Strategy</li>
            <li>Web Application Development - VueJS + Laravel</li>
            <li>UX / UI Product Design</li>
            <li>iOS & Android Application Development - React Native + Laravel</li>
            <li>API Design + Development</li>
            <li>Visual Design</li>
            <li>AR Design + Development</li>
            <li>Branding</li>
            <li>Go-to-Market Strategy</li>
            <li>Content Strategy</li>
            <li>Staff Augmentation</li>
        </x-slot>
    </x-partners.body>
@stop
