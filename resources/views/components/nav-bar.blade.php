<nav x-data="{ open:false }" class="bg-gray-900 sticky top-0 z-10 border-b-2 border-gray-950 shadow-lg">
  <div class="text-slate-200 mx-auto max-w-7xl px-4 lg:px-8 h-16 flex justify-between items-center">
    <div class="flex items-center">
      <span class="font-semibold text-2xl mr-6">SUBJEK</span>
      <div class="space-x-2 hidden md:block">
        <x-nav-link href="{{ route('home') }}" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="{{ route('katalog') }}" :active="request()->is('katalog')">Katalog</x-nav-link>
      </div>
    </div>
    <div class="hidden md:block">
      <a href="/login" class="hover:underline text-sm">Login</a>
    </div>
    <button 
      @click="open = !open" 
      class="md:hidden text-slate-200 focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round"
          d="M4 6h16M4 12h16M4 18h16" />
        <path x-show="open" stroke-linecap="round" stroke-linejoin="round"
          d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>
  <div x-show="open" x-transition class="md:hidden bg-gray-800 text-slate-300 text-sm font-semibold py-2 px-2 space-y-1 text-center fixed w-full">
    <x-hamburger-link href="/" :active="request()->is('/')">Home</x-hamburger-link>
    <x-hamburger-link href="/katalog" :active="request()->is('katalog')">Katalog</x-hamburger-link>
    <a href="/login" class="block py-1 bg-gray-900 hover:bg-white/5 hover:text-white rounded-sm">Login</a>
  </div>
</nav>

