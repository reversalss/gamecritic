<x-app-layout>
   
    <div class="grid xl:grid-cols-7 lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-2 grid-flow-row gap-5 pt-16 px-5 justify-items-center">
        @foreach ($games as $game)

            @php
                $cover = null;
                foreach ($covers as $c) {
                    if ($c->game == $game->id) {
                        $cover = $c->url;
                        break;
                    }
                }
            @endphp

            <x-featgame
            :name="$game->name"
            :rating="$game->rating ?? 0"
            :genre="$game->genres[0]->name ?? 'N/A'"
            :platform="$game->platforms[0]->abbreviation"
            :cover="$cover"
            />

        @endforeach
    </div>







</x-app-layout>