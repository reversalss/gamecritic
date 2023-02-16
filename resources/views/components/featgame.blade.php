<div class="pb-3 justify-content-center flex flex-col">
    <img src="{{str_replace('t_thumb', 't_cover_big_2x', $cover)}}" class="">
    <div class="bg-black-50 pt-2 px-5 pb-4 font-bold h-1/2">
        <div class="box-border">
            <h1 class="text-xl text-overflow-ellipsis overflow-hidden break-words">{{$name}}</h1>
        </div>
        <br>
        <div class="">
            <h1 class=""><span class="opacity-40 text-sm">{{$genre}}</span><span class="float-right text-yellow-400 opacity-100 box-border">{{round($rating)}}%</span></h1>
        </div>
    </div>
</div>