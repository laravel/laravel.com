<blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
    <h2 class="text-sm">“{{ $content }}“</h2>
    <div class="mt-5 flex items-start gap-4">
        <img src="/images/testimonials/{{ Str::slug($name) }}.jpg" class="w-10 h-10 object-cover object-center" alt="{{ $name }}">
        <div class="text-xs">
            <cite class="not-italic">{{ $name }}</cite>
            <p class="text-gray-700">{{ $title }}</p>
        </div>
    </div>
</blockquote>
