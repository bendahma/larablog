@props(['active'])

@php
$classes = ($active ?? false)
            ? ' inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-100 focus:outline-none hover:text-white hover:font-bold transition duration-150 ease-in-out'
            : ' inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-50 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
