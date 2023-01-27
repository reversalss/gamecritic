<x-app-layout>
    <div class="flex flex-col items-center justify-center h-3/4 pt-20">
      <div class="bg-slate-900 w-96 rounded-3xl shadow-md border-slate-900 border-2">
        <div class="bg-black-25 text-center rounded-t-3xl h-1/4 shadow-xl pb-10">
            <h1 class="font-maven font-bold text-5xl pt-8">REGISTER</h1>
        </div>
        <div>
            <form class="text-center py-12" action="/registering" method="GET" autocomplete="off" >
                <div>
                    <input type="text" placeholder="Username" class="text-white font-bold rounded-md placeholder:pl-3 bg-black-50 py-3 px-5 border-0 focus:ring-yellow-400" name="username">
                </div>
                <div class="pt-5">
                    <input type="text" placeholder="Email" class="text-white font-bold rounded-md placeholder:pl-3 bg-black-50 py-3 px-5 border-0 focus:ring-yellow-400" name="email">
                </div>
                <div class="pt-5">
                    <input type="password" placeholder="Password" class="text-white font-bold rounded-md placeholder:pl-3 bg-black-50 py-3 px-5 border-0 focus:ring-yellow-400" name="password">
                </div>
                <div class="pt-5">
                    <input type="password" placeholder="Confirm Password" class="text-white font-bold rounded-md placeholder:pl-3 bg-black-50 py-3 px-5 border-0 focus:ring-yellow-400" name="password_confirmation">
                </div>
                <div class="pt-10">
                    <button type="submit" value="info" class="bg-black-50 hover:bg-yellow-400 hover:text-black transition-all duration-75 py-3 px-9 rounded-md font-bold">Register</button>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="py-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
      </div>
    </div>
</x-app-layout>