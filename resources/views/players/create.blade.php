<x-layout title="Add new player">

    <h1>Add a new player</h1>

    <form method="POST" action="/players">
        @csrf

        <div>
            <label>Name:</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>Position:</label>
            <input type="text" name="position">
        </div>

        <div>
            <label>Squad Number:</label>
            <input type="text" name="number">
        </div>

        <div>
            <label>Nationality:</label>
            <input type="text" name="nationality">
        </div>

        <div>
            <label>Appearances:</label>
            <input type="text" name="appearances">
        </div>

        <div>
            <label>Goals:</label>
            <input type="text" name="goals">
        </div>

        <div>
            <button type="submit">Save Player</button>
        </div>

        @if ($errors->any())
            <div class = "error-box" style="color:red; margin-bottom:10px;">

            <ul>

            @foreach ($errors->all() as $error)
                <li> {{$error}}</li>
                @endforeach
            </ul>

            </div>
            @endif

    </form>

</x-layout>
