@props(['genres'])

<h3 class="font-semibold text-xl lg:text-2xl mb-2 px-2">Genres</h3>
<ul class="flex lg:block space-y-1 overflow-hidden overflow-x-scroll overflow-y-hidden lg:overflow-x-hidden custom-scroll">
    @foreach ($genres as $g)
        <li><a href="{{ route('katalog', ['genres' => $g->id]) }}" class="text-sm lg:text-base hover:bg-white/5 hover:text-white py-1 px-2 whitespace-nowrap">{{ $g->name }}</a></li>
    @endforeach
</ul>