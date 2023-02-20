@include('partial.header')

<body>
    @include('partial.navbardetail')
    @include('partial.sidebaruser')
    @section('title')
        Detail
    @endsection
    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce"
                    class="lg:w-1/2 w-full object-cover object-center rounded border max-h-[350px] border-gray-200"
                    src="{{ asset('storage/' . $item->gambar) }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{ $item->nama }}</h1>
                    <div class="flex mb-1">
                        <p class="text-xl mr-4"><span class="font-semibold mr-2">{{ $item->bid->count() }}</span><i
                                class="fa-solid fa-user text-lg"></i></p>
                        <p class="font-semibold  border-l-2 border-gray-500 text-center pl-2 capitalize">
                            @if ($item->id_user === 0)
                            not yet bid
                            @else
                            {{ $item->user->name }}
                            @endif
                        </p>
                        <span class="clockdiv border-l-2 border-gray-500 px-2 ml-2 text-lg font-semibold"
                            data-date="{{ $item->complete_at }}">
                            <span class="days"></span>d
                            <span class="hours"></span>h
                            <span class="minutes"></span>m
                            <span class="seconds"></span>s
                        </span>
                    </div>
                    <p class="leading-relaxed">{{ $item->deskripsi }}</p>
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">

                    </div>
                    <div class="block">
                        <div class="flex">
                            <div class="block">
                                <span class="title-font font-medium text-2xl text-gray-900">$@if ($item->harga_akhir === 0)
                                        {{ $item->harga_awal }}
                                    @else
                                        {{ $item->harga_akhir }}
                                    @endif
                                </span>
                            </div>

                            <!-- Modal toggle -->
                            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                                class="block  text-white bg-gray-800 hover:bg-gray-600 focus:ring-4 w-[300px] focus:outline-none ml-auto focus:ring-blue-300 font-bold rounded-lg text-sm  px-5 py-2.5 text-center dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700"
                                type="button">
                                Bid Now </button>

                            <!-- Main modal -->
                            <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                <div class="relative w-full h-full max-w-md md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-white">
                                        <button type="button"
                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                            data-modal-hide="authentication-modal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="px-6 py-6 lg:px-8">
                                            <h3 class="mb-4 text-xl font-semibold text-gray-900 dark:text-gray-800 ">
                                                {{ $item->nama }}</h3>
                                            <form class="space-y-6" method="POST"
                                                action="{{ route('bid.store', $item->id) }}">
                                                @csrf
                                                <div>
                                                    <div class="">
                                                        <label for="bid_price"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">
                                                            price</label>
                                                        <input type="number" name="bid_price" id="bid_price"
                                                            class="bg-gray-50 border mb-3 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-500 dark:placeholder-gray-400 dark:text-black"
                                                            placeholder="Rp." min="{{ $item->harga_akhir + 1 }}"
                                                            required>
                                                    </div>
                                                    <div>
                                                        <button type="submit"
                                                            class="w-full text-white bg-gray-700 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700 detail">Bid</button>
                                                        <div
                                                            class="text-sm font-medium text-gray-500 dark:text-gray-800">
                                                            <p class="">Minimal jumlah bid yang dimasukan
                                                                <span>$@if ($item->harga_akhir === 0)
                                                                        {{ $item->harga_awal }}
                                                                    @else
                                                                        {{ $item->harga_akhir + 1 }}
                                                                    @endif
                                                                </span>
                                                            </p>
                                                        </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    @include('partial.footer')
</body>


</html
