@extends('admin.layouts.back')

@section('title', 'View Inspect Data')

@section('content')
    <!--BEGIN CONTENT-->
    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">View Inspect</a></li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">View Inspect</h6>
            </div>
            <!--END BREADCRUMB-->
            <div>
                <a href="{{ action('InspectController@getItem') }}" class="btn btn-wd btn-outline-primary m-t-5">
                    New Inspect
                </a>
                <hr>
            </div>
            <!--BEGIN PAGE CONTENT-->
            <div class="sm-content">
                <div class="sm-content-box">
                    @include('admin.errors.error')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sm-wrapper">
                                <div class="sm-box">
                                    <table id="data-table" class="table table-striped table-bordered nowrap w-in-100" data-toggle="dataTable" data-form="deleteForm">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Employee</th>
                                            <th>Item</th>
                                            <th>Accept Quantity</th>
                                            <th>Reject Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1; ?>
                                        @foreach($inspects as $inspect)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $inspect->created_at->toDateString() }}</td>
                                                <td>{{ $inspect->employee->name }}</td>
                                                <td>{{ $inspect->item->name }}</td>
                                                <td>{{ $inspect->acceptQty }}</td>
                                                <td>{{ $inspect->rejectQty }}</td>
                                                <td width="20%">
                                                    <form id="deleteForm"
                                                        action="{{ action('InspectController@destroy', $inspect->id) }}"
                                                        method="Post">
                                                        <input type="hidden" name="_method" value="delete">
                                                        {{ csrf_field() }}
                                                        <input type="submit" id="deleteBtn" class="btn btn-outline-danger" value="Delete">
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

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
