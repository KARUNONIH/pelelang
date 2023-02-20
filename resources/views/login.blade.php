@include('partial.header')
@section('title')
    Login
@endsection
<body class="bg-gradient-to-br from-gray-800 to-gray-600">

    <div class="flex min-h-screen">
        <div class=" m-auto flex">
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
                                            <input type="text" name="email" id="email"
                                                value="{{ old('email') }}" placeholder="Panjul Gaming" required
                                                autofocus autocomplete="email"
                                                class="w-full border-2 border-black rounded-full h-[45px] pl-[55px] pr-3 @error('email') border-red-600 @enderror">
                                            @error('email')
                                                <span class="text-red-600 py-2">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
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
                                                placeholder="Manusia bernama panjul" required
                                                autocomplete="current-password"
                                                class="w-full border-2 border-black rounded-full h-[45px] pl-[55px] pr-3 @error('password') border-red-600 @enderror">
                                            @error('password')
                                                <span class="text-red-600">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
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
                                            <input type="text" name="name" id=""
                                                placeholder="Panjul Gaming"
                                                class="w-full border-2 border-black rounded-full h-[45px] pl-[55px] pr-3 @error('name') border-red-600 @enderror" required>
                                                @error('name')
                                                <span class="text-red-600 py-2">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
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
                                            <input type="email" name="email" id=""
                                                placeholder="Panjul@gaming.com"
                                                class="w-full border-2 border-black rounded-full h-[45px] pl-[55px] pr-3 @error('email') border-red-600 @enderror" required>
                                                @error('email')
                                                <span class="text-red-600 py-2">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
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
                                            <input type="password" name="password" id="" minlength="8"
                                                placeholder="Manusia bernama panjul"
                                                class="w-full border-2 border-black rounded-full h-[45px] pl-[55px] pr-3 invalid:focus:border-red-600 @error('email') border-red-600 @enderror" required>
                                                @error('password')
                                                <span class="text-red-600 py-2">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
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
                                            <input type="password" name="password_confirmation" id=""
                                                placeholder="Manusia bernama panjul"
                                                class="w-full border-2 border-black rounded-full h-[45px] pl-[55px] pr-3" required>
                                        </div>
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
                <img src="{{ asset('image/g1.jpg') }}" alt=""
                    class="w-[500px] h-[600px] rounded-[15px] relative z-20">
            </div>
        </div>
    </div>

    @include('partial.footer')

</body>

</html>
