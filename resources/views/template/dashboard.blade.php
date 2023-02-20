@include('partial.header')

<body class="bg-[#fefefe] scroll-smooth">

    @include('partial.navbaruser')


    <!-- drawer init and show -->


    <!-- drawer component -->
    @include('partial.sidebaruser')


    @yield('content')
    @include('partial.footer')

</body>
</html>