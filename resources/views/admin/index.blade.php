@extends('admin.layouts.back')

@section('title', 'Dashboard')

@section('content')

<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Dashboard</h6>
        </div>
        <!--END BREADCRUMB-->

        <!--BEGIN PAGE CONTENT-->
        <div class="sm-content dashboard_v2">
            <div class="sm-content-box">
                <div class="row">
                    <div class="col-lg-12 col-xl-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sm-wrapper welcome_message">
                                    <div class="sm-box">
                                        <div class="sm-info no-border">
                                            <div class="sm-info-with-icon">
                                                <div class="sm-info-icon">
                                                    <p class="wi wi-night-alt-snow-thunderstorm f-s-60"></p>
                                                    <p class="text-center m-t-10 m-b-0 text-purple">
                                                        <span data-count="true" data-number="24" id="degree">24</span>
                                                        <sup>o</sup>C</p>
                                                    <h6 class="text-center text-purple"><span id="cloudy" data-typeit="true"><i class="ti-placeholder" style="display:inline-block;line-height:0;visibility:hidden;overflow:hidden;">.</i><span style="display:inline;position:relative;font:inherit;color:inherit;" class="ti-container">cloudy</span><span style="display: inline; position: relative; font: inherit; color: inherit; opacity: 0.301426;" class="ti-cursor">|</span></span>
                                                    </h6>
                                                </div>
                                                <div class="sm-info-text m-l-25">
                                                    <h2 class="sm-inner-header m-t-0 text-purple" id="good_morning" data-typeit="true"><i class="ti-placeholder" style="display:inline-block;line-height:0;visibility:hidden;overflow:hidden;">.</i><span style="display:inline;position:relative;font:inherit;color:inherit;" class="ti-container">Good Morning, Andrew!</span><span style="display: inline; position: relative; font: inherit; color: inherit; opacity: 0.301426;" class="ti-cursor">|</span></h2>
                                                    <div class="sm-inner-desc text-justify m-b-10 m-l-3">
                                                        Lorem Ipsum is simply dummy text of the
                                                        printing and typesetting
                                                        industry. Lorem Ipsum has been the
                                                        industry's standard of type and
                                                        scrambled it to make a type specimen book.
                                                        It has survived not only
                                                        five centuries
                                                    </div>
                                                    <div class="m-l-3">
                                                        <button type="button" class="btn btn-inverse">Today's
                                                            Weather
                                                        </button>
                                                        <button type="button" class="btn btn-inverse">Today's Task
                                                        </button>
                                                        <button type="button" class="btn btn-inverse res-xs-m-t-10">Calendar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-xl-6">
                                <div class="sm_bg_6 rounded overflow-hidden">
                                    <div class="p-l-20 p-r-20 p-t-20 d-flex align-items-center">
                                        <i class="icon-wallet f-s-60 l-h-0 text-white op-7"></i>
                                        <div class="m-l-20">
                                            <p class="f-s-10 tx-spacing-1 f-w-600 ttu text-white-8 m-b-10">
                                                Today's Visits</p>
                                            <p class="f-s-24 text-white f-w-700 m-b-0 lh-1"><span data-count="true" data-number="13071992" id="tdv">13,071,992</span></p>
                                            <span class="f-s-11 text-white-8">87% higher yesterday</span>
                                        </div>
                                    </div>
                                    <div id="ch1" class="h-50 tr-y-1 rickshaw_graph">
                                    <svg width="350" height="50"><g><path d="M0,25Q25.27777777777778,19.291666666666664,29.166666666666664,19.374999999999996C34.99999999999999,19.499999999999996,52.5,25.0625,58.33333333333333,26.25S81.66666666666667,30.875,87.5,31.25S110.83333333333333,30.625,116.66666666666666,30S140,24.25,145.83333333333334,25S169.16666666666666,35.625,175,37.5S198.33333333333334,43.75,204.16666666666669,43.75S227.49999999999997,38.4375,233.33333333333331,37.5S256.6666666666667,35.3125,262.5,34.375S285.83333333333337,27.8125,291.6666666666667,28.125S315,37.8125,320.8333333333333,37.5Q324.72222222222223,37.291666666666664,350,25L350,50Q324.72222222222223,50,320.8333333333333,50C315,50,297.5,50,291.6666666666667,50S268.3333333333333,50,262.5,50S239.16666666666666,50,233.33333333333331,50S210.00000000000003,50,204.16666666666669,50S180.83333333333334,50,175,50S151.66666666666669,50,145.83333333333334,50S122.49999999999999,50,116.66666666666666,50S93.33333333333333,50,87.5,50S64.16666666666666,50,58.33333333333333,50S34.99999999999999,50,29.166666666666664,50Q25.27777777777778,50,0,50Z" class="area" fill="rgba(255,255,255,0.5)"></path></g></svg></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-6 res-xs-m-t-20">
                                <div class="sm_bg_2 rounded overflow-hidden">
                                    <div class="p-l-20 p-r-20 p-t-20 d-flex align-items-center">
                                        <i class="icon-bag f-s-60 l-h-0 text-white op-7"></i>
                                        <div class="m-l-20">
                                            <p class="f-s-10 tx-spacing-1 f-w-600 ttu text-white-8 m-b-10">Today
                                                Sales</p>
                                            <p class="f-s-24 text-white f-w-700 m-b-0 lh-1">$<span data-count="true" data-number="08041994" id="ts">8,041,994</span></p>
                                            <span class="f-s-11 text-white-8">$340,484 before tax</span>
                                        </div>
                                    </div>
                                    <div id="ch3" class="h-50 tr-y-1 rickshaw_graph">
                                    <svg width="350" height="50"><g><path d="M0,25Q25.27777777777778,21.458333333333332,29.166666666666664,21.875C34.99999999999999,22.5,52.5,30.9375,58.33333333333333,31.25S81.66666666666667,26.25,87.5,25S110.83333333333333,18.75,116.66666666666666,18.75S140,23.125,145.83333333333334,25S169.16666666666666,35.625,175,37.5S198.33333333333334,43.75,204.16666666666669,43.75S227.49999999999997,38.4375,233.33333333333331,37.5S256.6666666666667,35.3125,262.5,34.375S285.83333333333337,27.8125,291.6666666666667,28.125S315,37.8125,320.8333333333333,37.5Q324.72222222222223,37.291666666666664,350,25L350,50Q324.72222222222223,50,320.8333333333333,50C315,50,297.5,50,291.6666666666667,50S268.3333333333333,50,262.5,50S239.16666666666666,50,233.33333333333331,50S210.00000000000003,50,204.16666666666669,50S180.83333333333334,50,175,50S151.66666666666669,50,145.83333333333334,50S122.49999999999999,50,116.66666666666666,50S93.33333333333333,50,87.5,50S64.16666666666666,50,58.33333333333333,50S34.99999999999999,50,29.166666666666664,50Q25.27777777777778,50,0,50Z" class="area" fill="rgba(255,255,255,0.5)"></path></g></svg></div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-lg-6">
                                <div class="video_content" style="min-height: 175px;">
                                    <div class="video_title"><p class="video_title_text">Check our Limited Offers</p>
                                        <h2 class="video_desc">Save up to 50%
                                            <a href="javascript:void(0)" class="f-s-14 btn btn-primary btn-sm">
                                                View <i class="fa fa-angle-right mg-l-5"></i>
                                            </a>
                                        </h2>
                                    </div>
                                    <div class="video-player">
                                        <video class="video_tag" src="assets/img/ui_elements/free-video.mp4" poster="http://via.placeholder.com/670x350" loop="loop" autoplay="">
                                        </video>
                                    </div>
                                </div>

                                <div class="card widget_1">
                                    <div class="row no-gutters">
                                        <div class="col-lg-12 col-md-6">
                                            <i class="icon icon-note"></i>
                                            <div class="wid-content">
                                                <label>Withholding Tax</label>
                                                <h2>130,792</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 res-xs-m-t-20 res-md-m-t-20" style="min-height: 230px;">
                                <div class="img-cover rounded b-box"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                    <div class="widget_2">
                                        <div class="heading-1 f-w-700 f-s-26"><span data-count="true" data-number="01307" id="btc">1,307</span>
                                            <span class="f-s-16 m-0">BTC</span></div>
                                        <p class="f-w-600 m-b-5">Bitcoin Earnings</p>
                                        <p class="m-b-15">Lorem Ipsum is simply<br>dummy text of the.
                                        </p>
                                        <a href="javascript:void(0)" class="btn btn-outline-primary btn-sm w-100">View <i class="fa fa-angle-right mg-l-5"></i></a>
                                    </div>
                                    <canvas id="chartJsNewUsers" height="286" style="height: 286px; display: block; width: 348px;" width="348"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="row m-t-20 cards">
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon-user text-primary f-s-40"></i>
                                            </div>
                                            <div class="col-9">
                                                <h6 class="m-0">New Users</h6>
                                                <p class="mb-0">114 New Users</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon-basket-loaded text-info f-s-40"></i>
                                            </div>
                                            <div class="col-9">
                                                <h6 class="m-0">Order Placed</h6>
                                                <p class="mb-0">574 New Order</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon-handbag text-danger f-s-40"></i>
                                            </div>
                                            <div class="col-9">
                                                <h6 class="m-0">Delivery </h6>
                                                <p class="mb-0">489 New Delivery</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon-trophy text-success f-s-40"></i>
                                            </div>
                                            <div class="col-9">
                                                <h6 class="m-0">Monthly Profits</h6>
                                                <p class="mb-0">$19,887 Profit
                                                    <span class="float-right text-success"> </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 ui-sortable">
                                <div class="sm-wrapper">
                                    <div class="title_box sm-header-style-1">
                                        <div class="sm-actions">
                                            <a href="javascript:void(0)" class="tooltip_cus fullscreen_element">
                                                <span class="extra-tooltip">Fullscreen</span>
                                                <i class="material-icons">fullscreen</i>
                                            </a>
                                            <a href="javascript:void(0)" class="tooltip_cus refresh_element">
                                                <span class="extra-tooltip">Refresh</span>
                                                <i class="material-icons">refresh</i>
                                            </a>
                                            <a href="javascript:void(0)" class="tooltip_cus minimize_element">
                                                <span class="extra-tooltip">Collapse / Expand</span>
                                                <i class="material-icons">import_export</i>
                                            </a>
                                            <a href="javascript:void(0)" class="tooltip_cus remove_element">
                                                <span class="extra-tooltip">Remove</span>
                                                <i class="material-icons">close</i>
                                            </a>
                                        </div>
                                        <h6 class="sm-header ui-sortable-handle">
                                            Sales Widget
                                        </h6>
                                    </div>
                                    <div class="sm-box p-15">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Customer</th>
                                                    <th>Products</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="nowrap">Andrew Heston</td>
                                                    <td>
                                                        <div class="cell-image-list">
                                                            <div class="cell-img" style="background-image: url('http://via.placeholder.com/1980x1322')"></div>
                                                            <div class="cell-img" style="background-image: url('http://via.placeholder.com/1980x1322')"></div>
                                                            <div class="cell-img" style="background-image: url('http://via.placeholder.com/1980x1322')"></div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="status-pill green" data-title="Complete" data-toggle="tooltip" data-original-title="" title=""></div>
                                                    </td>
                                                    <td class="text-right">$478</td>
                                                </tr>
                                                <tr>
                                                    <td class="nowrap">Michel Newton</td>
                                                    <td>
                                                        <div class="cell-image-list">
                                                            <div class="cell-img" style="background-image: url('http://via.placeholder.com/1980x1322')"></div>
                                                            <div class="cell-img" style="background-image: url('http://via.placeholder.com/1980x1322')"></div>
                                                            <div class="cell-img-more">+ 5 more</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="status-pill red" data-title="Cancelled" data-toggle="tooltip" data-original-title="" title=""></div>
                                                    </td>
                                                    <td class="text-right">$154</td>
                                                </tr>
                                                <tr>
                                                    <td class="nowrap">Mark Ruffalo</td>
                                                    <td>
                                                        <div class="cell-image-list">
                                                            <div class="cell-img" style="background-image: url('http://via.placeholder.com/1980x1322')"></div>
                                                            <div class="cell-img" style="background-image: url('http://via.placeholder.com/1980x1322')"></div>
                                                            <div class="cell-img" style="background-image: url('http://via.placeholder.com/1980x1322')"></div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="status-pill green" data-title="Complete" data-toggle="tooltip" data-original-title="" title=""></div>
                                                    </td>
                                                    <td class="text-right">$478</td>
                                                </tr>
                                                <tr>
                                                    <td class="nowrap">John</td>
                                                    <td>
                                                        <div class="cell-image-list">
                                                            <div class="cell-img" style="background-image: url('http://via.placeholder.com/1980x1322')"></div>
                                                            <div class="cell-img" style="background-image: url('http://via.placeholder.com/1980x1322')"></div>
                                                            <div class="cell-img" style="background-image: url('http://via.placeholder.com/1980x1322')"></div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="status-pill yellow" data-title="Pending" data-toggle="tooltip" data-original-title="" title=""></div>
                                                    </td>
                                                    <td class="text-right">$3,420</td>
                                                </tr>
                                                <tr>
                                                    <td class="nowrap">Catherine</td>
                                                    <td>
                                                        <div class="cell-image-list">
                                                            <div class="cell-img" style="background-image: url('http://via.placeholder.com/1980x1322')"></div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="status-pill green" data-title="Complete" data-toggle="tooltip" data-original-title="" title=""></div>
                                                    </td>
                                                    <td class="text-right">$856</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-4 col-sm-12">
                        <div class="row">
                            <div class="col-lg-6 col-xl-12 col-sm-6" style="min-height: 250px;">
                                <div class="pvr-wrapper">
                                    <div class="pvr-box-gray clock_box">
                                        <div class="clock-wrapper" style="top:35%;">
                                            <div class="clock-base">
                                                <div class="click-indicator">
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="clock-hour"></div>
                                                <div class="clock-minute"></div>
                                                <div class="clock-second"></div>
                                                <div class="clock-center"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-12 col-sm-6" style="margin-top:5%;">
                                <div class="ui-block">
                                    <div class="widget sm_wethear m-b-10">
                                        <a href="javascript:void(0)" class="more">
                                            <svg class="dots-icons">
                                                <use xlink:href="assets/img/svg/sprites/icons.svg#dots-icons"></use>
                                            </svg>
                                        </a>
                                        <div class="sm_weather_now inline-items">
                                            <div class="sm_temp_sensor">64°</div>
                                            <div class="max-min-temperature">
                                                <span>58°</span>
                                                <span>76°</span>
                                            </div>
                                            <svg class="olymp-weather-storm-icon large_icon">
                                                <use xlink:href="assets/img/svg/sprites/icons-weather.svg#olymp-weather-storm-icon"></use>
                                            </svg>
                                        </div>
                                        <div class="sm_weather_now_dec">
                                            <div class="climate">Partly Drizzling</div>
                                            <span>Rain: <span>14°</span></span>
                                            <span>Chance of Rain: <span>89%</span></span>
                                        </div>
                                        <ul class="sm_forecast">
                                            <li>
                                                <div class="day">sun</div>
                                                <svg class="olymp-weather-sunny-icon">
                                                    <use xlink:href="assets/img/svg/sprites/icons-weather.svg#olymp-weather-sunny-icon"></use>
                                                </svg>

                                                <div class="sm_temp_day">60°</div>
                                            </li>
                                            <li>
                                                <div class="day">mon</div>
                                                <svg class="olymp-weather-partly-sunny-icon">
                                                    <use xlink:href="assets/img/svg/sprites/icons-weather.svg#olymp-weather-partly-sunny-icon"></use>
                                                </svg>
                                                <div class="sm_temp_day">58°</div>
                                            </li>

                                            <li>
                                                <div class="day">tue</div>
                                                <svg class="olymp-weather-cloudy-icon">
                                                    <use xlink:href="assets/img/svg/sprites/icons-weather.svg#olymp-weather-cloudy-icon"></use>
                                                </svg>

                                                <div class="sm_temp_day">67°</div>
                                            </li>
                                            <li>
                                                <div class="day">wed</div>
                                                <svg class="olymp-weather-rain-icon">
                                                    <use xlink:href="assets/img/svg/sprites/icons-weather.svg#olymp-weather-rain-icon"></use>
                                                </svg>

                                                <div class="sm_temp_day">70°</div>
                                            </li>
                                            <li>
                                                <div class="day">thu</div>
                                                <svg class="olymp-weather-storm-icon">
                                                    <use xlink:href="assets/img/svg/sprites/icons-weather.svg#olymp-weather-storm-icon"></use>
                                                </svg>

                                                <div class="sm_temp_day">58°</div>
                                            </li>
                                            <li>
                                                <div class="day">fri</div>
                                                <svg class="olymp-weather-snow-icon">
                                                    <use xlink:href="assets/img/svg/sprites/icons-weather.svg#olymp-weather-snow-icon"></use>
                                                </svg>

                                                <div class="sm_temp_day">68°</div>
                                            </li>
                                            <li>
                                                <div class="day">sat</div>

                                                <svg class="olymp-weather-wind-icon-header">
                                                    <use xlink:href="assets/img/svg/sprites/icons-weather.svg#olymp-weather-wind-icon-header"></use>
                                                </svg>

                                                <div class="sm_temp_day">65°</div>
                                            </li>
                                        </ul>
                                        <div class="date-and-place">
                                            <h5 class="date">Friday, June 15th</h5>
                                            <div class="place">New York City, USA</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-12 col-sm-6 ui-sortable">
                                <div class="sm-wrapper">
                                    <div class="title_box sm-header-style-1">
                                        <div class="sm-actions">
                                            <a href="javascript:void(0)" class="tooltip_cus fullscreen_element">
                                                <span class="extra-tooltip">Fullscreen</span>
                                                <i class="material-icons">fullscreen</i>
                                            </a>
                                            <a href="javascript:void(0)" class="tooltip_cus refresh_element">
                                                <span class="extra-tooltip">Refresh</span>
                                                <i class="material-icons">refresh</i>
                                            </a>
                                            <a href="javascript:void(0)" class="tooltip_cus minimize_element">
                                                <span class="extra-tooltip">Collapse / Expand</span>
                                                <i class="material-icons">import_export</i>
                                            </a>
                                            <a href="javascript:void(0)" class="tooltip_cus remove_element">
                                                <span class="extra-tooltip">Remove</span>
                                                <i class="material-icons">close</i>
                                            </a>
                                        </div>
                                        <h6 class="sm-header ui-sortable-handle">
                                            Latest comments
                                        </h6>
                                    </div>
                                    <div class="sm-box">
                                        <div class="sidebar-object">
                                            <div class="section-title section-title--style-1">
                                                <h3 class="section-title-inner heading-sm strong-500">
                                                    Latest comments
                                                </h3>
                                            </div>
                                            <ul class="list-recent">
                                                <li class="clearfix">
                                                    <a href="javascript:void(0)" class="post-thumb w24">
                                                        <img src="http://via.placeholder.com/128x128" alt="">
                                                    </a>
                                                    <span class="post-author">
                                                <a href="javascript:void(0)">Andrew Heston</a>
                                                <br>
                                                2 mins ago
                                            </span>
                                                    <span class="post-entry">
                                                Lorem Ipsum is simply dummy text of the printing.
                                            </span>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="javascript:void(0)" class="post-thumb w24">
                                                        <img src="http://via.placeholder.com/128x128" alt="">
                                                    </a>
                                                    <span class="post-author">
                                                <a href="javascript:void(0)">Michel Newton</a>
                                                <br>
                                                1 hr ago
                                            </span>
                                                    <span class="post-entry">
                                                Lorem Ipsum is simply dummy text of the printing.
                                            </span>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="javascript:void(0)" class="post-thumb w24">
                                                        <img src="http://via.placeholder.com/128x128" alt="">
                                                    </a>
                                                    <span class="post-author">
                                                <a href="javascript:void(0)">Mark Ruffalo</a>
                                                <br>
                                                4 hrs ago
                                            </span>
                                                    <span class="post-entry">
                                                Lorem Ipsum is simply dummy text of the printing.
                                            </span>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="javascript:void(0)" class="post-thumb w24">
                                                        <img src="http://via.placeholder.com/128x128" alt="">
                                                    </a>
                                                    <span class="post-author">
                                                <a href="javascript:void(0)">Catherine Weiss</a>
                                                <br>
                                                5 hrs ago
                                            </span>
                                                    <span class="post-entry">
                                                Lorem Ipsum is simply dummy text of the printing.
                                            </span>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="javascript:void(0)" class="post-thumb w24">
                                                        <img src="http://via.placeholder.com/128x128" alt="">
                                                    </a>
                                                    <span class="post-author">
                                                <a href="javascript:void(0)">Mark Ruffalo</a>
                                                <br>
                                                6 hrs ago
                                            </span>
                                                    <span class="post-entry">
                                                Lorem Ipsum is simply dummy text of the printing.
                                            </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END PAGE CONTENT-->
    </div>
</section>

@endsection