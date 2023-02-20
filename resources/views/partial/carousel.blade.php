<div id="animation-carousel" class="relative w-[90%] mx-auto mb-10" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden mt-[90px] shadow rounded md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-200 ease-linear  " data-carousel-item>
            <img src="{{ asset('image/g1.jpg') }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 banner"
                alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-200 ease-linear " data-carousel-item>
            <img src="{{ asset('image/g2.jpg') }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 banner"
                alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-200 ease-linear " data-carousel-item="active">
            <img src="{{ asset('image/g3.jpg') }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 banner"
                alt="...">
        </div>
    </div>

    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
    </div>
</div>