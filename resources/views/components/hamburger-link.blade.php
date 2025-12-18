@props(['active' => false])

<a {{ $attributes }} aria-current="{{ $active ? 'page' : 'false' }}"
  class="{{ $active ? 'bg-gray-950 text-white' : 'hover:bg-white/5 hover:text-white' }} block py-1 rounded-sm bg-gray-900">{{ $slot }}</a>