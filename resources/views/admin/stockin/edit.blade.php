@extends('admin.layouts.back')

@section('content')

<!--BEGIN CONTENT-->
<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Balance</a></li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Edit Balance</h6>
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
                                                <label for="username">Date</label>
                                                <input id="username" placeholder="Enter Name"
                                                       type="text" class="form-control" name="name">
                                            </div>
                                        </div>
                                    </div>

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
                                        <div class="col-lg-6">
                                            <div class="form-group has-feedback">
                                                <label for="gender">Location ID</label>
                                                <input type="text" id="location_id"
                                                       placeholder="Location ID" class="form-control" name="location_id">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group has-feedback">
                                                <label for="gender">Supplier ID</label>
                                                <input type="text" id="supplier_id"
                                                       placeholder="Supplier ID" class="form-control" name="supplier_id">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="remark">Remark</label>
                                                <input id="remark" placeholder="Enter Remark"
                                                       type="text" class="form-control" name="remark">
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