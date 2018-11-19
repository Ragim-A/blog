<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{asset('')}}assets/images/favicon_1.ico">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Custom CSS Plugins Start-->
    @yield('header')
    <!-- Custom CSS Plugins  end-->

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />




    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>


</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include('admin.particles.topbar')
    <!-- Top Bar End -->
    <!-- ========== Left Sidebar Start ========== -->
    @include('admin.particles.sidebar')
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">


        <!-- Start content -->
        @yield('content')
        <!-- content -->

        <footer class="footer text-right">
            © 2018. All rights reserved.
        </footer>

    </div>

</div>
<!-- END wrapper -->
<script>
    var resizefunc = [];
</script>
<!-- jQuery  -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/detect.js')}}"></script>
<script src="{{asset('assets/js/fastclick.js')}}"></script>

<script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('assets/js/waves.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
<!-- JS plugins start-->
@yield('footer')
<!-- JS plugins end-->
<script src="{{asset('assets/js/jquery.core.js')}}"></script>
<script src="{{asset('assets/js/jquery.app.js')}}"></script>



<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });

        $(".knob").knob();

    });
</script>
</body>
</html>