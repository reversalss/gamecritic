<header class="header sticky top-0 bg-slate-800 shadow-2xl flex items-center justify-between px-8 py-5" id="navbar">

    <!-- Logo -->
    <a href="/" class="font-logo text-4xl"><span class="text-yellow-400">GAME</span>critic</a>

    <!-- Search bar -->
    <form action="/search" method="post" class="h-14 justify-center flex flex-wrap w-1/2 ">
        <input type="text" placeholder="Search..." class="text-white font-maven font-bold h-14 w-3/4 rounded-2xl text-center bg-black-50" id="search">
        <button type="submit" value="search"><i class="fa-solid fa-magnifying-glass px-5 hover:text-yellow-400 transition-all text-2xl"></i></button>
    </form>

    <!-- Clickable Icons -->
    <nav class="nav font-maven text-xl text-white font-maven">
        <ul class="flex items-center">
            <li class="p-4 border-b-2 border-yellow-400 border-opacity-0 hover:border-opacity-100 hover:textyellow-400 duration-200 cursor-pointer-active">
                <a href="/login" class="px-1"><i class="fa-solid fa-user pr-2"></i>Login</a>
            </li>
            <li class="p-4 border-b-2 border-yellow-400 border-opacity-0 hover:border-opacity-100 hover:textyellow-400 duration-200 cursor-pointer-active">
                <a href="/settings" class="px-1"><i class="fa-solid fa-gear pr-2"></i>settings</a>
            </li>
        </ul>
    </nav>


</header>