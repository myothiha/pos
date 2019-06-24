@extends('admin.layouts.back')

@include('admin.layouts.dateRangePicker')

@section('title', 'Customer Credit Report')

@section('content')
    <style type="text/css">
        .select2 .selection .select2-selection .select2-selection__rendered {
            padding: 8px 0px;
        }
    </style>
    <!--BEGIN CONTENT-->
    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader p-b-25">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ action('ReportController@customerCreditReport') }}">Customer
                            Credit Report</a></li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">Customer Credit Report</h6>
            </div>
            <div class="sm-content">
                <div class="sm-content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sm-wrapper">
                                <div class="sm-box">
                                    <form action="{{ action('ReportController@customerCreditDetailReport', $customer->id) }}"
                                          class="form-horizontal form-bordered" method="get">

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Date Range</label>
                                            <div class="col-md-9">
                                                <div class="input-group date input-group--style-1" id="">
                                                    <input class="form-control" type="text" name="daterange"
                                                           readonly="true"/>
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
                        <div class="col-lg-12">
                            <div class="sm-wrapper">
                                <div class="sm-box">
                                    <h3>Credit Report Summary</h3>
                                    <table class="table table-striped table-bordered nowrap w-in-100">
                                        <thead>
                                        <tr>
                                            <th>Credit</th>
                                            <th>Receive</th>
                                            <th>Remaining</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="odd gradeX">
                                            <td>{{ $total_credit }}</td>
                                            <td>{{ $total_receivable }}</td>
                                            <td>{{ $total_credit - $total_receivable }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sm-wrapper">
                                <div class="sm-box">
                                    <h3>Receivable Opening</h3>
                                    <table class="table table-striped table-bordered nowrap w-in-100">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Credit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $receivable_openings as $index => $opening )
                                            <tr class="odd gradeX">
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $opening->created_at->toDateString() }}</td>
                                                <td>{{ $opening->balance }}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2" class="text-right"><b>Total</b></td>
                                            <td>{{ $receivable_openings->sum('balance') }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sm-wrapper">
                                <div class="sm-box">
                                    <h3>Sales Credits</h3>
                                    <table class="table table-striped table-bordered nowrap w-in-100">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Credit</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($sales as $index => $sale)
                                            <tr class="odd gradeX">
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $sale->created_at->toDateString() }}</td>
                                                <td>{{ $sale->balance }}</td>
                                                <td>
                                                    <a class="btn btn-primary" href="{{ action("ReportController@saleReportDetail", $sale->id) }}">Check Invoice</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2" class="text-right"><b>Total</b></td>
                                            <td colspan="2" class="text-left">{{ $sale->sum('balance') }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sm-wrapper">
                                <div class="sm-box">
                                    <h3>Receive</h3>
                                    <table class="table table-striped table-bordered nowrap w-in-100">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Receive</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($receivables as $index => $receivable)
                                            <tr class="odd gradeX">
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $receivable->created_at->toDateString() }}</td>
                                                <td>{{ $receivable->amount }}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2" class="text-right"><b>Total</b></td>
                                            <td>{{ $receivables->sum('amount') }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END CONTENT-->

    <script>
        $(function () {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left'
            }, function (start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });
        });
        $(document).ready(function () {
            $('#customer_id').select2();
        });
    </script>

@endsection
