@extends('admin.layouts.back')

@section('title', 'View Transfer Data')

@section('content')
    <!--BEGIN CONTENT-->
    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">View Transfer</a></li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">View Transfer</h6>
            </div>
            <!--END BREADCRUMB-->
            <div>
                <a href="{{ action('TransferController@create') }}" class="btn btn-wd btn-outline-primary m-t-5">
                    New Transfer
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
                                            <th>Voucher No</th>
                                            <th>Location</th>
                                            <th>Total Quantity</th>
                                            <th>Remark</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1; ?>
                                        @foreach($transfers as $transfer)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $transfer->created_at->toDateString() }}</td>
                                                <td>{{ $transfer->voucherNo }}</td>
                                                <td>{{ $transfer->location->name }}</td>
                                                <td>{{ $transfer->quantity }}</td>
                                                <td>{{ $transfer->remark }}</td>
                                                <td width="20%">
                                                    <form
                                                        action="{{ action('TransferController@destroy', $transfer->id) }}"
                                                        method="Post">
                                                        <input type="hidden" name="_method" value="delete">
                                                        {{ csrf_field() }}
                                                        <a class="btn btn-primary" href="{{ action('TransferController@show', $transfer->id) }}">Detail</a>

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
