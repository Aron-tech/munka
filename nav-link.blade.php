@props(['active' => false])

<a class="{{ $active ? 'bg-blue-600 text-white': 'text-black hover:bg-blue-400 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page': 'false' }}"
   {{ $attributes }}
>{{ $slot }}</a>
