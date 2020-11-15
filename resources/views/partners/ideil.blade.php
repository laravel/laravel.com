@extends('partials.layout')

@section('content')
    @include('partials.header')

    <x-partners.hero
        primary-button-text="Hire ideil"
        primary-button-url="mailto:welcome@ideil.com"
        secondary-button-url="https://about.ideil.com/"
    >
        <x-slot name="logo">
            <img src="/img/partners/ideil.min.svg" alt="ideil">
        </x-slot>
        <x-slot name="description">
            We are a web development company of 30+ high-skilled professionals.
        </x-slot>
        <x-slot name="image">
            <img src="/img/partners/img_ideil_detail.png" alt="ideil">
        </x-slot>
    </x-partners.hero>

    <x-partners.body
        twitter="https://twitter.com/ideil"
        github="https://github.com/ideil"
        linkedin="https://www.linkedin.com/company/ideil/"
    >
        <x-slot name="content">
            <p>Our main focus is custom software development. This is the thing that we enjoy doing the most as it is always a new challenge for us to take.</p>
            <p>The web stack we're working with involves the hottest and at the same time battle-tested solutions and frameworks — Laravel, Vue.js, Nginx, MySQL. To offer our clients seamless support and full-cycle service we have a team of mobile developers that collaborate tightly with our backend team. This helps us minimize the communication barriers that are often present in distributed teams.</p>
            <p>Communication is the key for every successful partnership and we value every bit of your time and hear every word. You make yourself clear on the topic and we distribute responsibilities among the members of the team. Tasks just get done.</p>
            <p>ideil. has a keen sense of satisfaction and you can experience it as well with your next delivered product. Be it a brilliant design, sophisticated technology or carefully considered details, people can not resist this magic.</p>
        </x-slot>
        <x-slot name="proficiencies">
            <li>Laravel Development</li>
            <li>Vue.js</li>
            <li>APIs / Microservices</li>
            <li>UI/UX Product Design</li>
            <li>Software Architecture</li>
            <li>Project Management</li>
            <li>Technical Leadership</li>
            <li>E-commerce</li>
            <li>Rescue Projects</li>
            <li>Codebase Audit</li>
            <li>iOS App Development</li>
            <li>Android App Development</li>
        </x-slot>
    </x-partners.body>
@stop
