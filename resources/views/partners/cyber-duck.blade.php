@extends('partials.layout')

@section('content')
    @include('partials.header')

    <x-partners.hero
        primary-button-text="Get Hired"
        primary-button-url="https://www.cyber-duck.co.uk/our-culture/careers"
        secondary-button-url="https://www.cyber-duck.co.uk/how-we-work/technology/laravel?utm_source=Laravel%20Partner&utm_medium=Sponsorship"
    >
        <x-slot name="logo">
            <img src="/img/partners/cyberduck.png" alt="Hire Cyber-duck" style="max-width: 300px">
        </x-slot>
        <x-slot name="description">
            Our Laravel development services have been trusted by global brands for over 14+ years such as
            <a href="https://www.cyber-duck.co.uk/client-stories/cancer-research-technology">Cancer Research</a>,
            <a href="https://www.cyber-duck.co.uk/client-stories/eurofighter">Eurofighter Typhoon</a> and
            <a href="https://www.cyber-duck.co.uk/client-stories/cabot-financial">Cabot Financial</a>. We have produced game changing applications through service design underpinned by a user centred approach and an astute knowledge of Laravel and Vue.js.
        </x-slot>
        <x-slot name="image">
            <img src="/img/partners/img_cyberduck_detail.jpg" alt="Cyber Duck">
        </x-slot>
    </x-partners.hero>

    <x-partners.body
        twitter="https://twitter.com/Cyberduck_uk"
        linkedin="https://www.linkedin.com/company/cyber-duck/"
    >
        <x-slot name="content">
            <p>Our team is comprised of 75+ user experience experts, software developers and marketing strategists based in the UK, Portugal and USA. Cyber-Duck has embraced Laravel for over 8 years as our preferred product development framework. Its out-of-the-box security, continual release schedule and strong authentication has allowed our team to build and maintain bespoke products across industries, constantly iterate and evolve platforms as per business requirements developments.</p>
            <p>Over the years our dedicated Laravel development team have contributed to core packages, including:</p>

            <ul>
                <li><a href="https://github.com/Cyber-Duck/laravel-address-finder">Laravel-address-finder</a> which provides a facade for address searching. </li>
                <li><a href="https://github.com/Cyber-Duck/Laravel-Google-Tag-Manager">Laravel-Google-Tag-Manager</a> where a tracking module was built. </li>
                <li><a href="https://github.com/Cyber-Duck/php-fpm-laravel">Php-fpm-Laravel</a> which consisted of a docker image for a php-fpm container crafted to run Laravel based applications. </li>
            </ul>

            <p>We are the only digital agency with a process based on best practice that’s been accredited by five independent global standards. We are ISO 9001 certified in quality management system, ISO 27001 certified in information security management and ISO 9241 certified in user centred design. In addition, we are certified in operating under Scrum and Agile delivery management methodologies and are a Google Certified Partner in data and analytics. We bring a proven, user and data driven award winning process to each partnership.</p>

        </x-slot>
        <x-slot name="proficiencies">
            <li>Laravel Development</li>
            <li>Laravel Consulting</li>
            <li>Laravel Codebase Audits</li>
            <li>DevOps & DevSecOps</li>
            <li>Vue, React and Angular</li>
            <li>API design and support </li>
            <li>Software Architecture</li>
            <li>Service Design</li>
            <li>SaaS/eCommerce Products </li>
            <li>User Centred Design (UCD)</li>
            <li>UI/UX Product Design</li>
            <li>Technical Leadership</li>
            <li>Project Management Office (PMO)</li>
        </x-slot>
    </x-partners.body>
@stop
