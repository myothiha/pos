@extends('admin.layouts.back')

@section('content')

<!--BEGIN CONTENT-->
<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Sale</a></li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Edit Sale</h6>
        </div>
        <!--END BREADCRUMB-->

        <!--BEGIN PAGE CONTENT-->
        <div class="sm-content">
            <div class="sm-content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
                            <div class="sm-box">

                                <form class="form-default" >
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input id="date" placeholder="Enter Name"
                                                       type="text" class="form-control" name="date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="employee_id">Employee ID</label>
                                                <input id="employee_id" placeholder="Enter Employee ID"
                                                       type="text" class="form-control" name="employee_id">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="issue_id">Issue ID</label>
                                                <input id="issue_id" placeholder="Enter Issue ID"
                                                       type="text" class="form-control" name="issue_id">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="accept_qty">Accept Quantity</label>
                                                <input id="accept_qty" placeholder="Enter Accept Quantity"
                                                       type="text" class="form-control" name="accept_qty">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="reject_qty">Reject Quantity</label>
                                                <input id="reject_qty" placeholder="Enter Reject Quantity"
                                                       type="text" class="form-control" name="reject_qty">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row m-t-20">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END PAGE CONTENT-->
    </div>
</section>
<!--END CONTENT-->

@endsection