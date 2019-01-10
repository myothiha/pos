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
                                <tr class="odd gradeX">
                                    <td>Trident</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                </tr>
                                <tr class="even gradeC">
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0</td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                </tr>
                                <tr class="odd gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.5</td>
                                    <td>Win 95+</td>
                                    <td>5.5</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                </tr>
                                <tr class="even gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 6</td>
                                    <td>Win 98+</td>
                                    <td>6</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
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

@endsection