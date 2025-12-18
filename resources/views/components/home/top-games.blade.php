@props(['topGames'])

<h3 class="font-semibold text-xl lg:text-2xl mb-2 px-2">Top Games</h3>
<ul class="px-2 lg:max-h-[410px] lg:overflow-hidden lg:overflow-y-scroll custom-scroll-y">
@foreach ($topGames as $t)
@php
    $genreCount = $t->genres->count();
@endphp
    <li class="mb-4 last:mb-0">
        <a href="{{ route('game.detail', ['id' => $t->id]) }}" class="relative bg-gray-950 hover:text-white group flex border border-gray-900 rounded-md overflow-hidden">
            <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition"></div>
            <div class="relative w-24 h-36 flex shrink-0">
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition"></div>
                <img src="{{ $t->cover ?? asset('img/placeholder_game.png') }}" alt="{{ $t->title }}" class="w-full h-full object-cover">
                <p class="absolute top-0 text-left font-bold text-sm bg-black/80 py-1 px-2 rounded-br-md">
                    {{ $loop->iteration }}.
                </p>
            </div>
            <div class="mx-2 w-full justify-between flex flex-col">
                <div class="w-full py-0.5">
                    <p class="text-md font-semibold mb-0.5 line-clamp-2">{{ $t->title }}</p>
                    <p class="text-xs text-yellow-400">{{ $t->rating }}/10⭐</p>
                </div>
                <div class="w-full">
                    <p class="text-xs">Developer: {{ $t->developer }}</p>
                    <p class="text-xs">Publisher: {{ $t->publisher }}</p>
                </div>
                <div class="w-full pb-1 overflow-hidden">
                    <ul class="flex space-x-1 overflow-hidden">
                        @foreach ($t->genres as $g)
                            <li class="text-xs font-extralight rounded-lg bg-gray-900 w-fit py-0.5 px-1 whitespace-nowrap">{{ $g->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </a>
    </li>
@endforeach
</ul>