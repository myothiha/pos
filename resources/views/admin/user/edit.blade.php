@extends('admin.layouts.back')

@section('title', 'Edit Type User')

@section('content')

    <!--BEGIN CONTENT-->
    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Edit User</a></li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">Edit User</h6>
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

                                    <form class="form-default" action="{{ action('UserController@update', $user->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT">

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input id="name" placeholder="Enter Name"
                                                           type="text" class="form-control" name="name" value="{{ $user->name }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input id="email" placeholder="Enter Email"
                                                           type="text" class="form-control" name="email" value="{{ $user->email }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input id="password" placeholder="Enter Password"
                                                           type="text" class="form-control" name="password" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="password_confirmation">Confirm Password</label>
                                                    <input id="password_confirmation" placeholder="Enter Confirm Password"
                                                           type="text" class="form-control" name="password_confirmation" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="name">Role</label>
                                                    <select class="form-control" required="" tabindex="3" name="role">
                                                        <option value="">
                                                            --None--
                                                        </option>
                                                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : ' ' }}>
                                                            Admin
                                                        </option>
                                                        <option value="sale" {{ $user->role == 'sale' ? 'selected' : ' ' }}>
                                                            Sale
                                                        </option>
                                                        <option value="processing" {{ $user->role == 'processing' ? 'selected' : ' ' }}>
                                                            Processing
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="control-label">Location</label>
                                                    <select class="form-control" required="" tabindex="3" name="location">
                                                        <option value="">
                                                            --None--
                                                        </option>
                                                        @foreach ($locations as $location)
                                                            <option value="{{ $location->id }}" {{ $user->location_id == $location->id ? 'selected' : ' ' }}>
                                                                {{ $location->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
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




