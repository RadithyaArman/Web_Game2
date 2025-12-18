@props(['current', 'genres', 'sort'])

<div x-data="{ open:false }" class="relative inline-block text-left">
    <button @click="open = !open" class="min-w-24 px-2 py-1 text-sm rounded-md border border-gray-700 bg-gray-900 text-gray-200 hover:bg-gray-800 flex justify-between items-center whitespace-nowrap">
        {{ $current ? $genres->firstWhere('id', $current)->name : 'All' }}
        <span class="ml-1">&#9662;</span>
    </button>

    <div x-show="open" @click.away="open=false" x-transition class="absolute mt-1 w-40 bg-gray-900 border border-gray-300 shadow-lg max-h-48 overflow-y-auto custom-scroll-y z-20">
        <a href="{{ route('katalog', ['sort' => $sort]) }}" class="block px-3 py-1 text-sm hover:bg-gray-800 {{ !$current ? 'bg-gray-950 font-semibold' : '' }}">
            All
        </a>

        @foreach ($genres as $g)
            <a href="{{ route('katalog', ['genre' => $g->id, 'sort' => $sort]) }}" class="block px-3 py-1 text-sm hover:bg-gray-800 {{ $current == $g->id ? 'bg-gray-950 font-semibold' : '' }}">
                {{ $g->name }}
            </a>
        @endforeach
    </div>
</div>