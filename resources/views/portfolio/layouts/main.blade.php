<!DOCTYPE html>
<html lang="en">

<head>
    @include('portfolio.layouts.header')
</head>

<body>
    @include('portfolio.layouts.secondaryHeaderContainer')
    @include('portfolio.layouts.navbar')
    @yield('mainBody')
    @include('portfolio.layouts.footer')
</body>

</html>