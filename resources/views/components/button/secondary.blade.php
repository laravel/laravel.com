<a {{ $attributes->merge(['class' => 'group relative inline-flex border border-red-600 focus:outline-none']) }}>
    <span class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
        {{ $slot }}
    </span>
</a>
