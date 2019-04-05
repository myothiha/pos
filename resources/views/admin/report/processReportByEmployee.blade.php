@extends('admin.layouts.back')

@include('admin.layouts.dateRangePicker')

@section('title', 'Process Report By Employee')

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
                <li class="breadcrumb-item"><a href="{{ action('ReportController@processReportByEmployee') }}">Process Report By Employee</a></li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Process Report By Employee</h6>
        </div>
        <!--END BREADCRUMB-->
    </div>
    <div class="sm-content">
        <div class="sm-content-box">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sm-wrapper">
                        <div class="sm-box">
                            <form action="{{ action('ReportController@processReportByEmployee') }}" class="form-horizontal form-bordered" method="get">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Date Range</label>
                                    <div class="col-md-9">
                                        <div class="input-group date input-group--style-1" id="default-daterange">
                                            <input class="form-control" type="text" name="daterange" readonly="true" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Employees </label>
                                    <div class="col-md-9">
                                        <div class="input-group date input-group--style-1"
                                             id="default-daterange">
                                            <select name="employee_id" class="form-control" id="customer_id">
                                                <option value="">Select Employee</option>
                                                @foreach( $employees as $employee)
                                                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
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
                            <h3>Issue</h3>
                            <table class="table table-striped table-bordered nowrap w-in-100">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Employee</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Paint Consume</th>
                                    <th>Paint Finished</th>
                                    <th>Liker Consume</th>
                                    <th>Liker Finished</th>
                                    <th>Tinder Comsume</th>
                                    <th>Tinder Finished</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($issues as $index => $issue)
                                    <tr class="odd gradeX">
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $issue->created_at }}</td>
                                        <td>{{ $issue->employee->name }}</td>
                                        <td>{{ $issue->item->name }}</td>
                                        <td>{{ $issue->quantity }}</td>
                                        <td>{{ $issue->paint }}</td>
                                        <td>Comming Soon</td>
                                        <td>{{ $issue->liker }}</td>
                                        <td>Comming Soon</td>
                                        <td>{{ $issue->tinder }}</td>
                                        <td>Comming Soon</td>   
                                    </tr>
                                @endforeach
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
                                    <th>Rejected Quantity</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($inspects as $index => $inspect)
                                    <tr class="odd gradeX">
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $inspect->created_at }}</td>
                                        <td>{{ $inspect->employee->name }}</td>
                                        <td>{{ $inspect->item->name }}</td>
                                        <td>{{ $inspect->acceptQty }}</td>
                                        <td>{{ $inspect->rejectQty }}</td>
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
    $(document).ready(function () {
        $('#customer_id').select2();
    });
</script>
@endsection
