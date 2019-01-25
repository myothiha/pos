@extends('admin.layouts.back')

@include('admin.layouts.dateRangePicker')

@section('title', 'Customer Credit Report')

@section('content')

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
                                    <form action="{{ action('ReportController@customerCreditReport') }}"
                                          class="form-horizontal form-bordered" method="get">

                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Customers </label>
                                            <div class="col-md-8">
                                                <div class="input-group date input-group--style-1"
                                                     id="default-daterange">
                                                    <select name="customer_id" class="form-control" id="customer_id">
                                                        <option value="">Select Customer</option>
                                                        @foreach( $allCustomers as $customer)
                                                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                                        @endforeach
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
                                            <th>Customer</th>
                                            <th>Credit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($customers as $index => $customer)
                                            <tr class="odd gradeX">
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $customer->name }}</td>
                                                <td>{{ $customer->creditBalance->amount }}</td>
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
