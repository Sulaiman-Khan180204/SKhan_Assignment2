<x-layout title="Edit Player">

    <h1> Edit {{$player->name}}</h1>

    @if ($errors->any())
            <div class = "error-box" style="color:red; margin-bottom:10px;">

            <ul>

            @foreach ($errors->all() as $error)
                <li> {{$error}}</li>
                @endforeach
            </ul>

            </div>
            @endif


    <form method="POST" action="/players/{{$player->id}}">
        @csrf
        @method('PATCH')
        
        <input type="hidden" name="id" value="{{$player->id}}">

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{$player->name}}">

        </div>

        <div>
            <label>Position:</label>
            <input type="text" name="position" value="{{$player->position}}">

        </div>

        <div>
            <label>Number:</label>
            <input type="number" name="number" value="{{$player->number}}">

        </div>

        <div>
            <label>Nationality:</label>
            <input type="text" name="nationality" value="{{$player->nationality}}">

        </div>

        <div>
            <label>Appearances:</label>
            <input type="number" name="appearances" value="{{$player->appearances}}">

        </div>

        <div>
            <label>Goals:</label>
            <input type="number" name="goals" value="{{$player->goals}}">

        </div>

        <button type="Submit">Save Changes</button>


    </form>

</x-layout>