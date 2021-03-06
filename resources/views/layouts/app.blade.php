<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Meta --}}
    @include('includes.meta')

    <title>@yield('title')</title>

    @stack('start-style')
    @include('includes.style')
    @stack('end-style')

</head>

<body>
    {{-- Navbar --}}
    @include('includes.navbar')

    {{-- Page Content --}}
    @yield('content')

    {{-- footer --}}
    @include('includes.footer')

    {{-- script --}}
    @stack('start-script')
    @include('includes.script')
    @stack('end-script')

</body>

</html>
