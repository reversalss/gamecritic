<x-app-layout>


    <div class="grid min-[2000px]:grid-cols-7 xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-flow-row gap-5 pt-16 px-5 justify-items-center">

        @foreach ($games as $game)

            <x-featgame
            :id="$game->id ?? 0"
            :name="$game->name ?? 'N/A'"
            :rating="$game->total_rating ?? 0"
            :genre="$game->genres[0]->name ?? 'N/A'"
            :platform="$game->platforms[0]->abbreviation ?? 'N/A'"
            :cover="$game->cover->url"
            />

        @endforeach
    </h1>





</x-app-layout>