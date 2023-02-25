@extends('template.dashboardpetugas')
@section('title')
    Petugas
@endsection
@section('nav')
Kategori
@endsection
@section('content')

    <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">



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
                    Add Kategori
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="p-3 max-h-[600px] overflow-auto">

                                <form action="{{ Route('kategori.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            name="nama_kategori" aria-describedby="emailHelp">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
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
                                <h6>Projects table</h6>
                            </div>
                            <div class="flex-auto px-0 pt-0 pb-2">
                                <div class="p-0 overflow-x-auto">
                                    <table
                                        class="items-center justify-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                        <thead class="align-bottom">
                                            <tr>
                                                <th
                                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    No</th>
                                                <th
                                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    Nama kategori</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kategori as $item)
                                                <tr>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <p class="mb-0 font-semibold leading-normal text-sm text-center">
                                                            {{ $loop->iteration }}</p>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <p class="mb-0 font-semibold leading-normal text-sm text-center">
                                                            {{ $item->nama_kategori }}</p>
                                                    <td>
                                                        <a href="" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#UpdateModal" data-url="{{ route('kategori.update', ['kategori_id'=>$item->id]) }}" data-nama_kategori="{{ $item->nama_kategori }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <form action="{{ route('kategori.destroy', ['kategori_id'=>$item->id]) }}" class="d-inline" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-outline-danger " type="submit"><i class="fa-solid fa-trash-can"></i></button>
                                                        </form>
                                                    </td>

                                                </tr>
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
        <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" id="modal-content">
                </div>
            </div>
        </div>
        @include('sweetalert::alert')

    </body>
@endsection
