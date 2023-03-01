<nav
    class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-[40] top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <div class="text-center">
            <button class="text-white" type="button" data-drawer-target="drawer-navigation"
                data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                <i class="fa-solid fa-bars-staggered"></i> </button>
        </div>
        <div class="flex items-center justify-center bg-slate-200 border-none rounded-t relative w-[435px]">
            <i class="fa-solid fa-magnifying-glass p-2"></i>
            {{-- <form action="{{ route('user.search') }}" method="GET" id="search-form"> --}}
                <div class="block relative">
                <input type="text" id="search" name="search" placeholder="Pilih barang lelang"
                    class="w-[395px] bg-slate-200 border-none rounded-t focus:outline-0">
                    <table id="result" class=" absolute z-50 top-[40px] -left-9 bg-gray-800 w-[435px] rounded-b hidden px-1"></table>
                    <div id="error" class="absolute z-50 top-[40px] -left-9 bg-gray-800 w-[435px] rounded-b hidden text-white text-center py-1">
                        No item found.
                    </div>
                </div>
                {{-- <table class="table table-striped table-inverse table-responsive d-table absolute left-0 -bottom-[50px]">
                    <thead>
                    <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    </table> --}}

            {{-- </form>
            <div id="search-results" class=" absolute left-0 -bottom-[300px] bg-black text-white">
                @foreach ($results as $result)
                    <div class="result">
                        <h2>{{ $result->nama }}</h2>
                    </div>
                @endforeach
            </div> --}}

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
            <a href="{{ route('user.home') }}" class="flex items-center">
                <img src="{{ asset('image/Pelelang.png') }}" class=" w-[150px]  mr-3 sm:h-9" alt="Flowbite Logo">
            </a>
        </div>
    </div>
</nav>

</script>
