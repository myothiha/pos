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
                                        <i class="fa fa-user"></i> Admin
                                    </span>
                                    <span class="dropdown-text strong-600 d-xl-none d-lg-none d-md-inline-block">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-scale">
                                    <h6 class="dropdown-header">Navigation</h6>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <span class="float-right badge badge-primary">4</span>
                                        <i class="ion-ios-email-outline icon-lg text-primary"></i>Messages
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="ion-ios-person-outline icon-lg text-primary"></i>Profile
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="ion-ios-gear-outline icon-lg text-primary"></i>Settings
                                    </a>
                                    <div class="dropdown-divider" role="presentation"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">
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
            <a class="navbar-brand" href="index.html">
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
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="icon ion-ios-home-outline icon_nav"></i> Entry
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right sm_p_t_b">
                            <li class="nav-item">
                                <a href="{{ action('EmployeeController@index') }}" class="dropdown-item">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('TypeController@index') }}" class="dropdown-item">Type</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('CategoryController@index') }}" class="dropdown-item">Category</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('ColorController@index') }}" class="dropdown-item">Color</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('ItemController@index') }}" class="dropdown-item">Item</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('CustomerController@index') }}" class="dropdown-item">Customer</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('SupplierController@index') }}" class="dropdown-item">Supplier</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="icon ion-ios-book-outline icon_nav"></i> Transaction
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right sm_p_t_b">
                            <li class="nav-item">
                                <a href="{{ action('StockInController@create')}}" class="dropdown-item">StockIn</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('SaleController@create') }}" class="dropdown-item">Sale</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('TransferController@create') }}" class="dropdown-item">Transfer</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('ReceivableController@getCustomer') }}" class="dropdown-item">Recevieable</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.html" class="dropdown-item">RecevieableOpening</a>
                            </li>
                            <li class="nav-item">
                                <a href="sm_dashboard_02.html" class="dropdown-item">Damage</a>
                            </li>
                            <li class="nav-item">
                                <a href="sm_dashboard_03.html" class="dropdown-item">Category</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="icon ion-ios-book-outline icon_nav"></i> Processing
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right sm_p_t_b">
                            <li class="nav-item">
                                <a href="{{ action('IssueController@create') }}" class="dropdown-item">Issue</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="dropdown-item">Inspect</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="dropdown-item">Repair</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="icon ion-ios-book-outline icon_nav"></i> Report
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right sm_p_t_b">
                            <li class="nav-item">
                                <a href="{{ action('ReportController@stockInReport') }}" class="dropdown-item">Stock In Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('ReportController@saleReport') }}" class="dropdown-item">Sale Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('ReportController@saleReportByItem') }}" class="dropdown-item">Sale Report By Item</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('ReportController@transferReport') }}" class="dropdown-item">Transfer Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('ReportController@receivableReport') }}" class="dropdown-item">Receivable Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('ReportController@customerCreditReport') }}" class="dropdown-item">Customer Credit Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('ReportController@stockBalanceReport') }}" class="dropdown-item">Stock Balance Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('ReportController@stockInOutReport') }}" class="dropdown-item">Stock In/Out Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('ReportController@processReportByEmployee') }}" class="dropdown-item">Process Report By Employee</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('ReportController@processReportDaily') }}" class="dropdown-item">Process Report Daily</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- END NAVBAR LINKS -->
            </div>
        </div>
    </nav>
    <!--END NAV BAR-->
</div>
<!--END HEADER-->