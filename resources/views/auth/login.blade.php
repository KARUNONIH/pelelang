@include('partial.header')
@section('title')
    Login
@endsection
<body class="bg-gradient-to-br from-gray-800 to-gray-600">

    <div class="flex min-h-screen">
        <div class=" m-auto flex">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class=" w-[500px] h-[600px] bg-white shadow-md rounded-[15px]">
                <div id="default-carousel" class="relative" data-carousel="static">
                    <div class="relative">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <p class="text-center text-[36px] font-bold mt-16 mb-[65px]">Login</p>
                                <div class="mx-auto w-[380px] mb-8">
                                    <div class="flex flex-col">
                                        <label for="email"
                                            class=" absolute translate-x-6 -translate-y-[14px] px-[10px] bg-white">email</label>
                                        <div class="flex">
                                            <p
                                                class=" absolute translate-x-4 translate-y-1 text-2xl  font-thin text-slate-800">
                                                <i class="fa-solid fa-user mr-2 text-lg text-black"></i>|
                                            </p>
                                            <input type="email" name="email" id="email"
                                                value="{{ old('email') }}" placeholder="pelelang@gmail.com" required
                                                autofocus autocomplete="username"
                                                class="w-full border-2 border-black rounded-full h-[45px] pl-[55px] pr-3 @error('email') border-red-600 @enderror">

                                            </div>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="mx-auto w-[380px] mb-6">
                                    <div class="flex flex-col">
                                        <label for="password"
                                            class=" absolute translate-x-6 -translate-y-[14px] px-[10px] bg-white">Password</label>
                                        <div class="flex">
                                            <p
                                                class=" absolute translate-x-4 translate-y-1 text-2xl  font-thin text-slate-800">
                                                <i class="fa-solid fa-lock mr-2 text-lg text-black"></i>|
                                            </p>
                                            <input type="password" name="password" id="password"
                                                placeholder="Your password" required
                                                autocomplete="current-password"
                                                class="w-full border-2 border-black rounded-full h-[45px] pl-[55px] pr-3 @error('password') border-red-600 @enderror">
                                            </div>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="flex">
                                    <button type="submit"
                                        class="focus:outline-none text-white font-light rounded-full text-[18px] px-5 py-1 text-2xl font-semibold tracking-widest mb-[65px] mx-auto bg-gradient-to-br from-gray-800 to-gray-600 hover:bg-gradient-to-br hover:from-gray-700 hover:to-gray-500  w-[380px] text-center">Login</button>
                                </div>
                                <p class="text-center text-gray-800 font-medium text-[18px]">Don't have an account yet?
                                    <button type="button" class="text-gray-600 hover:text-gray-400"
                                        data-carousel-prev>Sign
                                        up</button>
                                </p>
                            </form>
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <p class="text-center text-[36px] font-bold mt-16 mb-[30px]">Sign Up</p>
                                <div class="mx-auto w-[380px] mb-8">
                                    <div class="flex flex-col">
                                        <label for="name"
                                            class=" absolute translate-x-6 -translate-y-[14px] px-[10px] bg-white">name</label>
                                        <div class="flex">
                                            <p
                                                class=" absolute translate-x-4 translate-y-1 text-2xl  font-thin text-slate-800">
                                                <i class="fa-solid fa-user mr-2 text-lg text-black"></i>|
                                            </p>
                                            <input type="text" name="name" id="name" autocomplete="name"
                                                placeholder="Pelelang" :value="old('name')"
                                                class="w-full border-2 border-black rounded-full h-[45px] pl-[55px] pr-3 @error('name') border-red-600 @enderror" required>
                                        </div>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="mx-auto w-[380px] mb-8">
                                    <div class="flex flex-col">
                                        <label for="email"
                                            class=" absolute translate-x-6 -translate-y-[14px] px-[10px] bg-white">email</label>
                                        <div class="flex">
                                            <p
                                                class=" absolute translate-x-4 translate-y-1 text-2xl  font-thin text-slate-800">
                                                <i class="fa-solid fa-at mr-2 text-lg text-black"></i>|
                                            </p>
                                            <input type="email" name="email" id="email" :value="old('email')"
                                                placeholder="Pelelang@gaming.com" autocomplete="username"
                                                class="w-full border-2 border-black rounded-full h-[45px] pl-[55px] pr-3 @error('email') border-red-600 @enderror" required>
                                        </div>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="mx-auto w-[380px] mb-8">
                                    <div class="flex flex-col">
                                        <label for="password"
                                            class=" absolute translate-x-6 -translate-y-[14px] px-[10px] bg-white">Password</label>
                                        <div class="flex">
                                            <p
                                                class=" absolute translate-x-4 translate-y-1 text-2xl  font-thin text-slate-800">
                                                <i class="fa-solid fa-lock mr-2 text-lg text-black"></i>|
                                            </p>
                                            <input type="password" name="password" id="password" minlength="8"
                                                placeholder="Your password" autocomplete="new-password"
                                                class="w-full border-2 border-black rounded-full h-[45px] pl-[55px] pr-3 invalid:focus:border-red-600 @error('email') border-red-600 @enderror" required>
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="mx-auto w-[380px] mb-6">
                                    <div class="flex flex-col">
                                        <label for="Confirm Password"
                                            class=" absolute translate-x-6 -translate-y-[14px] px-[10px] bg-white">Confirm
                                            Password</label>
                                        <div class="flex">
                                            <p
                                                class=" absolute translate-x-4 translate-y-1 text-2xl  font-thin text-slate-800">
                                                <i class="fa-solid fa-lock mr-2 text-lg text-black"></i>|
                                            </p>
                                            <input type="password" name="password_confirmation" id="password_confirmation"
                                                placeholder="Confirm your password"autocomplete="new-password"
                                                class="w-full border-2 border-black rounded-full h-[45px] pl-[55px] pr-3" required>
                                        </div>
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="flex">
                                    <button type="submit"
                                        class="focus:outline-none text-white font-light rounded-full text-[18px] px-5 py-1 text-2xl font-semibold tracking-widest mb-6 mx-auto bg-gradient-to-br from-gray-800 to-gray-600 hover:bg-gradient-to-br hover:from-gray-700 hover:to-gray-500  w-[380px] text-center">Daftar</button>
                                </div>
                                <p class="text-center text-gray-800 font-medium text-[18px]">Anda sudah memiliki akun?
                                    <button type="button" class="text-gray-600 hover:text-gray-400"
                                        data-carousel-next>Login</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[500px] h-[600px] rounded-[15px] relative z-20">
                <img src="{{ asset('image/g11.jpg') }}" alt=""
                    class="w-[500px] h-[600px] brightness-50 rounded-[15px] relative z-20">
                    <div class="absolute top-20 left-[110px] pb-3 z-30">
                        <div class="border-b-2 border-white w-max">
                            <img src="{{ asset('image/Pelelang.png') }}" alt="" class=" w-[285px] pb-2 px-10">
                        </div>
                        <p class="text-center text-lg    text-white font-semibold">Your Auction Website</p>
                    </div>
            </div>
        </div>
    </div>
    <div id="preloader"></div>
    <script src="{{ asset('js/landing.js') }}"></script>
    @include('partial.footer')

</body>

</html>
