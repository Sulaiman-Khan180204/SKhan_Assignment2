<x-layout title="{{ $player->name }}">

    <div class="bg-white rounded-xl shadow p-8 flex gap-8">

        {{-- Photo --}}
        <div>
            @if($player->photo)
            <img src="{{ $player->photo }}" 
                 class="w-48 h-48 rounded-xl object-cover shadow">
            @else
            <div class="w-48 h-48 bg-gray-200 rounded-xl"></div>
            @endif
        </div>

        {{-- Stats --}}
        <div>
            <h1 class="text-3xl font-bold mb-4 text-gray-900">{{ $player->name }}</h1>

            <div class="space-y-2 text-gray-700">
                <p><strong>Position:</strong> {{ $player->position }}</p>
                <p><strong>Squad Number:</strong> {{ $player->number }}</p>
                <p><strong>Nationality:</strong> {{ $player->nationality }}</p>
                <p><strong>Appearances:</strong> {{ $player->appearances }}</p>
                <p><strong>Goals:</strong> {{ $player->goals }}</p>
                <p><strong>Assists:</strong> {{ $player->assists }}</p>
                <p><strong>Goal Ratio:</strong> {{ $player->getGoalRatio() }}</p>
            </div>

            <div class="mt-6 flex gap-4">
                <a href="/players/{{ $player->id }}/edit">
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Edit
                    </button>
                </a>

                <form method="POST" action="/players">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{ $player->id }}">
                    <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                        Delete
                    </button>
                </form>
            </div>

        </div>
    </div>

</x-layout>