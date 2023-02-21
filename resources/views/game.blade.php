<x-app-layout>

<div class="border-yellow-400 border-b-2 w-full h-1/2 relative">
    <div class="w-full h-full overflow-hidden">
        <img src="{{str_replace('t_thumb', 't_screenshot_big_2x', $game->screenshots[0]->url)}}" class="w-full h-full object-cover blur-xl" draggable="false">
    </div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 h-full">
        <img src="{{str_replace('t_thumb', 't_cover_big_2x', $game->cover->url)}}" class="h-full border-2 border-b-0 border-yellow-400 mx-auto">
    </div>
</div>

<div class="pl-5 pt-5 w-full">
    <h1 class="font-bold text-6xl underline">{{$game->name}}</h1>
    <h1 class="pt-2 opacity-75">
        @foreach ($game->genres as $index => $genre)
            {{ $genre->name }}@if ($index != count($game->genres) - 1),@endif
        @endforeach

    </h1>
    <h1 class="font-normal text-2xl w-1/2 pt-10">{{$game->summary}}</h1>
</div>


</x-app-layout>