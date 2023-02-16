<x-app-layout>
   
    <div class="grid grid-flow-row grid-cols-3 pt-16 justify-items-center">
        @foreach ($games as $game)
            @foreach ($covers as $cover)           
                <x-featgame
                :name="$game->name"
                :rating="$game->rating ?? 0"
                :cover="$cover->url"
                />
            @endforeach
        @endforeach
    </div>

    <img src="https://api.igdb.com/v4/covers/">






</x-app-layout>