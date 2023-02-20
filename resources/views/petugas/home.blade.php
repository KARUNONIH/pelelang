@extends('template.dashboard')
@section('content')
@section('title')
Petugas
@endsection
    <div class="flex justify-center mt-[100px] mx-auto w-[90%] gap-10">

        <div class="w-[400px] bg-white h-[170px] shadow rounded-xl">
            <div class="h-[120px]">
                <div class="flex relative">
                    <div class="ml-6 mt-6">
                        <p class="text-5xl font-bold text-gray-700">50</p>
                        <p class="text-2xl font-semibold text-gray-700">User</p>
                    </div>
                    <div class="text-5xl text-gray-700 absolute right-10 top-[40px]"><i class="fa-regular fa-user"></i></div>
                </div>

            </div>
            <a href="#user">
            <button  class="h-[50px] bg-gray-800 rounded-b-xl hover:bg-gray-600 w-full">
                <div class="flex px-3 gap-10">
                    <p class="text-white text-left pt-3">Check All User</p>
                    <i class="fa-solid fa-arrow-right text-white text-xl pt-3"></i>
                </div>
            </button>
        </a>
        </div>
        <div class="w-[400px] bg-white h-[170px] shadow rounded-xl">
            <div class="h-[120px]">
                <div class="flex relative">
                    <div class="ml-6 mt-6">
                        <p class="text-5xl font-bold text-gray-700">50</p>
                        <p class="text-2xl font-semibold text-gray-700">Item</p>
                    </div>
                    <div class="text-5xl text-gray-700 absolute right-10 top-[40px]"><i class="fa-regular fa-user"></i>
                    </div>
                </div>

            </div>
            <div class="h-[50px] bg-gray-800 rounded-b-xl hover:bg-gray-600">
                <div class="flex px-3 gap-10">
                    <p class="text-white text-left pt-3">Check All User</p>
                    <i class="fa-solid fa-arrow-right text-white text-xl pt-3"></i>
                </div>
            </div>
        </div>
        <div class="w-[400px] bg-white h-[170px] shadow rounded-xl">
            <div class="h-[120px]">
                <div class="flex relative">
                    <div class="ml-6 mt-6">
                        <p class="text-5xl font-bold text-gray-700">50</p>
                        <p class="text-2xl font-semibold text-gray-700">User</p>
                    </div>
                    <div class="text-5xl text-gray-700 absolute right-10 top-[40px]"><i class="fa-regular fa-user"></i>
                    </div>
                </div>

            </div>
            <div class="h-[50px] bg-gray-800 rounded-b-xl hover:bg-gray-600">
                <div class="flex px-3 gap-10">
                    <p class="text-white text-left pt-3">Check All User</p>
                    <i class="fa-solid fa-arrow-right text-white text-xl pt-3"></i>
                </div>
            </div>
        </div>
        <div class="w-[400px] bg-white h-[170px] shadow rounded-xl">
            <div class="h-[120px]">
                <div class="flex relative">
                    <div class="ml-6 mt-6">
                        <p class="text-5xl font-bold text-gray-700">50</p>
                        <p class="text-2xl font-semibold text-gray-700">User</p>
                    </div>
                    <div class="text-5xl text-gray-700 absolute right-10 top-[40px]"><i class="fa-regular fa-user"></i>
                    </div>
                </div>

            </div>
            <div class="h-[50px] bg-gray-800 rounded-b-xl hover:bg-gray-600">
                <div class="flex px-3 gap-10">
                    <p class="text-white text-left pt-3">Check All User</p>
                    <i class="fa-solid fa-arrow-right text-white text-xl pt-3"></i>
                </div>
            </div>
        </div>
    </div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[90%] mx-auto mt-[50px]" >
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Our products
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products
                    designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and
                    more.</p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-white dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody
                class="[&>*:nth-child(odd)]:bg-gray-800 hover:[&>*:nth-child(odd)]:bg-gray-600 hover:[&>*:nth-child(even)]:bg-gray-500 [&>*:nth-child(even)]:bg-gray-700">
                <tr class="bg-white border-b dark:bg-gray-800 hover:bg-gray-600 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Sliver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="hover:bg-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Microsoft Surface Pro
                    </th>
                    <td class="px-6 py-4">
                        White
                    </td>
                    <td class="px-6 py-4">
                        Laptop PC
                    </td>
                    <td class="px-6 py-4">
                        $1999
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        Accessories
                    </td>
                    <td class="px-6 py-4">
                        $99
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[90%] mx-auto mt-[50px]"id="user">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Our products
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products
                    designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and
                    more.</p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-white dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody
                class="[&>*:nth-child(odd)]:bg-gray-800 hover:[&>*:nth-child(odd)]:bg-gray-600 hover:[&>*:nth-child(even)]:bg-gray-500 [&>*:nth-child(even)]:bg-gray-700">
                <tr class="bg-white border-b dark:bg-gray-800 hover:bg-gray-600 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Sliver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="hover:bg-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Microsoft Surface Pro
                    </th>
                    <td class="px-6 py-4">
                        White
                    </td>
                    <td class="px-6 py-4">
                        Laptop PC
                    </td>
                    <td class="px-6 py-4">
                        $1999
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        Accessories
                    </td>
                    <td class="px-6 py-4">
                        $99
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[90%] mx-auto mt-[50px]">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Our products
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products
                    designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and
                    more.</p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-white dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody
                class="[&>*:nth-child(odd)]:bg-gray-800 hover:[&>*:nth-child(odd)]:bg-gray-600 hover:[&>*:nth-child(even)]:bg-gray-500 [&>*:nth-child(even)]:bg-gray-700">
                <tr class="bg-white border-b dark:bg-gray-800 hover:bg-gray-600 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Sliver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="hover:bg-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Microsoft Surface Pro
                    </th>
                    <td class="px-6 py-4">
                        White
                    </td>
                    <td class="px-6 py-4">
                        Laptop PC
                    </td>
                    <td class="px-6 py-4">
                        $1999
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        Accessories
                    </td>
                    <td class="px-6 py-4">
                        $99
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[90%] mx-auto mt-[50px]">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Our products
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products
                    designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and
                    more.</p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-white dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody
                class="[&>*:nth-child(odd)]:bg-gray-800 hover:[&>*:nth-child(odd)]:bg-gray-600 hover:[&>*:nth-child(even)]:bg-gray-500 [&>*:nth-child(even)]:bg-gray-700">
                <tr class="bg-white border-b dark:bg-gray-800 hover:bg-gray-600 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Sliver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="hover:bg-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Microsoft Surface Pro
                    </th>
                    <td class="px-6 py-4">
                        White
                    </td>
                    <td class="px-6 py-4">
                        Laptop PC
                    </td>
                    <td class="px-6 py-4">
                        $1999
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        Accessories
                    </td>
                    <td class="px-6 py-4">
                        $99
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="w-full h-[200px] bg-gray-800 mt-10">
        <div class="w-4/5 mx-auto">
            <div class="flex justify-center">
                <div class="border-b-2 border-white w-max">
                    <a href="https://flowbite.com/" class="flex items-center mt-3 pb-3 px-20">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo">
                        <span class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white ">Pelelang</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
