<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    @include('layouts.css')
    @livewireStyles
</head>
<body data-layout-size="boxed" data-layout="horizontal">
    <!-- Begin page -->
    <div id="layout-wrapper">
        @includeWhen($menuLayout, 'layouts.menu')
        @yield('content')
    </div>
    @include('layouts.js')
    @stack('js')
    <script src="/assets/js/app.js"></script>
    @livewireScripts

</body>
</html>
