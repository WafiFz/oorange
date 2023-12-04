<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>

@if (\Request::is('rtl'))
  <html dir="rtl" lang="ar">
@else
  <html lang="en" >
@endif

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="@asset('assets/img/apple-icon.png')">
  <link rel="icon" type="image/png" href="@asset('assets/img/favicon.png')">
  <title> @yield('title')| HMPSTS</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="@asset('assets/css/nucleo-icons.css')" rel="stylesheet" />
  <link href="@asset('assets/css/nucleo-svg.css')" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="@asset('assets/css/nucleo-svg.css')" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="@asset('assets/css/soft-design-system.css?v=1.0.9')" rel="stylesheet" />
</head>

<body class="index-page">
  @auth
    @yield('auth')
  @endauth
  @guest
    @yield('guest')
  @endguest

  @if(session()->has('success'))
    <div x-data="{ show: true}"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="position-fixed bg-success rounded right-3 text-sm py-2 px-4">
      <p class="m-0">{{ session('success')}}</p>
    </div>
  @endif

    <!--   Core JS Files   -->
  <script src="@asset('assets/js/core/popper.min.js')" type="text/javascript"></script>
  <script src="@asset('assets/js/core/bootstrap.min.js')" type="text/javascript"></script>
  <script src="@asset('assets/js/plugins/perfect-scrollbar.min.js')"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="@asset('assets/js/plugins/countup.min.js')"></script>
  <script src="@asset('assets/js/plugins/choices.min.js')"></script>
  <script src="@asset('assets/js/plugins/prism.min.js')"></script>
  <script src="@asset('assets/js/plugins/highlight.min.js')"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
  <script src="@asset('assets/js/plugins/rellax.min.js')"></script>
  <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
  <script src="@asset('assets/js/plugins/tilt.min.js')"></script>
  <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
  <script src="@asset('assets/js/plugins/choices.min.js')"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="@asset('assets/js/plugins/parallax.min.js')"></script>
</body>

</html>
