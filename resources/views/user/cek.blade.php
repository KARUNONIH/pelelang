@extends('template.dashboard')
@section('content')
    <div class="w-[90%] mx-auto mt-[80px] mb-5 ">
        <div class=" border-b-2 border-gray-700 w-max">
            <div class="pr-[300px]">
                <div class="rounded-tl-xl border-t-2 border-gray-700 w-max ">
                    <h1 class="text-3xl font-semibold pt-2 pb-3 pl-5 text-gray-900">Barang Lelang yang Anda Ajukan</h1>
                </div>
            </div>

        </div>
        <div class="grid grid-cols-4 mt-6 gap-4 ml-2 mx-auto bg-[#ffffff]">

            <!--item -->
            @foreach ( $c as $item)
                <a href="{{ Route('item.show', ['item_id'=>$item->id]) }}"
                    class="chovera group w-[320px] flex flex-col relative items-center hover:brightness-[1] bg-white  rounded  md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 before:justify-center hover:before:tracking-[2px] before:items-center before:text-center  shadow-sm shadow-black before:block before:text-4xl before:invisible before:absolute before:w-[320px] before:h-[165px]  before:duration-500 z-5 before:rounded-lg hover:before:visible hover:before:bg-[rgb(22,22,22)]/[.5] before:bg-[rgb(22,22,22)]/[.0] before:text-white/[.0] hover:before:text-white duration-500">
                    <span
                        class="chover absolute top-14 right-12 group-hover:tracking-[2px] text-center font-semibold invisible group-hover:visible text-white text-3xl text-white/[.0] group-hover:text-white duration-[0.3s] group-hover:duration-[0.3s]"
                        data-date="{{ $item->complete_at }}">
                        <span class="days"></span>d
                        <span class="hours"></span>h
                        <span class="minutes"></span>m
                        <span class="seconds"></span>s
                    </span>
                    <img class=" w-full h-[165px] rounded-lg" src="{{ asset('storage/' . $item->gambar) }}" alt="">
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
    </div>
    
@endsection
