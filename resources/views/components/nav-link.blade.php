@props(['active' => false])

<a class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white' }} text-xl rounded-md px-3 py-2 text-sm font-medium font-semibold transition-colors duration-300" 
    aria-current="{{ $active ? 'page': 'false' }}"{{ $attributes }}>{{ $slot }}</a>
