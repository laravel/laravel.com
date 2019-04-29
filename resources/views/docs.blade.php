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

                            <div id="carbonads"><span><span class="carbon-wrap"><a href="//srv.carbonads.net/ads/click/x/GTND42QWFTSDE2QUCA74YKQMCEADKKJWCWSDEZ3JCWBDE2Q7CVYI523KC6BIV53UCTAI6K3EHJNCLSIZ?segment=placement:laravelcom;" class="carbon-img" target="_blank" rel="noopener"><img src="https://cdn4.buysellads.net/uu/1/41312/1547165213-HS1.png" alt="" border="0" height="100" width="130" style="max-width: 130px;"></a><a href="//srv.carbonads.net/ads/click/x/GTND42QWFTSDE2QUCA74YKQMCEADKKJWCWSDEZ3JCWBDE2Q7CVYI523KC6BIV53UCTAI6K3EHJNCLSIZ?segment=placement:laravelcom;" class="carbon-text" target="_blank" rel="noopener">HelloSign: The Simple, Secure, Send in Seconds eSignature. Try it free today.</a></span><a href="http://carbonads.net/?utm_source=laravelcom&amp;utm_medium=ad_via_link&amp;utm_campaign=in_unit&amp;utm_term=carbon" class="carbon-poweredby" target="_blank" rel="noopener">ads via Carbon</a></span></div>

                        </div>
                    </nav>
                    <div class="trigger_contain">
                        <a href="#" class="nav_trigger"><div class="bar"></div></a>
                    </div>
                </aside>

                <section class="body_content">
                    <header class="docs_actions">
                        <div class="version_drop">
                            <div class="input_group">
                                <label>Version</label>
                                <div class="custom_select">
                                    <select id="version_switcher">
                                        @foreach ($versions as $key => $display)
                                            <option {{$currentVersion == $key ? 'selected="yes"' : ''}}" value="{{ url('docs/'.$key.$currentSection) }}">{{ $display }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="search_contain">
                            <div class="input_group search icon">
                                <input type="text" class="search_input" placeholder="Search Docs">
                                <input type="submit" class="search_submit icon_display">
                            </div>
                        </div>
                    </header>
                    <section class="docs_body">
                        <nav class="docs_nav">
                            <!-- <h1 class="page_title">{{$title}}</h1> -->
                        </nav>
                        <section class="docs_main">
                            {!! $content !!}
                        </section>
                    </section>
                </section>
            </div>
        </div>

    </div>
@stop
