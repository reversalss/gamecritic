<x-app-layout>
    <h1>Welcome to your #1 source of gaming news</h1>

    @if (Auth::check())
        <h1>Logged in WOWWWW</h1>
    @else
        <h1>not logged in >:c</h1>
    @endif


    @foreach ($games as $game)
        <h1>{{$game->name}}</h1>
    @endforeach
</x-app-layout>