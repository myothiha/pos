@extends('admin.layouts.back')

@section('content')

    <!--BEGIN CONTENT-->
    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">View Reveiveable</a></li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">View Reveiveable</h6>
            </div>
            <!--END BREADCRUMB-->
            <div>
                <a href="{{ action('ReceivableOpeningController@create') }}"
                   class="btn btn-wd btn-outline-primary m-t-5">
                    Create Reveiveable
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
                                    <table id="data-table" class="table table-striped table-bordered nowrap w-in-100">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Location</th>
                                            <th>Customer</th>
                                            <th>Balance</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $receivableOpenings as $index => $receivable )
                                            <tr class="odd gradeX">
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $receivable->created_at }}</td>
                                                <td>{{ $receivable->location->name }}</td>
                                                <td>{{ $receivable->customer->name }}</td>
                                                <td>{{ $receivable->balance }}</td>
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
