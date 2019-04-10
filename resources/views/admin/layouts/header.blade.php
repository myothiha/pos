<!-- BEGIN HEADER -->
<div class="header">
    <!-- BEGIN TOP BAR -->
    <div class="top-navbar" id="top-navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="aux-text d-none d-md-inline-block">
                        <ul class="inline-links inline-links--style-1">
                            <li class="d-none d-lg-inline-block">
                                <a href="javascript:void(0)"><i class="fa fa-phone"></i> +097978643453</a>
                            </li>
                            <li>
                                <a href="http://perfectin.co/" target="_blank"><i
                                            class="fa fa-globe"></i>
                                    UpSalute Creative Solution</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <nav class="top-navbar-menu">
                        <ul class="top-menu">
                            <li class="dropdown">
                                <a class="dropdown-toggle has-badge" href="javascript:void(0)"
                                   data-toggle="dropdown"
                                   data-hover="dropdown"
                                   aria-expanded="false">
                                    <span class="dropdown-text strong-600 d-none d-lg-inline-block d-xl-inline-block">
                                        <i class="fa fa-user"></i> {{ Auth::user()->name }}
                                    </span>
                                    <span class="dropdown-text strong-600 d-xl-none d-lg-none d-md-inline-block">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-scale">
                                    <h6 class="dropdown-header">Navigation</h6>
                                    <a class="dropdown-item" href="/admin">
                                        <i class="ion-ios-email-outline icon-lg text-primary"></i>Dashboard
                                    </a>
                                    <a class="dropdown-item" href="{{ action('UserController@index') }}">
                                        <i class="ion-ios-person-outline icon-lg text-primary"></i>User List
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="ion-ios-gear-outline icon-lg text-primary"></i>Settings
                                    </a>
                                    <div class="dropdown-divider" role="presentation"></div>
                                    <a class="dropdown-item" href="{{ action("LoginController@logout")}}">
                                        <i class="ion-log-out icon-lg text-primary"></i>Logoff
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--END TOP BAR-->

    <!-- BEGIN SEARCH -->
    <div class="search sm_bg_2">
        <i id="btn-search-close" class="icon-close btn--search-close"></i>
        <form class="search__form" action="index.html">
            <input class="search__input" name="search" type="search" placeholder="Search.."
                   autocomplete="off"
                   spellcheck="false"/>
            <span class="search__info">Hit enter to search or ESC to close</span>
        </form>
        <div class="search__related">
            <div class="search__suggestion">
                <h3>May We Suggest?</h3>
                <p>#drone #funny #catgif #broken #lost #hilarious #good #red #blue #nono #why #yes
                    #yesyes #aliens
                    #green</p>
            </div>
            <div class="search__suggestion">
                <h3>Is It This?</h3>
                <p>#good #red #hilarious #blue #nono #why #yes #yesyes #aliens #green #drone #funny
                    #catgif #broken
                    #lost</p>
            </div>
            <div class="search__suggestion">
                <h3>Needle, Where Art Thou?</h3>
                <p>#broken #lost #good #red #funny #hilarious #catgif #blue #nono #why #yes #yesyes
                    #aliens #green
                    #drone</p>
            </div>
        </div>
    </div>
    <!-- END SEARCH -->

    <!-- BEGIN NAVBAR -->
    <nav id="header"
         class="navbar navbar-expand-lg navbar--bold navbar-light bg-default navbar--bb-1px">
        <!--navbar-inverse bg-dark-->
        <div class="container navbar-container">
            <!-- BEGIN LOGO -->
            <a class="navbar-brand" href="/">
                <img src="http://via.placeholder.com/106x20" class="" alt="perfectin.co">
            </a>
            <!--END LOGO-->

            <div class="d-inline-block">
                <!-- BEGIN NAVBAR TOGGLER  -->
                <button class="navbar-toggler hamburger hamburger-js hamburger--spring"
                        type="button" data-toggle="collapse" data-target="#navbar_main">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <!-- END NAVBAR TOGGLER  -->
            </div>

            <div class="collapse navbar-collapse align-items-center justify-content-end"
                 id="navbar_main">
                <!-- BEGIN NAVBAR LINKS -->
                <ul class="navbar-nav">
                    @include('admin._partials.nav.entry')

                    @role("sale")
                        @include('admin._partials.nav.transaction')
                    @elserole('processing')
                        @include('admin._partials.nav.processing')
                    @else
                        @include('admin._partials.nav.transaction')
                        @include('admin._partials.nav.processing')
                        @include('admin._partials.nav.report')
                    @endrole
                </ul>
                <!-- END NAVBAR LINKS -->
            </div>
        </div>
    </nav>
    <!--END NAV BAR-->
</div>
<!--END HEADER-->
