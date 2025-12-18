<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="flex justify-between">
        <div class="flex gap-2 mb-4">
            <x-filter.sort :current="request('sort')" :genre="request('genre')"></x-filter.sort>
            <x-filter.genre :genres="$genres" :current="request('genre')" :sort="request('sort')"></x-filter>
        </div>
        <form action="{{ route('katalog') }}" method="GET" id="searchForm">
            <input type="text" name="q" placeholder="Search..." id="searchInput" class="bg-gray-900 text-white border-gray-700 px-2 py-1 rounded text-sm lg:text-base">
            <a href="{{ route('katalog') }}" class="bg-gray-900 text-white border border-gray-700 px-2 py-1 rounded text-sm lg:text-base hover:bg-gray-800">Reset</a>
        </form>
    </div>
    

    <ul class="my-2 grid gap-2 grid-cols-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-7 xl:grid-cols-8 justify-center">
    @forelse( $games as $g )
        <li class="flex justify-center">
            <a href="/game/{{ $g->id }}" class="bg-gray-900 p-1 rounded-md hover:text-white group">
                <div class="relative h-44 w-28 lg:h-48 lg:w-32 rounded-md overflow-hidden">
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 rounded-md transition"></div>
                    <img src="{{ $g->cover ?? asset('img/placeholder_game.png') }}" alt="{{ $g->title }}" class="w-full h-full object-cover">
                    <p class="absolute bottom-0 text-center bg-black/75 w-full whitespace-normal wrap-break-word py-1 rounded-b-md z-1 font-semibold text-sm">{{ $g->title }}</p>
                </div>
            </a>
        </li>
        @empty
        <p class="col-span-full text-center text-gray-400 py-4">Not found</p>

    @endforelse
    </ul>

    {{ $games->appends(request()->query())->links() }}


<script>
    function getLimitByScreen() {
        const w = window.innerWidth;

        if (w >= 1280) return 16;
        if (w >= 1024) return 14;
        if (w >= 768) return 15;
        if (w >= 640) return 12;
        return 12;
    }

    const url = new URL(window.location.href);
    const currentLimit = url.searchParams.get('limit');
    const newLimit = getLimitByScreen();

    if (currentLimit != newLimit) {
        url.searchParams.set('limit', newLimit);
        window.location.href = url.href;
    }

    let timer = null;

    document.getElementById('searchInput').addEventListener('input', function () {
        clearTimeout(timer);

        timer = setTimeout(() => {
            document.getElementById('searchForm');
        }, 300);
    })


</script>

</x-layout>