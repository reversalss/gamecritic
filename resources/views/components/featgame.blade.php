<div class="pb-3 justify-content-center flex flex-col min-w-0">
    <a href="/games/{{$id}}"><img src="{{str_replace('t_thumb', 't_cover_big_2x', $cover)}}" class=""></a>
    <div class="bg-black-50 pt-2 px-5 pb-4 font-bold h-1/2 min-w-0">
        <div class="box-border min-w-0">
            <h1 class="text-xl whitespace-nowrap text-ellipsis overflow-hidden min-w-0 w-52"><a href="/games/{{$id}}">{{$name}}</a></h1>
        </div>
        <div>
            <h1 class=""><span class="opacity-40 text-sm">{{str_replace("Hack and slash/Beat 'em up", "Hack and slash", $genre)}}</span><span class="float-right text-yellow-400 opacity-100 box-border">{{round($rating)}}%</span></h1>
        </div>
    </div>
</div>