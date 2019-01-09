@extends('admin.layouts.back')

@section('content')

    <!--BEGIN CONTENT-->
    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">View Issue</a></li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">View Issue</h6>
            </div>
            <!--END BREADCRUMB-->
            <div>

                <hr>
            </div>
            <!--BEGIN PAGE CONTENT-->
            <div class="sm-content">
                <div class="sm-content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sm-wrapper">
                                <div class="sm-box">
                                    <table id="data-table" class="table table-striped table-bordered nowrap w-in-100">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Employee</th>
                                            <th>Item</th>
                                            <th>Qty</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $issues as $key => $issue )
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $issue->employee->name }}</td>
                                            <td>{{ $issue->item->name }}</td>
                                            <td>{{ $issue->quantity }}</td>
                                            <td>
                                                <a class="btn btn-primary"
                                                   href="{{ action('InspectController@create', $issue->id) }}">Inspect</a>
                                            </td>
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