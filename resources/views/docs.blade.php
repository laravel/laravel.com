@extends('partials.layout')

@section('content')
    <div class="sidebar_layout" id="docsScreen">

        <div class="page_contain">
            <div class="contain">
                <aside class="sidebar">
                    <a href="/" class="logo">
                        <img class="mark" src="/img/logomark.min.svg" alt="Laravel">
                        <img class="type" src="/img/logotype.min.svg" alt="Laravel">
                    </a>
                    <nav>
                        <div class="navigation_contain">
                            <div class="docs_sidebar">
                                {!! $index !!}
                            </div>

                            <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CKYILK3E&placement=laravelcom" id="_carbonads_js"></script>


                        </div>
                    </nav>
                    <div class="trigger_contain">
                        <a href="#" class="nav_trigger" aria-label="Menu">
                            <div class="bar"></div>
                        </a>
                    </div>
                </aside>

                <section class="body_content">
                    <header class="docs_actions">
                        <div class="version_drop">
                            <div class="input_group">
                                <label>Version</label>
                                <div class="custom_select">
                                    <select id="version_switcher" aria-label="Laravel version">
                                        @foreach ($versions as $key => $display)
                                            <option {{ $currentVersion == $key ? 'selected' : '' }} value="{{ url('docs/'.$key.$currentSection) }}">{{ $display }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="search_contain">
                            <div class="input_group search icon">
                                <input type="text" class="search_input" id="search-docs-input" placeholder="Search Docs" aria-label="Search in the documentation">
                                <input type="submit" class="search_submit icon_display">
                            </div>
                        </div>
                    </header>
                    <section class="docs_body">
                        <section class="docs_main">
                            @unless (in_array($currentVersion, [DEFAULT_VERSION, 'master']))
                                <blockquote>
                                    <div class="callout">
                                        <div class="icon orange">
                                            <img src="{{ asset('/img/callouts/exclamation.min.svg') }}" alt="Icon"/>
                                        </div>

                                        <p class="content">
                                            <strong>WARNING</strong> You're browsing the docs for an older version.
                                            Consider upgrading your project to <a href="{{ route('docs.version', DEFAULT_VERSION) }}">Laravel {{ DEFAULT_VERSION }}</a>.
                                        </p>
                                    </div>
                                </blockquote>
                            @endunless

                            {!! $content !!}
                        </section>
                    </section>
                </section>
            </div>
        </div>

    </div>
@stop
