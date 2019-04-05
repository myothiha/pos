@extends('admin.layouts.back')

@section('title', 'View Stock Opening Data')

@section('content')
    <!--BEGIN CONTENT-->
    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">View Stock Opening</a></li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">View Stock Opening</h6>
            </div>
            <!--END BREADCRUMB-->
            <div>
                <a href="{{ action('StockOpeningController@getItem') }}" class="btn btn-wd btn-outline-primary m-t-5">
                    New Stock Opening
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
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1; ?>
                                        @foreach($stockOpenings as $stockOpening)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $stockOpening->created_at->toDateString() }}</td>
                                                <td>{{ $stockOpening->location->name }}</td>
                                                <td>{{ $stockOpening->item->name }}</td>
                                                <td>{{ $stockOpening->quantity }}</td>
                                                <td width="20%"> Coming Soon
                                                    <form
                                                        action="{{ action('StockOpeningController@destroy', $stockOpening->id) }}"
                                                        method="Post">
                                                        <input type="hidden" name="_method" value="delete">
                                                        {{ csrf_field() }}

{{--                                                        <input type="submit" class="btn btn-outline-danger" value="Delete">--}}
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
