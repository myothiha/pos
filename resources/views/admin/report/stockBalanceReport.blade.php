@extends('admin.layouts.back')

@include('admin.layouts.dateRangePicker')

@section('title', 'Stock Balance Report')

@section('content')

<!--BEGIN CONTENT-->
<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader p-b-25">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ action('ReportController@stockBalanceReport') }}">Stock Balance Report</a></li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Stock Balance Report</h6>
        </div>
        <div class="sm-content">
            <div class="sm-content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper">
                            <div class="sm-box">
                                <form action="{{ action('ReportController@stockBalanceReport') }}" class="form-default" id="form" method="get">
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
                                @include('admin._partials.pagination', ['collection' => $stocks])
                                <table class="table table-striped table-bordered nowrap w-in-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Location</th>
                                        <th>Item</th>
                                        <th>Color</th>
                                        <th>Quantity</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $stocks as $index => $stock )
                                        <tr class="odd gradeX">
                                            <td>{{ ++$index }}</td>
                                            <td>{{ $stock->location->name }}</td>
                                            <td>{{ $stock->item->name }}</td>
                                            <td>{{ $stock->item->color->name }}</td>
                                            <td>{{ $stock->quantity }}</td>
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
