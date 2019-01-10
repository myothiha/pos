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
    <!--  PLUGINS For Responsive Table -->
    <link type="text/css" href="{{ url('') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="{{ url('') }}/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
    <link href="{{ url('') }}/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet"/>
    
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/css/style.css">
    
    @yield('plugins')
</head>
<body class="body-boxed">

<!-- BEGIN PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div>
<!-- END PRELOADER -->

<!-- BEGIN MAIN WRAPPER -->
<div class="body-wrap body-boxed all-wrapper">
    <!--BEGIN SM CONTAINER-->
    <div id="sm-container" class="sm-container">
        
        @include('admin.layouts.nav')

        <!-- BEGIN SM PUSHER -->
        <div class="sm-pusher">
            <div class="sm-content">
                <div class="sm-content-inner">
                    
                    @include('admin.layouts.header')

                    @yield('content')

                    @include('admin.layouts.footer')
                </div>
            </div>
        </div>
        <!-- END SM PUSHER -->
    </div>
    <!--END SM CONTAINER-->
</div>
<!-- END MAIN WRAPPER -->

<!-- TO TOP -->
<a href="javascript:void(0)" class="back-to-top btn-back-to-top sm_bg_1"></a>

<!-- CORE JS -->
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
<script src="{{ url('') }}/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
<script src="{{ url('') }}/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
<script src="{{ url('') }}/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ url('') }}/assets/js/sm_tables_dataTable_Responsive.js"></script>
<script src="{{ url('') }}/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<!-- APP JS -->
<script src="{{ url('') }}/assets/js/app.js"></script>

</body>
</html>

@yield('script')