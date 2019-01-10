@extends('admin.layouts.back')

@section('plugins')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="{{ url('') }}/assets/plugins/bootstrap-daterangepicker/moment.js"></script>
    <script type="text/javascript" src="{{ url('') }}/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <link href="{{ url('') }}/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"/>
@endsection

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
                                                <input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Advance Date
                                            Ranges</label>
                                        
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