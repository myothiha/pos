@extends('admin.layouts.back')

@section('title', 'Edit Employee Data')

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
                @include('admin.errors.error')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
                            <div class="sm-box">

                                <form class="form-default" action="{{ action('EmployeeController@update', $employee->id) }}"
                                  method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT" />

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input id="name" placeholder="Enter Name"
                                                       type="text" class="form-control" name="name" value="{{ $employee->name }}">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="control-label">Date of Birth</label>
                                                <div class="input-group date input-group--style-1" id="datepicker-component" data-date-format="dd-mm-yyyy" data-date-start-date="Date.default">
                                                    <input type="date" class="form-control" name="dob" placeholder="Select Date" value="{{ $employee->dob->toDateString() }}"><br>
                                                    <span class="input-group-addon">
                                                        <i class="ion-ios-calendar-outline"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group has-feedback">
                                                <label for="gender">Gender</label>
                                                <select class="form-control" id="gender" name="gender">
                                                    <option {{ $employee->gender === "Male" ? "selected" : " " }} value="Male">Male</option>
                                                    <option {{ $employee->gender === "Female" ? "selected" : " " }} value="Female">Female</option>
                                                    <option {{ $employee->gender === "Other" ? "selected" : " " }} value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group has-feedback">
                                                <label for="phone">Phone</label>
                                                <input type="text" id="phone"
                                                       placeholder="Phone" class="form-control" name="phone" value="{{ $employee->phone }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <textarea class="form-control" id="Address" rows="3" name="address"> {{ $employee->address }}</textarea>
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
