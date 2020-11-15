@extends('partials.layout')

@section('content')
    @include('partials.header')

    <x-partners.hero
        primary-button-text="Hire 64 Robots"
        primary-button-url="https://www.64robots.com/launch-your-project"
        secondary-button-url="https://64robots.com/"
    >
        <x-slot name="logo">
            <img src="/img/partners/64Robots.min.svg" alt="64Robots">
        </x-slot>
        <x-slot name="description">
            64 Robots is a team of Laravel experts brought together by a desire to create cutting edge web products. Whether building something new or refactoring a product in need of help, we'll give you a personal and thoughtful approach to development. We believe in partnering for the long haul to bring your vision to life and support it as it grows.
        </x-slot>
        <x-slot name="image">
            <img src="/img/partners/img_64robots_detail.png" alt="64Robots">
        </x-slot>
    </x-partners.hero>

    <x-partners.body
        twitter="https://twitter.com/64robots"
        linkedin="https://de.linkedin.com/company/12904226"
    >
        <x-slot name="content">
            <p>We specialize in building Laravel APIs, Nuxt.js SSR applications, Vue.js SPAs and NativeScript-Vue mobile applications.</p>
            <p>We love working with companies of all sizes. We've guided early-stage, funded startups to a successful launch and helped large international companies refactor and rebuild existing products to scale into the future. Whatever your needs, we'll help you make the right technology decisions and build a polished product that will put you on the path to success.</p>
            <p>We set ourselves apart by our level of involvement in your product. Think of us as an extension of your team. Whether augmenting an existing team or stepping in as de facto CTO to make the technical decisions, we're there for you. We're selective in the products that we take on, as we truly want to believe in our work and do everything we can to make them successful.</p>
        </x-slot>
        <x-slot name="proficiencies">
            <li>Laravel</li>
            <li>Vue.js / Nuxt.js</li>
            <li>NativeScript-Vue</li>
            <li>APIs</li>
            <li>SaaS/ecommerce Products</li>
            <li>UI/UX Product Design</li>
            <li>Staff Augmentation </li>
            <li>Code Audits & Refactoring</li>
        </x-slot>
    </x-partners.body>
@stop
