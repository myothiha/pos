@extends('admin.layouts.back')

@include('admin.layouts.dateRangePicker')

@section('title', 'Process Daily Report')

@section('content')
    <!--BEGIN CONTENT-->
    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader p-b-25">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ action('ReportController@processReportDaily') }}">Process
                            Report Daily</a></li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">Process Report Daily</h6>
            </div>
            <!--END BREADCRUMB-->
        </div>
        <div class="sm-content">
            <div class="sm-content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper">
                            <div class="sm-box">
                                <form action="{{ action('ReportController@processReportDaily') }}"
                                      class="form-horizontal form-bordered" method="get">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Date Filter</label>
                                        <div class="col-md-9">
                                            <div class="input-group date input-group--style-1" id="date">
                                                <input class="form-control" type="date" name="date" value="{{ \Carbon\Carbon::now()->toDateString() }}"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="item_id">Items </label>
                                        <div class="col-md-9">
                                            <div class="input-group input-group--style-1">
                                                <select name="item_id" class="form-control" id="item_id">
                                                    <option value="">Select Item</option>
                                                    @foreach( $items as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
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

                <div class="container">
                    @include('admin.errors.error')
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper">
                            <div class="sm-box">
                                <h3>Issue</h3>
                                <table class="table table-striped table-bordered nowrap w-in-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Employee</th>
                                        <th>Item</th>
                                        <th>Paint Finished</th>
                                        <th>Liker FInished</th>
                                        <th>Tinder FInished</th>
                                        <th>Quantity</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($issues as $index => $issue)
                                        <tr class="odd gradeX">
                                            <td>{{ ++$index }}</td>
                                            <td>{{ $issue->created_at->todatestring() }}</td>
                                            <td>{{ $issue->employee->name }}</td>
                                            <td>{{ $issue->item->name }}</td>
                                            <td>{{ $issue->paint }}</td>
                                            <td>{{ $issue->liker }}</td>
                                            <td>{{ $issue->tinder }}</td>
                                            <td>{{ $issue->quantity }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="7" class="text-right"><b>Total</b></td>
                                        <td><b>{{ $issues->sum('quantity') }}</b></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <hr>

                                <h3>Repairs</h3>
                                <table class="table table-striped table-bordered nowrap w-in-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Employee</th>
                                        <th>Item</th>
                                        <th>Paint Finished</th>
                                        <th>Liker FInished</th>
                                        <th>Tinder FInished</th>
                                        <th>Quantity</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($repairs as $index => $repair)
                                        <tr class="odd gradeX">
                                            <td>{{ ++$index }}</td>
                                            <td>{{ $repair->created_at->todatestring() }}</td>
                                            <td>{{ $repair->employee->name }}</td>
                                            <td>{{ $repair->item->name }}</td>
                                            <td>{{ $repair->paint }}</td>
                                            <td>{{ $repair->liker }}</td>
                                            <td>{{ $repair->tinder }}</td>
                                            <td>{{ $repair->quantity }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="7" class="text-right"><b>Total</b></td>
                                        <td><b>{{ $repairs->sum('quantity') }}</b></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <hr>


                                <h3>Inspect</h3>
                                <table class="table table-striped table-bordered nowrap w-in-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Employee</th>
                                        <th>Item</th>
                                        <th>Accepted Quantity</th>
                                        <th>Reject Quantity</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($inspects as $index => $inspect)
                                        <tr class="odd gradeX">
                                            <td>{{ ++$index }}</td>
                                            <td>{{ $inspect->created_at->toDateString() }}</td>
                                            <td>{{ $inspect->employee->name }}</td>
                                            <td>{{ $inspect->item->name }}</td>
                                            <td>{{ $inspect->acceptQty }}</td>
                                            <td>{{ $inspect->rejectQty }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="4" class="text-right"><b>Total</b></td>
                                        <td><b>{{ $inspects->sum('acceptQty') }}</b></td>
                                        <td><b>{{ $inspects->sum('rejectQty') }}</b></td>
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
        $(document).ready(function () {
            $('#item_id').select2();
        });
    </script>

@endsection
