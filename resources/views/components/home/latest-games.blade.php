@props(['games'])

<h3 class="font-semibold text-xl lg:text-2xl mb-2">Latest Games</h3>
<ul class="flex lg:grid lg:grid-cols-6 gap-2 overflow-x-scroll overflow-y-hidden lg:overflow-x-hidden custom-scroll-x">
@foreach( $games as $g )
    <li class="flex justify-center">
        <a href="{{ route('game.detail', ['id' => $g->id]) }}" class="bg-gray-900 p-1 rounded-md hover:text-white group">
            <div class="relative h-44 w-28 lg:h-48 lg:w-32 rounded-md overflow-hidden">
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 rounded-md transition"></div>
                <img src="{{ $g->cover ?? asset('img/placeholder_game.png') }}" alt="{{ $g->title }}" class="w-full h-full object-cover">
                <p class="absolute bottom-0 text-center bg-black/75 w-full whitespace-normal wrap-break-word py-1 rounded-b-md z-1 font-semibold text-sm">{{ $g->title }}</p>
            </div>
        </a>
    </li>
@endforeach
</ul>
