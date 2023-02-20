<nav
        class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-[40] top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <div class="text-center">
                <button class="text-white" type="button" data-drawer-target="drawer-navigation"
                    data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                    <i class="fa-solid fa-bars-staggered"></i> </button>
            </div>
            <div class="flex items-center justify-center bg-slate-200 border-none rounded-xl">
                <i class="fa-solid fa-magnifying-glass p-2"></i>
                <input list="item" type="text" name=" " id=""
                    placeholder="Pilih barang lelang" class="w-[400px] bg-slate-200 border-none rounded-r-xl">
                    {{-- <select name="cars" id="cars" class="w-[400px] bg-slate-200 border-none rounded-r-xl focus">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                      </select> --}}
                      {{-- <input list="browsers" name="browser" id="browser" class="w-[400px] bg-slate-200 border-none rounded-r-xl focus">
                      <datalist id="browsers">
                        <option value="Edge">
                        <option value="Firefox">
                        <option value="Chrome">
                        <option value="Opera">
                        <option value="Safari">
                      </datalist> --}}

            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white ">Pelelang</span>
                </a>
            </div>
        </div>
    </nav>