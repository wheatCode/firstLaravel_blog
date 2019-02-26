<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>

    <!--  preloader start -->
    @include('layouts.preloader')
    <!-- preloader end -->

    <div class="wrapper">

        <!--header start-->
        @include('layouts.header',["dark" => (isset($dark))?$dark:null])

        <!--header end-->

        <!--hero section-->
        @yield('hero')
        <!--hero section-->

        <!--title section-->
        @yield('title')
        <!--title section-->


        <!--body content start-->
        @yield('content')
        <!--body content end-->

        <!--footer start 1-->
        @include('layouts.footer')
        <!--footer 1 end-->

    </div>

    @include('layouts.js')
</body>

</html>
