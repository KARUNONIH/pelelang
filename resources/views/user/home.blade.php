@extends('template.dashboard')
@section('content')
    @include('partial.carousel')
@section('title')
    Home
@endsection
<div class="w-[90%] mx-auto mt-3 mb-5 ">
    <div class=" border-b-2 border-gray-700 w-max">
        <div class="pr-[300px]">
            <div class="rounded-tl-xl border-t-2 border-gray-700 w-max ">
                <h1 class="text-3xl font-semibold pt-2 pb-3 pl-5 text-gray-900">Barang Lelang Baru</h1>
            </div>
        </div>

    </div>
    <div class="flex">
        <div class="w-[70%]">
            <div class="grid grid-cols-3 mt-6 border-r-2 border-gray-700 ">

                @foreach (App\Models\itemModel::take(3)->where('complete_at', '>=', Carbon\Carbon::now('Asia/Jakarta'))->orderBy('id', 'DESC')->get() as $item)
                    <div
                        class="max-w-sm bg-white  shadow-black rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 w-[290px] h-[400px] relative">
                        <a href="{{ route('item.show', ['item_id' => $item->id]) }}">
                            <img class="rounded-t-lg h-[200px] w-[290px]" src="{{ asset('storage/' . $item->gambar) }}"
                                alt="" />
                        </a>
                        <div class="p-5">

                            <a href="{{ route('item.show', ['item_id' => $item->id]) }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $item->nama }}</h5>
                            </a>
                            <div class="flex text-white">

                                <p class="text-lg mr-3 font-normal">${{ $item->harga_akhir }}</p>
                                <p class="text-xl"><i class="fa-solid fa-user mr-2"></i>{{ $item->bid->count() }}</p>

                            </div>
                            <a href="{{ route('item.show', ['item_id' => $item->id]) }}"
                                class="absolute bottom-3 inline-flex items-center px-2.5 py-2 text-sm font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800">
                                Bid Sekarang
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>

                            </a>
                            <span
                                class="clockdiv  absolute bottom-3 right-0 text-white px-2 py-1 rounded text-sm border-red-500 border-2 font-semibold mr-3 "
                                data-date="{{ $item->complete_at }}">
                                <span class="days"></span>d
                                <span class="hours"></span>h
                                <span class="minutes"></span>m
                                <span class="seconds"></span>s
                            </span>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="w-[30%]">
            <div class="w-100% max-h-[450px] ml-[30px] rounded-xl bg-gray-800">
                <div class="w-4/5 border-b-2 border-white mx-auto">
                    <h1 class="text-2xl text-center text-white pb-2 pt-2 font-bold">Hampir Selesai</h1>
                </div>
                <table class="mx-auto text-white text-lg mt-3 bg-gray-600 w-[100%] p-2 rounded-b-xl">
                    @foreach (App\Models\itemModel::take(10)->orderBy('complete_at', 'ASC')->where('complete_at', '>=', Carbon\Carbon::now('Asia/Jakarta'))->get() as $end)
                        <tr class="almost">
                            <td class="w-[56%]">
                                <a href="{{ route('item.show', ['item_id' => $end->id]) }}" class="">
                                    <p class="ml-4 truncate pb-3  list">{{ $end->nama }}</p>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('item.show', ['item_id' => $end->id]) }}" class="">
                                    <span class="end text-lg  font-semibold mr-3 " data-date="{{ $end->complete_at }}">
                                        <span class="days"></span>d
                                        <span class="hours"></span>h
                                        <span class="minutes"></span>m
                                        <span class="seconds"></span>s
                                    </span>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
    <div class=" border-b-2 mt-5 border-gray-700 w-max">
        <div class="pr-[160px]">

            <div class="flex">
                <div class="rounded-tl-xl border-t-2 border-gray-700 w-max ">
                    <div class="pb-3 pl-5 pt-3 pr-3">
                        <a href="{{ route('user.home') }}"
                            class="w-32 bg-gray-800 border-t-1 border-gray-800 tracking-wide text-white font-bold rounded-full border-b-2 hover:border-gray-600 hover:bg-gray-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                            <span class="mx-auto">Semua</span>
                        </a>
                    </div>
                </div>
                <div class="pt-3.5">
                    <form action="{{ route('user.home') }}" method="get" class="inline">
                        <input type="hidden" name="terlaris" value="terlaris">
                        <button type="submit"
                            class="w-32 bg-gray-800 border-t-1 border-gray-800 tracking-wide text-white font-bold rounded-full border-b-2 hover:border-gray-600 hover:bg-gray-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center mr-3">
                            <span class="mx-auto">Terlaris</span>
                        </button>
                    </form>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="text-white bg-gray-800 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-[#ffffff] font-bold rounded-full text-sm px-6 py-2.5 text-center inline-flex items-center dark:bg-gray-800 dark:hover:bg-gray-600 dark:focus:ring-[#ffffff]"
                        type="button">Kategori<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class=" hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 relative z-50">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton">
                            @foreach ($kategori as $item)
                                <li>
                                    <a href="{{ route('user.home', ['kategori' => $item->id]) }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $item->nama_kategori }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Food Menu Container -->

    <div class="grid grid-cols-4 mt-6 gap-4 ml-2 mx-auto bg-[#ffffff]">

        <!--item -->
        @foreach ($x as $item)
            <a href="{{ route('item.show', ['item_id' => $item->id]) }}"
                class="chovera group w-[320px] flex flex-col relative items-center hover:brightness-[1] bg-white  rounded  md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 before:justify-center hover:before:tracking-[2px] before:items-center before:text-center  shadow-sm shadow-black before:block before:text-4xl before:invisible before:absolute before:w-[320px] before:h-[165px]  before:duration-500 z-5 before:rounded-lg hover:before:visible hover:before:bg-[rgb(22,22,22)]/[.5] before:bg-[rgb(22,22,22)]/[.0] before:text-white/[.0] hover:before:text-white duration-500">
                <span
                    class="chover absolute top-14 right-12 group-hover:tracking-[2px] text-center font-semibold invisible group-hover:visible text-white text-3xl text-white/[.0] group-hover:text-white duration-[0.3s] group-hover:duration-[0.3s]"
                    data-date="{{ $item->complete_at }}">
                    <span class="days"></span>d
                    <span class="hours"></span>h
                    <span class="minutes"></span>m
                    <span class="seconds"></span>s
                </span>
                <img class=" w-full h-[165px] rounded-lg" src="{{ asset('storage/' . $item->gambar) }}"
                    alt="">
                <p
                    class="px-2 py-1 text-xs left-2 group-hover:opacity-0 duration-400 opacity-100 hover:duration-400 rounded-full bg-black absolute bottom-2 text-white ">
                    {{ $item->nama }}</p>
                <p
                    class="px-2 py-1 text-xs right-[60px] group-hover:opacity-0 duration-400 opacity-100 hover:duration-400 rounded-full bg-black absolute bottom-2 text-white ">
                    ${{ $item->harga_akhir }}</p>
                <p
                    class="px-2 py-1 text-xs right-2 group-hover:opacity-0 duration-400 opacity-100 hover:duration-400 rounded-full bg-black absolute bottom-2 text-white ">
                    <i class="fa-solid fa-user"></i> {{ $item->bid->count() }}

                </p>
            </a>
        @endforeach

        <!-- End Food Item -->
    </div>
    <div class="flex ">
        {!! $x->links('partial.paginate') !!}
    </div>
</div>
<!-- Item 2 -->

</div>
<div class="w-full h-[200px] bg-gray-800 mt-10">
    <div class="w-4/5 mx-auto">
        <div class="flex justify-center">
            <div class="border-b-2 border-white w-max">
                <a href="https://flowbite.com/" class="flex items-center mt-3 pb-3 px-20">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo">
                    <span class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white ">Pelelang</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
