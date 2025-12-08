<x-layout title="Players">

    <h1 class="text-3xl font-bold mb-6 text-gray-900">Squad Overview</h1>

    {{-- Search Bar --}}
    <form method="GET" action="/players" class="mb-6">
        <div class="flex gap-3">
            <input 
                type="text" 
                name="search" 
                placeholder="Search players..."
                class="w-64 rounded-lg border-gray-300 shadow-sm"
            >
            <button 
                class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                Search
            </button>
        </div>
    </form>

    {{-- Player Cards Grid --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        @foreach ($players as $player)
        <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition">

            {{-- Player Photo --}}
            @if($player->photo)
                <img src="{{ $player->photo }}" 
                     class="w-full h-48 object-cover rounded-lg mb-4">
            @else
                <div class="w-full h-48 bg-gray-200 rounded-lg mb-4"></div>
            @endif

            {{-- Name --}}
            <h2 class="text-xl font-semibold text-gray-900">
                <a href="/players/{{ $player->id }}" 
                   class="hover:text-red-600">
                   {{ $player->name }}
                </a>
            </h2>

            <p class="text-gray-600">{{ $player->position }} • #{{ $player->number }}</p>
            <p class="text-gray-600 text-sm mt-2">
                Apps: <span class="font-semibold">{{ $player->appearances }}</span> •
                Goals: <span class="font-semibold">{{ $player->goals }}</span> •
                Assists: <span class="font-semibold">{{ $player->assists }}</span>
            </p>

        </div>
        @endforeach

    </div>

</x-layout>
