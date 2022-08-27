<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    @yield('general-css')

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('node_modules/chocolat/dist/css/chocolat.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-social/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
    @yield('css-libraries')

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets-app/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-app/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-app/css/trix.css') }}">

    @yield('style')

    @livewireStyles
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>

            @include('components.navbar-app')

            @include('components.sidebar-app')

            @yield('content')
            {{-- {{ $slot }} --}}
        </div>
    </div>

    @yield('modal')

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ asset('assets-app/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script type="text/javascript" src="{{ asset('assets-app/js/trix.js') }}"></script>
    <script src="{{ asset('node_modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script src="{{ asset('node_modules/jquery-ui-dist/jquery-ui.min.js') }}"></script>
    {{-- <script src="{{ asset('toastr/toastr.js') }}"></script> --}}
    @yield('js-libraries')

    <!-- Template JS File -->
    <script src="{{ asset('assets-app/js/scripts.js') }}"></script>
    <script src="{{ asset('assets-app/js/custom.js') }}"></script>
    <script src="{{ asset('node_modules/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    @stack('script')

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets-app/js/page/components-user.js') }}"></script>
    <script src="{{ asset('assets-app/js/page/modules-slider.js') }}"></script>
    @yield('js-specific-page')
    
    @livewireScripts
</body>
</html>