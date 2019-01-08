@extends('admin.layouts.back')

@section('content')

<!--BEGIN CONTENT-->
<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Employee</a></li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Edit Employee</h6>
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
                                                <label for="gender">Item ID</label>
                                                <input type="text" id="customer_id"
                                                       placeholder="Customer ID" class="form-control" name="customer_id">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="quantity">Quantity</label>
                                                <input id="quantity" placeholder="Enter Quantity"
                                                       type="text" class="form-control" name="quantity">
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