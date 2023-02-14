<x-app-layout>
    <div class="flex flex-col items-center justify-center h-3/4 pt-20">
      <div class="bg-slate-900 w-96 rounded-3xl shadow-md border-slate-900 border-2">
        <div class="bg-black-25 text-center rounded-t-3xl h-1/4 shadow-xl pb-10">
            @if ($errors->any())
                <h1 class="text-red-500 pt-5">The provided credentials do not match our records.</h1>
            @else
                <h1 class="font-maven font-bold text-5xl pt-8">LOGIN</h1>
            @endif
        </div>
        <div>
            <form class="text-center py-12" method="POST" action="login">
                {{ csrf_field() }}
                <div>
                    <input type="email" placeholder="Email" class="text-white font-bold rounded-md bg-black-50 py-3 px-5 placeholder:pl-3 border-0 focus:ring-yellow-400" name="email">
                </div>
                <div class="pt-5">
                    <input type="password" placeholder="Password" class="text-white font-bold rounded-md bg-black-50 py-3 px-5 placeholder:pl-3 border-0 focus:ring-yellow-400" name="password">
                </div>
                <div class="pt-7 flex flex-row pl-20">
                    <input type="checkbox" name="remember" class="w-5 h-5 text-yellow-400 bg-slate-900 border-slate-700 rounded focus:ring-1 focus:ring-yellow-400">
                    <p class="text-sm pl-2">Remember me?</p>
                </div>
                <div class="pt-7">
                    <button type="submit" value="info" class="bg-black-50 hover:bg-yellow-400 hover:text-black transition-all duration-75 py-3 px-9 rounded-md font-bold">Login</button>
                </div>
            </form>
        </div>
      </div>
      <a href="/register" class="py-5 text-sm underline underline-offset-4">Don't have a user? Register here</a>
    </div>
</x-app-layout>