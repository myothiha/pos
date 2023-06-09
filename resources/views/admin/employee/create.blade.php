@extends('admin.layouts.back')

@section('title', 'Create Employee Data')

@section('content')
<!--BEGIN CONTENT-->
<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Create Employee</a></li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Create Employee</h6>
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

                                <form class="form-default" action="{{ action('EmployeeController@store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input id="name" placeholder="Enter Name"
                                                       type="text" class="form-control" name="name" value="{{ old('name') }}">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="control-label">Date of Birth</label>
                                                <div class="input-group date input-group--style-1" id="datepicker-component" data-date-format="dd-mm-yyyy" data-date-start-date="Date.default">
                                                    <input type="date" class="form-control" name="dob" placeholder="Select Date" value="{{ old('dob') }}"><br>
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
                                                    <option {{ old('gender') === "Male" ? "selected" : " " }} value="Male">Male</option>
                                                    <option {{ old('gender') === "Female" ? "selected" : " " }} value="Female">Female</option>
                                                    <option {{ old('gender') === "Other" ? "selected" : " " }} value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group has-feedback">
                                                <label for="phone">Phone</label>
                                                <input type="text" id="phone"
                                                       placeholder="Phone" class="form-control" name="phone" value="{{ old('phone') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <textarea class="form-control" id="Address" rows="3" name="address">{{ old('address') }}</textarea>
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
