<section class="py-12 md:py-20 lg:py-32">
    <div class="max-w-screen-xl mx-auto px-8">
        <h6 class="text-gray-600 font-medium text-sm">Laravel Partner</h6>
        <div class="mt-8 lg:flex lg:items-center lg:justify-between">
            {{ $logo }}
            <div class="mt-8 flex items-center space-x-4 lg:mt-0">
                <x-button.primary href="{{ $primaryButtonUrl }}">
                    {{ $primaryButtonText }}
                </x-button.primary>
                <x-button.secondary href="{{ $secondaryButtonUrl }}">
                    {{ $secondaryButtonText ?? 'Visit Website' }} →
                </x-button.secondary>
            </div>
        </div>
    </div>
    <div class="max-w-screen-xl mt-12 mx-auto px-8 md:pr-0 md:mt-16 lg:mt-24 xl:pr-8">
        <div class="md:grid md:grid-cols-5 md:gap-x-8 lg:gap-12">
            <h3 class="text-lg font-medium leading-6 md:col-span-3 md:text-3xl md:leading-9 lg:text-4xl lg:leading-10">
                {{ $description }}
            </h3>
            <div class="mt-8 md:mt-0 md:col-span-2">
                {{ $image }}
            </div>
        </div>
    </div>
</section>
