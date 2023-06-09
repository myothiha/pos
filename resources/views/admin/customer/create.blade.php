@extends('admin.layouts.back')

@section('title', 'Create Customer Data')

@section('content')

<!--BEGIN CONTENT-->
<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Create Customer</a></li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Create Customer</h6>
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

                                <form class="form-default" action="{{ action('CustomerController@store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="username">Name</label>
                                                <input id="username" placeholder="Enter Name"
                                                       type="text" class="form-control" name="name" value="{{ old('name') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
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
