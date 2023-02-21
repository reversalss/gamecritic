{{-- @php
    dd($games)
@endphp --}}
<x-app-layout>

    <div class="grid min-[2000px]:grid-cols-7 xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-flow-row gap-5 pt-16 px-5 justify-items-center">

        @foreach ($games as $game)
            @if (isset($game->game))  
                @if(!isset($game->game->parent_game))    
                <x-featgame
                :id="$game->game->id"
                :name="$game->game->name ?? 'N/A'"
                :rating="$game->game->total_rating ?? 0"
                :genre="$game->game->genres[0]->name ?? 'N/A'"
                :platform="$game->game->platforms[0]->abbreviation ?? 'N/A'"
                :cover="$game->game->cover->url ?? '/images/missingcover.png'"
                />
                @endif
            @endif

        @endforeach
    </h1>


</x-app-layout>