
<x-layout title="Manchester United Player Stats 25/26">
    <h1>Manchester United Stats 25/26</h1>

    <form method = "GET" action="/players" style="margin-bottom:20px;">

    <input
            type="text"
            name="search"
            placeholder="Search players..."
            value= "{{ request('search') }}"

    >

    <button type="submit">Search</button>


    </form>

    @foreach($players as $player)
    

    <p>

        <a href="/players/{{ $player->id }}">
            {{ $player->name}} ({{ $player->position}})

    </a>

    </p>
    @endforeach

    {{ $players->links()}}
</x-layout>
