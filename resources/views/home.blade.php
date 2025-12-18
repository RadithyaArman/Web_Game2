<x-layout>
  <x-slot:title>{{ $title }}</x-slot>
  
  <div class="-mt-4 lg:grid lg:grid-cols-12 lg:gap-4">
    {{-- <div class="col-span-2 bg-black p-2 rounded-xl">
      <x-home.genres :genres="$genres"></x-home.genres>
    </div> --}}

    <div class="col-span-9 py-2">
      <x-home.latest-games :games="$games"></x-home.latest-games>
    </div>

    <div class="col-span-3 bg-black p-2 rounded-md">
      <x-home.top-games :topGames="$topGames"></x-home.top-games>
    </div>
  </div>

</x-layout>
