<div class="pb-3 justify-content-center flex flex-col w-full">
    <img src="{{str_replace('t_thumb', 't_cover_big_2x', $cover)}}" class="h-full">
    <div class="bg-black-50 pt-2 px-5 pb-4 font-bold h-1/2">
        <div>
            <h1 class="text-2xl"><span>{{$name}}</span><span class="float-right text-yellow-400">{{round($rating)}}%</span></h1>
        </div>
        <div>
            <h1 class="opacity-40">{{$genre}}</h1>
        </div>
    </div>
</div>