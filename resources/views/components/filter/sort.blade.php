@props(['current', 'genre'])

{{-- <select onchange="location.href=this.value" class="w-24 px-2 py-1 text-sm rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none bg-gray-50 cursor-pointer">
    <option value="{{ route('katalog', ['genre' => request('genre')]) }}"{{ request('sort') === 'asc' ? 'selected' : '' }}>A-Z</option>
    <option value="{{ route('katalog', ['sort' => 'desc', 'genre' => request('genre')]) }}"{{ request('sort') === 'desc' ? 'selected' : '' }}>Z-A</option>
</select> --}}

<div x-data="{ open:false }" class="relative inline-block text-left">
    <button @click="open = !open" class="min-w-24 px-2 py-1 text-sm rounded-md border border-gray-700 bg-gray-900 text-gray-200 hover:bg-gray-800 flex justify-between items-center whitespace-nowrap">
        {{ $current === 'desc' ? 'Z-A' : 'A-Z' }}
        <span class="ml-1">&#9662;</span>
    </button>

    <div x-show="open" @click.away="open=false" x-transition class="absolute mt-1 w-24 bg-gray-900 border border-gray-300 shadow-lg max-h-48 overflow-y-auto z-20">
        <a href="{{ route('katalog', ['genre' => $genre, 'sort' => 'asc']) }}" class="block px-3 py-1 text-sm hover:bg-gray-800 {{ $current === 'asc' || !$current ? 'bg-gray-950 font-semibold' : '' }}">
            A-Z
        </a>
        <a href="{{ route('katalog', ['genre' => $genre, 'sort' => 'desc']) }}" class="block px-3 py-1 text-sm hover:bg-gray-800 {{ $current === 'desc' ? 'bg-gray-950 font-semibold' : '' }}">
            Z-A
        </a>
    </div>
</div>