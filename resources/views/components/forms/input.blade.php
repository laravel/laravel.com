@props(['type' => 'text'])

<input {{ $attributes->merge(['class' => 'form-input w-full block px-3 py-2 border border-gray-400 sm:text-sm focus:outline-none focus:ring-0 focus:border-red-600 transition']) }} type="{{ $type }}">
