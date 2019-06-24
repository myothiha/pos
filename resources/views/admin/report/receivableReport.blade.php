@extends('admin.layouts.back')

@include('admin.layouts.dateRangePicker')

@section('title', 'Receivable Reports')

@section('content')

<!--BEGIN CONTENT-->
<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader p-b-25">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ action('ReportController@receivableReport') }}">Receivable Report</a></li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Receivable Report</h6>
        </div>
        <div class="sm-content">
            <div class="sm-content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper">
                            <div class="sm-box">
                                <form action="{{ action('ReportController@receivableReport') }}"
                                      class="form-horizontal form-bordered" method="get">

                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Date Range</label>
                                        <div class="col-md-8">
                                            <div class="input-group date input-group--style-1" id="default-daterange">
                                                <input class="form-control" type="text" name="daterange" readonly="true"/>
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
                                <table class="table table-striped table-bordered nowrap w-in-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Voucher NO</th>
                                        <th>Customer</th>
                                        <th>Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $receivables as $index => $receivable )
                                        <tr class="odd gradeX">
                                            <td>{{ ++$index }}</td>
                                            <td>{{ $receivable->created_at->toDateString() }}</td>
                                            <td>{{ $receivable->voucherNo }}</td>
                                            <td>{{ $receivable->customer->name }}</td>
                                            <td>{{ $receivable->amount }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="4" class="text-right"><b>Total</b></td>
                                        <td><b>{{ $receivables->sum('amount') }}</b></td>
                                    </tr>
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

    <script type="text/javascript">
        $(function () {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left'
            }, function (start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });
        });
    </script>

@endsection
