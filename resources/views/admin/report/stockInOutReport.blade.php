@extends('admin.layouts.back')

@include('admin.layouts.dateRangePicker')

@section('title', 'Stock In/Out Report')

@section('content')

<!--BEGIN CONTENT-->
<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader p-b-25">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ action('ReportController@stockInOutReport') }}">Stock In/Out Report</a></li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Stock In/Out Report</h6>
        </div>
        <!--END BREADCRUMB-->
    </div>
    <div class="sm-content">
        <div class="sm-content-box">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sm-wrapper">
                        <div class="sm-box">
                            <form action="{{ action('ReportController@stockInOutReport') }}" class="form-horizontal form-bordered" method="post">

                                @csrf

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Date Range</label>
                                    <div class="col-md-8">
                                        <div class="input-group date input-group--style-1" id="default-daterange">
                                            <input class="form-control" type="text" name="daterange" readonly="true" />
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
                                    <th>Location</th>
                                    <th>Item</th>
                                    <th>In</th>
                                    <th>Out</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd gradeX">
                                    <td>Trident</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Internet Explorer 4.0</td>
                                </tr>
                                <tr class="even gradeC">
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0</td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Internet Explorer 4.0</td>
                                </tr>
                                <tr class="odd gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.5</td>
                                    <td>Win 95+</td>
                                    <td>5.5</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Internet Explorer 4.0</td>
                                </tr>
                                <tr class="even gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 6</td>
                                    <td>Win 98+</td>
                                    <td>6</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Internet Explorer 4.0</td>
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
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>

@endsection
