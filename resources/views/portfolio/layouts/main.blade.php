<!DOCTYPE html>
<html lang="en">

<head>
    @include('portfolio.layouts.header')
</head>

<body>
    @yield('secondaryHeaderDiv')
    @yield('navbar')
    @yield('mainBody')
    @include('portfolio.layouts.footer')
</body>

</html>