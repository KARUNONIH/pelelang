@extends('template.dashboardpetugas')
@section('title')
    Petugas
@endsection
@section('nav')
    Barang Lelang
@endsection
@section('content')

    <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">

        <aside
            class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
            <div class="h-19.5">
                <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
                    sidenav-close></i>
                <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
                    <img src="{{ asset('image/Pelelanggray.png') }}" alt="" class="w-[300px] h-[60px]">

                </a>
            </div>
            <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

            <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
                <ul class="flex flex-col pl-0 mb-0">
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                            href="{{ route('petugas.index') }}">
                            <div
                                class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                                <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>shop</title>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                            fill-rule="nonzero">
                                            <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(0.000000, 148.000000)">
                                                    <path class="fill-slate-800 opacity-60"
                                                        d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                                    </path>
                                                    <path class="fill-slate-800"
                                                        d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                        </a>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors"
                            href="{{ route('petugas.item') }}">
                            <div
                                class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                                <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>office</title>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF"
                                            fill-rule="nonzero">
                                            <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(153.000000, 2.000000)">
                                                    <path class=" opacity-60"
                                                        d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z">
                                                    </path>
                                                    <path class=""
                                                        d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Barang lelang</span>
                        </a>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                            href="{{ route('petugas.kategori') }}">
                            <div
                                class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>credit-card</title>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                            fill-rule="nonzero">
                                            <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(453.000000, 454.000000)">
                                                    <path class="fill-slate-800 opacity-60"
                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z">
                                                    </path>
                                                    <path class="fill-slate-800"
                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Kategori</span>
                        </a>
                    </li>
                </ul>
            </div>


        </aside>

        <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
            <!-- Navbar -->
            @include('partial.navbaradmin')

            <div class="w-full px-6 py-6 mx-auto">
                <!-- table 1 -->

                <!-- Modal toggle -->


                <!-- Main modal -->
                <!-- Button trigger modal -->

                    <button type="button" class="btn btn-dark bg-gray-600 mb-3" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Add Item
                    </button>
                    {{-- <a href="{{ route('item.fresh') }}" class="btn btn-outline-success"><i class="fa-solid fa-rotate-right"></i></a> --}}
                    <form action="{{ route('item.fresh') }}"
                    method="POST" class="d-inline ">
                    @csrf
                    <button type="submit"
                        class="btn btn-outline-success mb-3"
                        data-tooltip-target="stop"
                        data-tooltip-placement="bottom" title="Stop"><i class="fa-solid fa-rotate-right"></i></button>


                </form>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Buat lelang baru</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="p-3 max-h-[600px]" style="overflow-y: auto;">

                                <form action="{{ Route('item.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            name="nama" aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Harga Awal</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1"
                                            name="harga_awal" aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" id="exampleInputEmail1"
                                            name="deskripsi" aria-describedby="emailHelp"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Complete at</label>
                                        <input type="datetime-local" class="form-control" id="exampleInputEmail1"
                                            name="complete_at" aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                        <select class="form-select" aria-label="Default select example"
                                            name="kategori_id">
                                            <option value="" selected disabled class="text-center">-- Pilih Kategori
                                                --</option>
                                            @foreach ($kategori as $i)
                                                <option value="{{ $i->id }}">{{ $i->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Gambar</label>
                                        <input type="file" name="gambar" class="dropify max-w-[400px] max-h-[300px]"
                                            data-allowed-file-extensions="jpg jpeg png" />
                                    </div>

                                    <button type="submit" class="btn btn-success bg-green-600">Buat</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 2 -->

                <div class="flex flex-wrap -mx-3">
                    <div class="flex-none w-full max-w-full px-3">
                        <div
                            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                            <div
                                class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                <h6>Barang Lelang</h6>
                            </div>
                            <div class="flex-auto px-0 pt-0 pb-2">
                                <div class="p-0">
                                    <table
                                        class="items-center justify-center w-full mb-0 align-top border-gray-200 text-slate-500" id="myTable">
                                        <thead class="align-bottom">
                                            <tr>
                                                <th class="hidden"></th>
                                                <th
                                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    Nama</th>
                                                    <th
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                        Status</th>
                                                <th
                                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    Kategori</th>
                                                <th
                                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    Harga Awal</th>
                                                <th
                                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    Final Bid</th>
                                                <th
                                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    Jumlah bid</th>
                                                <th
                                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    Keterangan Waktu</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($item as $item)
                                                <tr>
                                                    <td class="hidden">{{ $item->id }}</td>
                                                    <td
                                                    class="p-2 align-middle bg-transparent whitespace-nowrap border-b  shadow-transparent flex items-center h-full">
                                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt=""
                                                            class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl">
                                                        <p class="mb-0 font-semibold leading-normal text-sm">
                                                            {{ $item->nama }}</p>
                                                    </td>
                                                    <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p class="mb-0 font-semibold leading-normal text-sm text-center">
                                                            @if ($item->status == 0)
                                                                On going
                                                            @elseif ($item->status == 1)
                                                                Ended
                                                                @else
                                                                Pending
                                                            @endif</p>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <p class="mb-0 font-semibold leading-normal text-sm text-center">
                                                            {{ $item->kategori->nama_kategori}}</p>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <p class="mb-0 font-semibold leading-normal text-sm text-center">
                                                            ${{ $item->harga_awal }}</p>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <p class="mb-0 font-semibold leading-normal text-sm text-center">
                                                            @if ($item->harga_akhir === $item->harga_awal)
                                                                --
                                                            @else
                                                                ${{ $item->harga_akhir }}
                                                            @endif
                                                        </p>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <p class="mb-0 font-semibold leading-normal text-sm text-center">
                                                            {{ $item->bid->count() }}</p>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent mb-0 font-semibold leading-normal text-sm text-center">
                                                        @if ($item->status === 2)
                                                            Belum Dimulai
                                                        @else
                                                            <span class="clockdiv " data-date="{{ $item->complete_at }}">
                                                                <span class="days  "></span>d
                                                                <span class="hours     "></span>h
                                                                <span class="minutes   "></span>m
                                                                <span class="seconds   "></span>s
                                                            </span>
                                                        @endif

                                                    </td>
                                                    <td
                                                        class=" align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        @if ($item->status == 0 && $item->complete_at >= Carbon\Carbon::now('Asia/Jakarta'))
                                                            {{-- <form action="{{ route('item.stop', $item->id) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                <button type="submit" name="complete_at" value="1"
                                                                    class="btn btn-outline-danger"
                                                                    data-tooltip-target="stop"
                                                                    data-tooltip-placement="bottom"><i
                                                                        class="fa-solid fa-stop"></i></button>


                                                            </form> --}}
                                                            <a href="" class="btn btn-outline-warning"
                                                            data-bs-toggle="modal" data-bs-target="#updateItem"
                                                            data-url="{{ route('item.update', ['item_id' => $item->id]) }}"
                                                            data-stop="{{ route('item.stop', ['id' => $item->id]) }}"
                                                            data-complete_at="{{ $item->complete_at }}"
                                                            data-id="{{ $item->id }}"
                                                            data-kategori_id="{{ $item->kategori_id }}"
                                                            data-nama_kategori="{{ $item->kategori->nama_kategori }}">
                                                            <i class="fa-solid fa-pen-to-square"></i></a>
                                                        @elseif ($item->status === 0 && $item->complete_at <= Carbon\Carbon::now('Asia/Jakarta'))

                                                            {{-- <a href="" class="btn btn-outline-warning"
                                                                data-bs-toggle="modal" data-bs-target="#updateItem" data-url="{{ route('item.update', ['item_id'=>$item->id]) }}" data-nama="{{ $item->nama }}" data-harga_awal="{{ $item->harga_awal }}" data-deskripsi="{{ $item->deskripsi }}" data-complete_at="{{ $item->complete_at }}" data-kategori_id="{{ $item->kategori_id }}" data-gambar="{{ $item->gambar }}"><i
                                                                    class="fa-solid fa-pen-to-square"></i></a> --}}
                                                            {{-- <a href="" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#UpdateModal" data-url="{{ route('item.update', ['item_id'=>$item->id]) }}" data-nama="{{ $item->nama }}" data-harga_awal="{{ $item->harga_awal }}" data-deskripsi="{{ $item->deskripsi }}" data-complete_at="{{ $item->complete_at }}" data-kategori_id="{{ $item->kategori_id }}" data-gambar="{{ $item->gambar }}"><i class="fa-solid fa-pen-to-square"></i></a> --}}
                                                            {{-- <form action="{{ route('item.play', $item->id) }}"
                                                                method="POST" class="inline">
                                                                @csrf
                                                                <button type="submit" name="complete_at" value="0"
                                                                    class="btn btn-outline-success"
                                                                    data-tooltip-target="start"
                                                                    data-tooltip-placement="bottom"><i
                                                                        class="fa-regular fa-circle-play"></i></button>
                                                            </form> --}}
                                                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#show{{ $item->id }}">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </button>
                                                            @elseif ($item->status == 2)
                                                            <a href="" class="btn btn-outline-dark"
                                                            data-bs-toggle="modal" data-bs-target="#updateItemPending"
                                                            data-url="{{ route('item.update', ['item_id' => $item->id]) }}"
                                                            data-stop="{{ route('item.stop', ['id' => $item->id]) }}"
                                                            data-complete_at="{{ $item->complete_at }}"
                                                            data-id="{{ $item->id }}"
                                                            data-kategori_id="{{ $item->kategori_id }}"
                                                            data-nama="{{ $item->nama }}"
                                                            data-harga_awal="{{ $item->harga_awal }}"
                                                            data-deskripsi="{{ $item->deskripsi }}"
                                                            data-destroy="{{ route('item.destroy', ['item_id' => $item->id]) }}"
                                                            data-play="{{ route('item.play', $item->id) }}"
                                                            data-nama_kategori="{{ $item->kategori->nama_kategori }}">
                                                            <i class="fa-solid fa-feather"></i></a>
                                                        @else
                                                        {{-- <form
                                                                action="{{ route('item.destroy', ['item_id' => $item->id]) }}"
                                                                method="post" class="inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" name="complete_at"
                                                                    class="btn btn-outline-danger"
                                                                    data-tooltip-target="start"
                                                                    data-tooltip-placement="bottom"><i
                                                                        class="fa-solid fa-trash-can"></i></button>
                                                            </form> --}}
                                                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#show{{ $item->id }}">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </button>
                                                    </td>
                                            @endif

                                            </tr>
                                            <div class="modal fade " id="show{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="itemModalLabel{{ $item->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="text-2xl " id="itemModalLabel{{ $item->id }}">Detail Barang</h5>
                                                            <button type="button" class="btn-close bg-black text-white" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                                        </div>
                                                        <div class="p-2 max-h-[600px]" style="overflow-y: auto;">
                                                            <img src="{{ asset('storage/'.$item->gambar) }}" class="img-fluid" alt="Gambar">
                                                            <p class="text-xl text-justify mb-1">Nama barang <b>{{ $item->nama }}</b></p>
                                                            <p class="text-xl text-justify mb-1 mt-2">Status <b>@if ($item->status == 0)
                                                                Sedang berlangsung
                                                            @elseif ($item->status == 1)
                                                                Berakhir
                                                                @else
                                                                Pending
                                                            @endif</b></p>
                                                            <p class="text-xl text-justify mb-1">Pemenang <b>@if ($item->id_user == 0)
                                                                Tidak ada
                                                            @else
                                                                {{ $item->user->name }}
                                                            @endif</b></p>
                                                                <p class="text-xl text-justify mb-1">Kategori <b>{{ $item->kategori->nama_kategori }}</b></p>
                                                                <p class="text-xl text-justify mb-1">Harga awal <b>{{ $item->harga_awal }}</b></p>
                                                                <p class="text-xl text-justify mb-1">Harga akhir <b>{{ $item->harga_akhir }}</b></p>
                                                                <p class="text-xl text-justify mb-1">Jumlah bid <b>{{ $item->bid->count() }}</b></p>
                                                                <p class="text-xl text-justify mb-1">Dibuat pada tanggal <b>{{ $item->created_at }}</b></p>
                                                                <p class="text-xl text-justify mb-1">Selesai pada tanggal <b>{{ $item->complete_at }}</b></p>
                                                                <p class="text-xl text-justify mb-1">Deskripsi <br> <b>{{ $item->deskripsi }}</b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        {{-- <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Gambar dan Status</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="editForm" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" class="dropify" id="gambar" name="gambar">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="Draf">Draf</option>
                                    <option value="Publikasi">Publikasi</option>
                                </select>
                            </div>
                            <input type="hidden" name="gambar_id" value="{{ $item->id }}">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="submitBtn">Save changes</button>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="modal fade" id="updateItem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" id="modal-content">
                </div>
            </div>
        </div>
        <div class="modal fade" id="updateItemPending" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" id="pending">
                </div>
            </div>
        </div>




        {{-- <div class="modal fade" id="update-item" tabindex="-1" role="dialog" aria-labelledby="update-modal-label">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="update-modal-label">Update Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="update-id">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="status">Status</label>
                      <select name="kategori" id="kategori" class="form-control" required>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                </div>
              </div>
            </div>
          </div> --}}
        @include('sweetalert::alert')
    </body>
@endsection
