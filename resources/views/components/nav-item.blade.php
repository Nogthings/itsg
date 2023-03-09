@props(['active'])

@php
$classes = ($active ?? false) ? 'flex items-center p-2 text-base font-normal text-gray-50 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 bg-indigo-600 hover:text-gray-800' : 'flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700';
@endphp


<a {{ $attributes->merge(['class' => $classes]) }}>
    <span class="flex ">{{ $slot }}</span>
</a>
