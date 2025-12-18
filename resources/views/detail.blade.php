<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <div class="flex flex-col items-center mx-auto max-w-2xl mt-[-30px] py-3 px-4 bg-gray-900 shadow-2xl">
    <div class="mb-4 bg-black w-full pt-1 pb-2 px-2 rounded-md">
      <h3 class="text-2xl lg:text-3xl font-semibold text-center mb-2">{{ $game->title }}</h3>
      <div class="mx-auto bg-gray-950 p-1 border border-gray-950 max-w-30 md:max-w-36 lg:max-w-40 rounded-sm shadow-2xl">
        <img src="{{ $game->cover ?? asset('img/placeholder_game.png') }}" alt="{{ $game->cover }}" class="w-full h-full object-cover">
      </div>
      <p class="text-yellow-400 text-center">{{ $game->rating }}/10 ⭐</p>      
      <div class="">
        <p class="">Developer: {{ $game->developer }}</p>
        <p class="mb-1">Publisher: {{ $game->publisher }}</p>
        <p class="mb-1">Genre:</p>
        <ul class="flex flex-wrap gap-2">
          @foreach ($game->genres as $g)
          <li class="whitespace-nowrap text-sm bg-gray-900 py-1 px-2 rounded-lg">
            {{ $g->name }}
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="relative min-w-2xs max-w-2xl overflow-hidden">
      <div id="carousel" class="flex transition-transform duration-700">
        @if ($game->images->isEmpty())
          <img src="{{ asset('img/placeholder_game.png') }}" alt="placeholder" class="w-full h-1/2 flex shrink-0">
        @else
          @foreach ($game->images as $i)
            <img src="{{ $i->url }}" alt="game" class="w-full flex shrink-0 ">
          @endforeach
        @endif
      </div>

      <button id="prevBtn" class="absolute left-2 top-1/2 -translate-y-1/2 bg-black/60 :bg-black text-white px-3 py-1.5 rounded-full hover:bg-black/80 cursor-pointer text-xl">&lt;</button>
      <button id="nextBtn" class="absolute right-2 top-1/2 -translate-y-1/2 bg-black/60 :bg-black text-white px-3 py-1.5 rounded-full hover:bg-black/80 cursor-pointer text-xl">&gt;</button>
    </div>

    <div class="mt-4 bg-black w-full pt-1 pb-2 px-2 rounded-md">
      <p>{{ $game->title }} {{ $game->description }}</p>
    </div>
  </div>

  

  {{-- <div class="mb-4">
    <h3 class="text-2xl font-semibold">{{ $game->title }}</h3>
    <p class="text-yellow-400">{{ $game->rating }}/10 ⭐</p>
    <p>Developer: {{ $game->developer }}</p>
    <p>Publisher: {{ $game->publisher }}</p>
  </div> --}}

<script>
  const carousel = document.getElementById("carousel");
  const nextBtn = document.getElementById("nextBtn");
  const prevBtn = document.getElementById("prevBtn");
  const total = carousel.children.length;
  let index = 0;

  function goTo(i) {
    index = (i + total) % total;
    carousel.style.transform = `translateX(-${index * 100}%)`;
  }

  function next() {
    goTo(index + 1);
  }
  function prev() {
    goTo(index - 1);
  }

  nextBtn.addEventListener("click", next);
  prevBtn.addEventListener("click", prev);

  let timer = setInterval(next, 3000);

  carousel.parentElement.addEventListener("mouseenter", () => clearInterval(timer));
  carousel.parentElement.addEventListener("mouseleave", () => {
    timer = setInterval(next, 3000);
  });

</script>

</x-layout>
