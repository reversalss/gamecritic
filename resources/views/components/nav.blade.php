<header class="header sticky top-0 bg-slate-800 shadow-md flex items-center justify-between px-8 py-5" id="navbar">
    <!-- Logo -->
    <h1 class="w-3/12 font-logo text-4xl text-white">
        <a href="/"><span class="text-yellow-400">GAME</span>critic</a>
    </h1>

    <!-- Search bar -->

    <input type="text" placeholder="Search..." class="text-black font-maven font-bold m-auto">

    <!-- Nav bar -->
    <nav class="nav font-maven text-xl text-white font-maven">
        <ul class="flex items-center">
            <li class="p-4 border-b-2 border-yellow-400 border-opacity-0 hover:border-opacity-100 hover:textyellow-400 duration-200 cursor-pointer-active">
                <img src="{{url('images/login.png')}}" alt="login icon" class="h-8 float-left">
                <a href="/login" class="px-1">Login</a>
            </li>
            <li class="p-4 border-b-2 border-yellow-400 border-opacity-0 hover:border-opacity-100 hover:textyellow-400 duration-200 cursor-pointer-active">
                <img src="{{url('images/cogwheel.png')}}" alt="settings icon" class="h-8 float-left">
                <a href="/settings" class="px-1">settings</a>
            </li>
        </ul>
    </nav>
</header>