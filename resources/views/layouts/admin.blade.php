<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="{{ asset('/assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @include('components.admin.css')

</head>

<body id="bg">
    <div class="page-wraper">
        @include('sweet::alert')
        <!-- header -->
        @include('components.admin.side')
        @include('components.admin.header')
        <!-- header END -->
        <!-- Content -->
        @yield('content')
        <!-- Content END-->
        <!-- Footer -->
        @include('components.admin.footer')
        <!-- Footer END-->
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    @include('components.admin.scripts')

</body>

</html>
