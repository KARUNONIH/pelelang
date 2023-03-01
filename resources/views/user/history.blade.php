@include('partial.header')

<body class="">
    @include('partial.navbardetail')
    @include('partial.sidebaruser')
    @section('title')
        History
    @endsection
    <div class="w-[60%] mx-auto mt-[90px]">
        <div class="flex flex-wrap -mx-3 ">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-4 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="text-xl font-semibold">This is {{ $nama }} successfully bid history</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-md border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Item</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-md border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Kategori</th>
                                        <th
                                            class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-md border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            harga_akhir</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-md border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Complete at</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-md border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Status</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-md border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($item as $item)
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="{{ asset('storage/' . $item->gambar) }}"
                                                        class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                        alt="user1" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 leading-normal text-sm">{{ $item->nama }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent text-center">
                                            <p class="mb-0 font-semibold leading-tight text-xs">{{ $item->kategori->nama_kategori }}</p>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                            <span
                                                class="mb-0 font-semibold leading-tight text-xs">${{ $item->harga_akhir }}</span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="font-semibold leading-tight text-xs text-slate-400">{{Carbon\Carbon::parse($item->complete_at)->format('Y-m-d') }}</span>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <a href="javascript:;"
                                                class="font-semibold leading-tight text-xs text-slate-400 text-right">
                                                Unpaid</a>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <form action="{{ route('order.checkout', ['item_id'=>$item->id]) }}" method="post">
                                            @csrf
                                            <a href=""
                                                class="font-semibold leading-tight text-xs text-slate-400">
                                                <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    pay
                                                  </button></a>
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
    @include('partial.footer')
</body>


</html
