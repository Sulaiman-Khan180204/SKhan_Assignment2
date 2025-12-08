<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title }}</title>
    <meta charset="UTF-8">

    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
</head>

<body class="bg-gray-100 min-h-screen">

    {{-- NAVBAR --}}
    <nav class="bg-white shadow-md py-4">
        <div class="max-w-6xl mx-auto flex items-center justify-between px-6">

            {{-- LEFT: Crest + Brand --}}
            <div class="flex items-center gap-3">
                <img src="/images/crest.png" alt="Club Crest" class="h-10 w-10">
                <span class="text-2xl font-bold text-red-600">Man Utd Stats 25/26</span>
            </div>

            {{-- RIGHT: Navigation links --}}
            <ul class="flex gap-6 text-gray-700 font-medium">
                <li><a href="/players" class="hover:text-red-500">Players</a></li>
                <li><a href="/players/create" class="hover:text-red-500">Add Player</a></li>
                <li><a href="/team/info" class="hover:text-red-500">Team Info</a></li>
                <li><a href="/players/about" class="hover:text-red-500">About</a></li>
            </ul>

        </div>
    </nav>

    {{-- PAGE CONTENT --}}
    <main class="max-w-6xl mx-auto py-8 px-6">
        {{ $slot }}
    </main>

</body>
</html>
