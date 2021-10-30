<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('components.admin.css')

</head>

<body id="bg" onload="onloadFunction()">
    <div class="page-wraper">

        <!-- header -->
        @include('components.admin.login-head')
        <!-- header END -->
        <!-- Content -->
        @yield('content')
        <!-- Content END-->
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    @include('components.admin.scripts')

</body>

</html>
