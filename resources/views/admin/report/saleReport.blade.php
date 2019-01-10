@extends('admin.layouts.back')

@section('title', 'Sale Report')

@section('content')

    <!--BEGIN CONTENT-->
    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader p-b-25">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/salereport">Sale Report</a></li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">Sale Report</h6>
            </div>
            <!--END BREADCRUMB-->
        </div>
        <div class="sm-content">
            <div class="sm-content-box">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper">
                            <div class="sm-box">
                                <form class="form-horizontal form-bordered">
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Default Date
                                            Ranges</label>
                                        <div class="col-md-8">
                                            <div class="input-group date input-group--style-1" id="default-daterange">
                                                <input type="text" class="form-control"
                                                       placeholder="Click to select the date range" autocomplete="off">
                                                <span class="input-group-addon">
                                                                    <i class="ion-ios-calendar-outline"></i>
                                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Advance Date
                                            Ranges</label>
                                        <div class="col-md-8">
                                            <div id="advance-daterange"
                                                 class="btn btn-inverse btn-block text-left f-s-12">
                                                <i class="fa fa-caret-down pull-right m-t-2"></i>
                                                <span>December 12, 2018 - January 10, 2019</span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper">
                            <div class="sm-box">
                                <table class="table table-striped table-bordered nowrap w-in-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Voucher NO</th>
                                        <th>Sale Type</th>
                                        <th>Customer</th>
                                        <th>Total Amount</th>
                                        <th>Paid</th>
                                        <th>Balance</th>
                                        <th>Remark</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach( $sales as $index => $sale )
                                        <tr class="odd gradeX">
                                            <td>{{ ++$index }}</td>
                                            <td>{{ $sale->created_at }}</td>
                                            <td>{{ $sale->voucherNo }}</td>
                                            <td>{{ $sale->saleType }}</td>
                                            <td>{{ $sale->customer->name }}</td>
                                            <td>{{ $sale->totalAmount }}</td>
                                            <td>{{ $sale->paid }}</td>
                                            <td>{{ $sale->balance }}</td>
                                            <td>{{ $sale->remark }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END CONTENT-->

@endsection