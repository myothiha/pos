@extends('admin.layouts.back')

@include('admin.layouts.dateRangePicker')

@section('title', 'Sale Report')

@section('content')

    <!--BEGIN CONTENT-->
    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader p-b-25">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ action('ReportController@saleReport') }}">Sale Report</a></li>
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
                                <form action="{{ action('ReportController@saleReport') }}" class="form-horizontal form-bordered">

                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Date Range</label>
                                        <div class="col-md-8">
                                            <div class="input-group date input-group--style-1" id="default-daterange">
                                                <input class="form-control" type="text" name="daterange"  readonly="true" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Sale Type </label>
                                        <div class="col-md-8">
                                            <div class="input-group date input-group--style-1" id="default-daterange">
                                                <select name="saleType" class="form-control" id="sale_type">
                                                    <option value="{{ \App\Constants::CASH_DOWN }}">Cash Down</option>
                                                    <option value="{{ \App\Constants::CREDIT }}">Credit</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 text-right" style="margin-top: 15px;">
                                            <input type="submit" class="btn btn-primary" value="Generate">
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
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $sales as $index => $sale )
                                        <tr class="odd gradeX">
                                            <td>{{ ++$index }}</td>
                                            <td>{{ $sale->created_at->toDateString() }}</td>
                                            <td>{{ $sale->voucherNo }}</td>
                                            <td>{{ $sale->saleType }}</td>
                                            <td>{{ $sale->customer->name }}</td>
                                            <td>{{ $sale->totalAmount }}</td>
                                            <td><a class="btn btn-primary" href="{{ action('ReportController@saleReportDetail', $sale->id) }}">Detail</a></td>
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
<script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>

@endsection
