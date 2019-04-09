@extends('admin.layouts.back')

@section('title', 'Dashboard')

@section('content')

    <!-- BEGIN PRELOADER -->
    <div id="preloader">
        <div class="inner">
            <span class="loader"></span>
        </div>
    </div>
    <!-- END PRELOADER -->

    <div class="login-cover">
        <div class="login-cover-image"><img src="http://via.placeholder.com/1980x1080" id="login-cover" alt=""/></div>
        <div class="login-cover-bg"></div>
    </div>

    <!-- BEGIN MAIN WRAPPER -->
    <div class="body-wrap sm_bg_transparent">
        <section class="slice fullvh">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="card form-card form-card--style-2 border-0 animated fadeInDown">
                            <div class="form-header text-center sm_bg_6 p-44">
                                <div class="form-header-icon">
                                    <img src="http://via.placeholder.com/106x20" alt="">
                                </div>
                            </div>
                            <div class="form-body">
                                <div class="text-center px-2">
                                    <h4 class="heading heading-4 strong-400 mb-4">Sign in to your account</h4>
                                </div>

                                <form class="form-default" >
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="username">Email</label>
                                                <input id="username" placeholder="Enter Username" type="email" class="form-control form-control-lg">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group has-feedback">
                                                <label for="password">Password</label>
                                                <input type="password" id="password" placeholder="Enter your password" class="form-control form-control-lg">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="checkbox">
                                                <input type="checkbox" id="chkRemember" checked>
                                                <label for="chkRemember">Remember me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-styled btn-lg btn-block text-white mt-4 sm_bg_6">Sign in</a>
                                </form>
                            </div>
                        </div>

                        <!-- Form auxiliary links -->
                        <div class="form-user-footer-links pt-2">
                            <div class="row">
                                <div class="col-6">
                                    <a href="sm_forgot_password.html" class="text-white">Recover password</a>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="sm_registration_v1.html" class="text-white">Create a new account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- END MAIN WRAPPER -->

@endsection