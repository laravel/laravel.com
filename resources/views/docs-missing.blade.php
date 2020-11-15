<h1>Page not found.</h1>

@if($otherVersions->isEmpty())
    <p>Nothing to see here.</p>
@else
    <p>This page does not exist for this version of Laravel but was found in other versions.</p>

    <div>
        <ul class="list-custom leading-4 space-y-3">
            @foreach($otherVersions as $key => $title)
                <li><a href="{{ url('/docs/'.$key.'/'.$page) }}">{{ $title }}</a></li>
            @endforeach
        </ul>
    </div>
@endif
