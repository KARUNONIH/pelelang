<div id="animation-carousel" class="relative w-[90%] mx-auto mb-10" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden mt-[90px] shadow rounded md:h-96">
        <!-- Item 1 -->
        <div class="hidden drop-shadow-2xl duration-200 ease-linear object-cover  relative" data-carousel-item>
            <img src="{{ asset('image/b3.jpg') }}"
                class=" absolute block w-full -translate-x-1/2  -translate-y-1/2 top-[220px] left-1/2 banner mt-0"
                alt="..." style="object-fit: cover;">
                <div class="absolute -translate-x-1/2  -translate-y-1/2 top-[300px] left-1/2 text-gray-100	">
            <h1 class="text-center text-2xl font-bold">Bervariasi</h1>
                    <p class="text-lg font-semibold">Terdapat banyak jenis yang tersedia</p>
                </div>
        </div>
        <!-- Item 2 -->
        <div class="hidden drop-shadow-2xl duration-200 ease-linear  relative " data-carousel-item>
            <img src="{{ asset('image/b4.jpg') }}"
                class=" absolute block w-full -translate-x-1/2  -translate-y-1/2 top-[220px] left-1/2 banner"
                alt="..." style="object-fit: cover;">
                <div class="absolute -translate-x-1/2  -translate-y-1/2 top-[300px] left-1/2 text-gray-100	">
            <h1 class="text-center text-2xl font-bold">Mudah Digunakan</h1>
                    <p class="text-lg font-semibold w-max">Dimulai dari proses bid , cek hotwheel yang di bid , dan terdapat history pemesanan</p>
                </div>
        </div>
        <!-- Item 3 -->
        <div class="hidden drop-shadow-2xl duration-200 ease-linear  relative " data-carousel-item="active">
            <img src="{{ asset('image/b5.jpg') }}"
                class=" absolute block w-full -translate-x-1/2  -translate-y-1/2 top-[220px] left-1/2 banner"
                alt="..."   >
                <div class="absolute -translate-x-1/2  -translate-y-1/2 top-[300px] left-1/2 text-gray-100	">
            <h1 class="text-center text-2xl font-bold">Pembayaran Aman</h1>
                    <p class="text-lg font-semibold">Menggunakan ... untuk melakukan proses transaksi</p>
                </div>
        </div>
    </div>
</div>
