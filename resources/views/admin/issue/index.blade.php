@extends('admin.layouts.back')

@section('title', 'View Issue Data')

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
                <a href="{{ action('IssueController@getItem') }}" class="btn btn-wd btn-outline-primary m-t-5">
                    New Issue
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
                                            <th>Employee</th>
                                            <th>Item</th>
                                            <th>Color</th>
                                            <th>Paint Consume</th>
                                            <th>Liker Consume</th>
                                            <th>Tinder Consume</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1; ?>
                                        @foreach($issues as $issue)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $issue->created_at->toDateString() }}</td>
                                                <td>{{ $issue->employee->name }}</td>
                                                <td>{{ $issue->item->name }}</td>
                                                <td>{{ $issue->item->color->name }}</td>
                                                <td>{{ $issue->paint }}</td>
                                                <td>{{ $issue->liker }}</td>
                                                <td>{{ $issue->tinder }}</td>
                                                <td width="20%">
                                                    <form
                                                        action="{{ action('IssueController@destroy', $issue->id) }}"
                                                        method="Post">
                                                        <input type="hidden" name="_method" value="delete">
                                                        {{ csrf_field() }}
                                                        <a class="btn btn-outline-primary"
                                                           href="{{ action("IssueController@edit", $issue->id) }}">Edit</a>

                                                        <input type="submit" class="btn btn-outline-danger" value="Delete">
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
