@extends('partials.layout')

@section('content')
    @include('partials.header')

    <x-partners.hero
        primary-button-text="Hire Byte5"
        primary-button-url="mailto:cwendler@byte5.de"
        secondary-button-url="http://www.byte5.net/"
    >
        <x-slot name="logo">
            <img src="/img/partners/byte5.png" alt="Byte5">
        </x-slot>
        <x-slot name="description">
            byte5 is a web technology company based in Frankfurt, Germany. For over 10 years we have been specializing on innovative open source technologies that give our expert team all the opportunities to create great web applications, sites and shops for our international clients.
        </x-slot>
        <x-slot name="image">
            <img src="/img/partners/img_byte5_detail.png" alt="Byte5">
        </x-slot>
    </x-partners.hero>

    <x-partners.body
        twitter="https://twitter.com/byte5net"
        linkedin="https://de.linkedin.com/company/byte5-digital-media-gmbh"
    >
        <x-slot name="content">
            <p>As an experienced consultant we have perfected a lean and agile approach to make sure that each client project gets exactly what it needs in order to be a long-term success. The projects we work on cooperatively with our clients' internal developers are based on a strong project management team that also takes the position of mentor and trainer when needed.</p>
            <p>What we've learned from our experience with other technologies is the importance of a strong network. Thus we began hosting regular local Laravel events for developers in the economically strong Rhein-Main region in 2016.</p>
        </x-slot>
        <x-slot name="proficiencies">
            <li>Laravel Development</li>
            <li>Project Management</li>
            <li>APIs</li>
            <li>Angular</li>
            <li>Technical Leadership</li>
            <li>Rescue Projects</li>
            <li>Training & Mentoring</li>
        </x-slot>
    </x-partners.body>
@stop
