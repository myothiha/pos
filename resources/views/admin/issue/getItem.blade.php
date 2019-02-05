@extends('admin.layouts.back')

@section('title', 'Get Item Data')

@section('plugins')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@endsection

@section('content')

    <!--BEGIN CONTENT-->
    <!--BEGIN CONTENT-->
    <section class="slice-lg page-title border-bottom has-bg-cover bg-size-cover"
             style="background-image: url('http://via.placeholder.com/1980x1322');">
        <div class="bg_source">
            <!-- Gradient overlay -->
            <div class="bg_source_overlay opacity-80" style="
        background:rgba(0,198,255,1);
        background: -moz-linear-gradient(left, rgba(0,198,255,1) 0%, rgba(0,114,255,0.85) 100%);
        background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(0,198,255,1)), color-stop(100%,rgba(0,114,255,0.85)));
        background: -webkit-linear-gradient(left, rgba(0,198,255,1) 0%,rgba(0,114,255,0.85) 100%);
        background: -o-linear-gradient(left, rgba(0,198,255,1) 0%,rgba(0,114,255,0.85) 100%);
        background: -ms-linear-gradient(left, rgba(0,198,255,1) 0%,rgba(0,114,255,0.85) 100%);
        background: linear-gradient(to right, rgba(0,198,255,1) 0%,rgba(0,114,255,0.85) 100%);">
            </div>
            <!--/ Gradient overlay -->
        </div>

        <div class="container mask-container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="up-main-info" style="margin-top: -50px;">
                        <h2 class="up-header m-b-5 text-white">
                            Issue Form
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">E-Commerce Profile v1</li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">E-Commerce Profile v1</h6>
            </div>
            <!--END BREADCRUMB-->

            <!--BEGIN PAGE CONTENT-->
            <div class="sm-content">
                <div class="sm-content-box">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 mt--180">
                            <form class="form-default" action="{{ action('IssueController@searchItems') }}" method="post" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tabs tabs--style-2" role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs justify-content-center"
                                                role="tablist"
                                                style="margin-top: -15px;">
                                                <li class="nav-item" role="presentation">
                                                    <a href="#tabTwo-1"
                                                       role="tab" data-toggle="tab"
                                                       class="nav-link active text-normal strong-600">Issue</a>
                                                </li>
                                            </ul>

                                            <div class="search-box" style="margin-top: 22px;">
                                                <div class="container">
                                                    <div class="row">
                                                            {{ csrf_field() }}
                                                            <div class="col-lg-2">
                                                                <input id="itemCode" placeholder="Item Code"
                                                                       type="text" class="form-control" name="itemCode">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <input id="name" placeholder="Item Name"
                                                                       type="text" class="form-control" name="itemName">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <select class="form-control" id="color"
                                                                        name="color_id">
                                                                    <option value="">Select Color</option>
                                                                    @foreach($colors as $color)
                                                                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <select class="form-control" id="type_id"
                                                                        name="type_id">
                                                                    <option value="">Select Type</option>

                                                                    @foreach($types as $type)
                                                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <select class="form-control" id="category_id"
                                                                        name="category_id">
                                                                    <option value="">Select Category</option>
                                                                    @foreach($categories as $category)
                                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <button type="submit" class="btn btn-primary">Submit
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="sm-content">
                                                <div class="sm-content-box">
                                                    @include('admin.errors.error')
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="sm-wrapper">
                                                                <div class="sm-box">
                                                                    <table id="data-table"
                                                                           class="table table-striped table-bordered nowrap w-in-100">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Name</th>
                                                                            <th>Color</th>
                                                                            <th>Category</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        @if (!empty($items))      
                                                                        <?php $no = 1; ?>
                                                                        @foreach($items as $item)
                                                                            <tr>
                                                                                <td>{{$no++}}</td>
                                                                                <td>{{$item->name}}</td>
                                                                                <td>{{$item->color->name}}</td>
                                                                                <td>{{$item->category->name}}</td>
                                                                                <td width="20%">
                                                                                    <a href="{{ action('IssueController@create', $item->id) }}" class="btn btn-outline-primary">Create Issue</a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                        @endif
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END CONTENT-->
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#customer_id').select2();
        });
    </script>
@endsection
