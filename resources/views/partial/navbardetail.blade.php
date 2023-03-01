<nav
    class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-[40] top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <div class="text-center">
            <button class="text-white" type="button" data-drawer-target="drawer-navigation"
                data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                <i class="fa-solid fa-bars-staggered"></i> </button>
        </div>
        <div class="flex items-center justify-center border-none rounded-xl">

            <a href="{{ route('user.home') }}" class="flex items-center">
                <img src="{{ asset('image/Pelelang.png') }}" class="w-[150px] h-[30px]" alt="Flowbite Logo">
            </a>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <a href="{{ Route('user.home') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-600 hover:bg-gray-500 text-white text-sm font-medium rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                </svg>
                Back
            </a>
        </div>
    </div>
</nav>
