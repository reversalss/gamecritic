<x-app-layout>

<div class="border-yellow-400 border-b-2 w-full h-1/2 relative">
    <div class="w-full h-full overflow-hidden">
        @if (isset($game->screenshots))            
           <img src="{{str_replace('t_thumb', 't_screenshot_big_2x', $game->screenshots[0]->url)}}" class="w-full h-full object-cover blur-xl" draggable="false">
        @endif    </div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 h-full">
        @if (isset($game->cover->url))
        <img src="{{str_replace('t_thumb', 't_cover_big_2x', $game->cover->url)}}" class="h-full border-2 border-b-0 border-yellow-400 mx-auto">
        @else
        <img src="/images/missingcover.png" class="h-full border-2 border-b-0 border-yellow-400 mx-auto">
        @endif
    </div>
</div>

<div class="h-full">
    <div class="grid grid-flow-col grid-cols-2 h-full pt-5">
        <div class="pl-5 pt-5 w-full pr-16">
            <div class="bg-black-50 p-5 py-10 w-full rounded-xl">
                <h1 class="font-bold text-6xl underline">{{$game->name}}</h1>
                <h1 class="pt-1 opacity-75 w-full">
                    @if (isset($game->genres))    
                        @foreach ($game->genres as $index => $genre)
                            {{ $genre->name }}@if ($index != count($game->genres) - 1),@endif
                        @endforeach
                    @endif
                </h1>
                <h1 class="font-normal text-2xl w-full pt-5">{{$game->summary ?? "N/A"}}</h1>
            </div>
        </div>
        <div class="pl-16 pt-5 w-full border-l-2">
            <div class="bg-black-50 p-5 py-10 w-3/4 rounded-xl">
                <h1 class="font-bold text-6xl underline">Platforms:</h1>
                <h1 class="font-normal text-2xl w-full pt-5">
                    @if (isset($game->platforms))
                        @foreach ($game->platforms as $platform)
                            <h1 class="font-normal text-2xl w-full pt-2">{{$platform->abbreviation}}</h1>
                        @endforeach
                    @endif
                </h1>
            </div>
        </div>
    </div>
</div>

</x-app-layout>