<a {{ $attributes->merge(['class' => 'group relative h-12 inline-flex w-64 border border-red-600 sm:w-56 focus:outline-none' ]) }}>
    <span class="absolute inset-0 inline-flex items-center justify-center self-stretch px-6 text-white text-center font-medium bg-red-600 ring-1 ring-red-600 ring-offset-1 ring-offset-red-600 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
        {{ $slot }}
    </span>
</a>
