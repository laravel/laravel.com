<h1>Page not found</h1>

@if($otherVersions->isEmpty())
    <p>Nothing to see here.</p>
@else
    <p>This page does not exist in this version of Laravel but can be found in others.</p>
    <div class="content-list">
        <ul>
            @foreach($otherVersions as $key => $title)
                <li><a href="{{ url('/docs/'.$key.'/'.$page) }}">{{ $title }}</a></li>
            @endforeach
        </ul>
    </div>
@endif
