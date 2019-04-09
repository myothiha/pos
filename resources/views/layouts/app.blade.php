<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title class="has_page_title">App Name - @yield('title')</title>
    <!-- FAVICON -->
    <link href="http://via.placeholder.com/32x32" rel="icon" type="image/png">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{ url('') }}/assets/plugins/bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- JQUERY UI -->
    <link type="text/css" href="{{ url('') }}/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
    <!-- STYLE -->
    <link id="stylesheet" type="text/css" href="{{ url('') }}/assets/css/style.css" rel="stylesheet" media="screen">
    <!-- CUSTOM STYLE -->
    <link type="text/css" href="{{ url('') }}/assets/css/custom.css" rel="stylesheet">
    <!--  MODERNIZR JS -->
    <script src="{{ url('') }}/assets/plugins/modernizr/modernizr-custom.js"></script>
    <!--  PLUGINS -->
    <link type="text/css" href="{{ url('') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
</head>
<body class="">

@yield('content')


<!-- CORE JS -->
<script src="{{ url('') }}/assets/plugins/jquery/jquery.min.js"></script>
<script src="{{ url('') }}/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="{{ url('') }}/assets/plugins/popper/popper.min.js"></script>
<script src="{{ url('') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ url('') }}/assets/js/slidebar/slidebar.js"></script>
<script src="{{ url('') }}/assets/js/classie.js"></script>
<script src="{{ url('') }}/assets/js/side_menu.js"></script>

<!-- PLUGINS -->
<script src="{{ url('') }}/assets/plugins/pace/pace.min.js"></script>
<script src="{{ url('') }}/assets/plugins/smooth-scrollbar/smooth-scrollbar.js"></script>
<script src="{{ url('') }}/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script src="{{ url('') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="{{ url('') }}/assets/plugins/placeholders/placeholders.js"></script>

<!-- APP JS -->
<script src="{{ url('') }}/assets/js/app.js"></script>
<script src="{{ url('') }}/assets/js/sm_login_demo.js"></script>
</body>
</html>

