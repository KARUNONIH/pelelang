<nav
    class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-[40] top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <div class="text-center">
            <button class="text-white" type="button" data-drawer-target="drawer-navigation"
                data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                <i class="fa-solid fa-bars-staggered"></i> </button>
        </div>
        <div class="flex items-center justify-center  border-none rounded-xl">
            <a href="" class="flex items-center">
                <img src="{{ asset('image/Pelelang.png') }}" class="" alt="Flowbite Logo" style="width:150px; height:30px;">
            </a>

        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 py-[7px]"
            id="navbar-sticky">
            @if (auth()->user()->type == 'admin')
                <a href="{{ route('admin.index') }}"
                    class="inline-flex items-center px-4 py-2 bg-gray-600 hover:bg-gray-500 text-white text-sm font-medium rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                    </svg>Back
                </a>
            @elseif (auth()->user()->type == 'petugas')
                <a href="{{ route('petugas.index') }}"
                    class="inline-flex items-center px-4 py-2 bg-gray-600 hover:bg-gray-500 text-white text-sm font-medium rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                    </svg>Back
                </a>
            @elseif (auth()->user()->type == 'user')
                <a href="{{ route('user.home') }}"
                    class="inline-flex items-center px-4 py-2 bg-gray-600 hover:bg-gray-500 text-white text-sm font-medium rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                    </svg>Back
                </a>
            @endif
        </div>
    </div>
</nav>
