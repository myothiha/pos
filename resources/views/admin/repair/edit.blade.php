@extends('admin.layouts.back')

@section('content')

<!--BEGIN CONTENT-->
<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                                                <label for="reference_id">Reference ID</label>
                                                <input id="reference_id" placeholder="Enter Employee ID"
                                                       type="text" class="form-control" name="reference_id">
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
                                                <label for="item_id">Item ID</label>
                                                <input id="item_id" placeholder="Enter Item ID"
                                                       type="text" class="form-control" name="item_id">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="item_quantity">Item Quantity</label>
                                                <input id="item_quantity" placeholder="Enter Item Quantity"
                                                       type="text" class="form-control" name="item_quantity">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="paint">Paint</label>
                                                <input id="paint" placeholder="Enter Paint"
                                                       type="text" class="form-control" name="paint">
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
                                                <label for="tinder">Tinder</label>
                                                <input id="tinder" placeholder="Enter Tinder"
                                                       type="text" class="form-control" name="tinder">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="liker">Liker</label>
                                                <input type="text" id="remark"
                                                       placeholder="Liker" class="form-control" name="liker">
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