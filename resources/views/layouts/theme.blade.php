<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>@yield('pagetitle') - {{ env('APP_NAME') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
        <meta name="description" content="Build whatever layout you need with our Architect framework.">
        <link rel="icon" type="image/png" href="{{ asset('assets/images/mis-hosinfo-favicon.png') }}">
        <!-- Disable tap highlight on IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <link rel="stylesheet" href="{{ asset('assets/vendors/@fortawesome/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/ionicons-npm/css/ionicons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/linearicons-master/dist/web-font/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/pixeden-stroke-7-icon-master/pe-icon-7-stroke/dist/pe-icon-7-stroke.css') }}">
        <link href="{{asset('assets/styles/css/base.css') }}" rel="stylesheet">

        @yield('header-script')

        @livewireStyles
    </head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">

            @include('layouts.header')

            <div class="ui-theme-settings">

                {{-- @include('layouts.setting') --}}

            </div>

            <div class="app-main">

                @include('layouts.sidebar')

                <div class="app-main__outer">
                    <div class="app-main__inner">

                        @yield('content')

                    </div>

                    <div class="app-wrapper-footer">

                        @include('layouts.footer')

                    </div>
                </div>

            </div>
        </div>

        <script>
            function myFunctionLogoMini() {
              var x = document.getElementById("div_mini");
              var x2 = document.getElementById("hamburger_b2");
              var x3 = document.getElementById("hamburger_b1");
              x.style.display = "block";
              x2.style.display = "block";
              x3.style.display = "none";
            }
            function myFunctionLogoFull() {
                var x = document.getElementById("div_mini");
                var x2 = document.getElementById("hamburger_b2");
                var x3 = document.getElementById("hamburger_b1");
                x.style.display = "none";
                x2.style.display = "none";
                x3.style.display = "block";
            }
        </script>

        {{-- <div class="app-drawer-wrapper">

            @include('layouts.rightmenu')

        </div> --}}
        <div class="app-drawer-overlay d-none animated fadeIn"></div>
        <!-- plugin dependencies -->
        <script type="text/javascript" src="{{asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/vendors/moment/moment.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/vendors/metismenu/dist/metisMenu.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/vendors/bootstrap4-toggle/js/bootstrap4-toggle.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/vendors/jquery-circle-progress/dist/circle-progress.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/vendors/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/vendors/toastr/build/toastr.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/vendors/jquery.fancytree/dist/jquery.fancytree-all-deps.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/vendors/apexcharts/dist/apexcharts.min.js') }}"></script>
        <!-- custome.js -->
        <script type="text/javascript" src="{{asset('assets/js/charts/apex-charts.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/js/circle-progress.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/js/demo.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/js/scrollbar.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/js/toastr.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/js/treeview.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/js/form-components/toggle-switch.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/js/app.js') }}"></script>

        @yield('footer-script')

        @livewireScripts
    </body>

</html>
