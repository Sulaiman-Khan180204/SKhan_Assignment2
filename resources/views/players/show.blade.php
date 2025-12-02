<x-layout title="Player Details">

<h1>{{$player->name}}</h1>

<p>Position: {{$player->position}}</p>
<p>Number: {{$player->number}}</p>
<p>Nationality: {{$player->nationality}}</p>
<p>Appearances: {{$player->appearances}}</p>
<p>Goals: {{$player->goals}}</p>
<p>Goal Ratio: {{$player->getGoalRatio()}}</p>

<a href="/players/{{$player->id}}/edit"><button>Edit</button></a>

<form method="POST" action="/players/{{$player->id}}">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id" value="{{$player->id}}">
    <button type="submit">Delete</button>

</form>


</x-layout>