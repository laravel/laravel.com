@extends('partials.layout')

@section('content')
    @include('partials.header')

    <x-partners.hero
        primary-button-text="Hire Romega"
        primary-button-url="mailto:bkeith@romegasoftware.com"
        secondary-button-url="https://romegadigital.com/"
    >
        <x-slot name="logo">
            <img src="/img/partners/romega.svg" alt="Romega">
        </x-slot>
        <x-slot name="description">
            Managing development, infrastructure, execution, and everything between is time-consuming and error-prone. Whether your goal is to build software, augment staff, upgrade security, or get a product out the door, Romega Software can back you with 30+ years of industry experience, giving you the confidence to create and deploy.
        </x-slot>
        <x-slot name="image">
            <img src="/img/partners/romega_detail.jpg" alt="Romega">
        </x-slot>
    </x-partners.hero>

    <x-partners.body
        twitter="https://twitter.com/romegasoftware"
        github="https://github.com/romegasoftware"
        linkedin="https://www.linkedin.com/company/romegasoftware/"
    >
        <x-slot name="content">
            <p>Infrastructure and development don’t have to be at odds. Incorporating these efforts help your business and your product become more stable, more scalable, and more secure. This concept comes from our own background.</p>
            <p>We’ve worked in, for, and with SaaS businesses of all sizes, as well as with multiple Fortune 500 companies. It’s frustrating when multiple portions of the process are disconnected. Success comes when there’s a sense of confidence in every decision made throughout. We’ve done the latter for our clients, and we want to do the same for you.</p>
            <p>Our biggest priority is getting to know your business and your pain points, so we can help you eliminate them efficiently. Access to direct and real-time communication is pivotal to accomplishing any goal, so we make that a priority.</p>
            <p>This partnership doesn’t end after deployment. We offer continued support by managing and monitoring your software, proactively finding issues before they become problems, and keeping you on the latest, greatest technology. Laravel is our chosen tool to make this happen.</p>
        </x-slot>
        <x-slot name="proficiencies">
            <li>Infrastructure and security</li>
            <li>Processes and deployment</li>
            <li>MVP consultation/business objectives and cost consultation </li>
            <li>API integrations</li>
            <li>API design</li>
            <li>Staff augmentation</li>
            <li>Digital signage and display integration</li>
            <li>Multi-Tenancy design</li>
            <li>End-to-end technology partner</li>
        </x-slot>
    </x-partners.body>
@stop
