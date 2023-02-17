<x-app-layout>

<div class="border-yellow-400 border-b-2 w-full h-1/2 relative">
    <div class="w-full h-full overflow-hidden">
        <img src="{{str_replace('t_thumb', 't_screenshot_big_2x', $game->screenshots[0]->url)}}" class="w-full h-full object-cover blur-xl">
    </div>
    <div class="absolute top-0 left-36">
        <img src="{{str_replace('t_thumb', 't_cover_big_2x', $game->cover->url)}}" class="w-1/2 translate-y-72 border-2 border-yellow-400">
        <h1 class="font-bold text-5xl pl-5 pt-5 translate-x-72 translate-y-5">{{$game->name}}</h1>
    </div>
</div>

</x-app-layout>