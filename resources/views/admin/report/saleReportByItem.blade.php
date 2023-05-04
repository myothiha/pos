@extends('admin.layouts.back')

@include('admin.layouts.dateRangePicker')

@section('title', 'Sale Report By Item')

@section('content')

    <!--BEGIN CONTENT-->
    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader p-b-25">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ action('ReportController@saleReportByItem') }}">Sale Report By Item</a></li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">Sale Report By Item</h6>
            </div>
            <!--END BREADCRUMB-->
        </div>
        <div class="sm-content">
            <div class="sm-content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper">
                            <div class="sm-box">
                                <form action="{{ action('ReportController@saleReportByItem') }}" class="form-default" id="form" method="get">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <input id="itemCode" placeholder="Item Code"
                                                   type="text" class="form-control" name="itemCode">
                                        </div>
                                        <div class="col-md-2">
                                            <input id="name" placeholder="Item Name"
                                                   type="text" class="form-control" name="itemName">
                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-control" id="color"
                                                    name="color_id">
                                                <option value="">Select Color</option>
                                                @foreach($colors as $color)
                                                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-control" id="type_id"
                                                    name="type_id">
                                                <option value="">Select Type</option>

                                                @foreach($types as $type)
                                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-control" id="category_id"
                                                    name="category_id">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary" name="search" value="submit"
                                                    onclick="searchItem()">Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    @include('admin.errors.error')
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper">
                            <div class="sm-box">

                                @include('admin._partials.pagination', ['collection' => $items])

                                <table class="table table-striped table-bordered nowrap w-in-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Item</th>
                                        <th>Color</th>
                                        <th>Type</th>
                                        <th>Category</th>
                                        <th>Total Qty</th>
                                        <th>Total Amount</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $items as $index => $item )
                                        <tr class="odd gradeX">
                                            <td>{{ ++$index }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->color->name }}</td>
                                            <td>{{ $item->type->name }}</td>
                                            <td>{{ $item->category->name }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->total }}</td>
                                            <td>
                                                <a href="{{ action('ReportController@saleReportByItemDetail', $item->id) }}" class="btn btn-primary">
                                                    Detail
                                                </a>
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
    </section>
    <!--END CONTENT-->
    <script type="text/javascript">
        $(function () {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left'
            }, function (start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });
        });
    </script>

@endsection
