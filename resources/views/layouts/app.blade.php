<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="{{ asset('/assets/js/sweetalert.min.js') }}"></script>
    @include('components.css')
</head>

<body id="bg" onload="onloadFunction()">
    @include('sweet::alert')
    <div class="page-wraper">

        <!-- header -->
        @include('components.header')
        <!-- header END -->
        <!-- Content -->
        @yield('content')
        <!-- Content END-->
        <!-- Footer -->
        @include('components.footer')
        <!-- Footer END-->
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    @include('components.scripts')

</body>

</html>
