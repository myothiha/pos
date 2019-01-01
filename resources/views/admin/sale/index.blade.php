@extends('admin.layouts.back')

@section('content')

<!--BEGIN CONTENT-->
<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Create Sale</a></li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Create Sale</h6>
        </div>
        <!--END BREADCRUMB-->

        <!--BEGIN PAGE CONTENT-->
        <div class="sm-content">
            <div class="sm-content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
                            <div class="sm-box">

                                <form class="form-default" action="" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="voucher_no">Voucher No</label>
                                                <input id="voucher_no" placeholder="Enter Voucher No"
                                                       type="text" class="form-control" name="voucher_no">
                                            </div>
                                        </div>
                                    </div>

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
                                                <label for="process_type">Process Type</label>
                                                <input id="process_type" placeholder="Enter Process Type"
                                                       type="text" class="form-control" name="process_type">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="sale_type">Sale Type</label>
                                                <input id="sale_type" placeholder="Enter Sale Type"
                                                       type="text" class="form-control" name="sale_type">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group has-feedback">
                                                <label for="customer_id">Customer ID</label>
                                                <input type="text" id="customer_id"
                                                       placeholder="Customer ID" class="form-control" name="customer_id">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group has-feedback">
                                                <label for="gender">Location ID</label>
                                                <input type="text" id="location_id"
                                                       placeholder="Location ID" class="form-control" name="location_id">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="total_amount">Total Amount</label>
                                                <input id="total_amount" placeholder="Enter Total Amount"
                                                       type="text" class="form-control" name="total_amount">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="paid">Paid</label>
                                                <input id="paid" placeholder="Enter Paid"
                                                       type="text" class="form-control" name="paid">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="balance">Balance</label>
                                                <input id="balance" placeholder="Enter Balance"
                                                       type="text" class="form-control" name="balance">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group has-feedback">
                                                <label for="remark">Remark</label>
                                                <input type="text" id="remark"
                                                       placeholder="Remark" class="form-control" name="remark">
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