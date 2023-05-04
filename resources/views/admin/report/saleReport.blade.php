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

                <div class="container">
                    @include('admin.errors.error')
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="sm-wrapper">
                            <div class="sm-box">
                                <h3>Summary</h3>
                                <table class="table table-striped table-bordered nowrap w-in-100">
                                    <tr>
                                        <td><b>Credit</b></td>
                                        <td><b>Paid</b></td>
                                        <td><b>Total Amount</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ $sales->sum('balance') }}</b></td>
                                        <td><b>{{ $sales->sum('paid') }}</b></td>
                                        <td><b>{{ $sales->sum('totalAmount') }}</b></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sm-wrapper">
                            <div class="sm-box">
                                <h3>Credit Sales</h3>

                                @include('admin._partials.pagination', ['collection' => $sales])

                                <table class="table table-striped table-bordered nowrap w-in-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Voucher NO</th>
                                        <th>Sale Type</th>
                                        <th>Customer</th>
                                        <th>Credit Balance</th>
                                        <th>Paid</th>
                                        <th>Total Amount</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $credit_sales as $index => $sale )
                                        <tr class="odd gradeX">
                                            <td>{{ ++$index }}</td>
                                            <td>{{ $sale->created_at->toDateString() }}</td>
                                            <td>{{ $sale->voucherNo }}</td>
                                            <td>{{ $sale->saleType }}</td>
                                            <td>{{ $sale->customer->name }}</td>
                                            <td>{{ $sale->balance }}</td>
                                            <td>{{ $sale->paid }}</td>
                                            <td>{{ $sale->totalAmount }}</td>
                                            <td><a class="btn btn-primary" href="{{ action('ReportController@saleReportDetail', $sale->id) }}">Detail</a></td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="5" class="text-right"><b>Total</b></td>
                                        <td>{{ $credit_sales->sum('balance') }}</td>
                                        <td>{{ $credit_sales->sum('paid') }}</td>
                                        <td colspan="2">{{ $credit_sales->sum('totalAmount') }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sm-wrapper">
                            <div class="sm-box">
                                <h3>Cash Down Sales</h3>
                                <table class="table table-striped table-bordered nowrap w-in-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Voucher NO</th>
                                        <th>Sale Type</th>
                                        <th>Customer</th>
                                        <th>Credit Balance</th>
                                        <th>Paid</th>
                                        <th>Total Amount</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $cashdown_sales as $index => $sale )
                                        <tr class="odd gradeX">
                                            <td>{{ ++$index }}</td>
                                            <td>{{ $sale->created_at->toDateString() }}</td>
                                            <td>{{ $sale->voucherNo }}</td>
                                            <td>{{ $sale->saleType }}</td>
                                            <td>{{ $sale->customer->name }}</td>
                                            <td>{{ $sale->balance }}</td>
                                            <td>{{ $sale->paid }}</td>
                                            <td>{{ $sale->totalAmount }}</td>
                                            <td><a class="btn btn-primary" href="{{ action('ReportController@saleReportDetail', $sale->id) }}">Detail</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        {{ $sales->links() }}
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
