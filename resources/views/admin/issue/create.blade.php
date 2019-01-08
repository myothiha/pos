@extends('admin.layouts.back')

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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Issue</a></li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">Issue</h6>
            </div>
            <!--END BREADCRUMB-->

            <!--BEGIN PAGE CONTENT-->
            <div class="sm-content">
                <div class="sm-content-box">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 mt--180">
                            <form class="form-default">
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
                                                        <form action="#" class="form-default" id="form" onsubmit="return false">
                                                            <div class="col-lg-2">
                                                                <input id="itemCode" placeholder="Item Code"
                                                                       type="text" class="form-control" name="itemCode">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <input id="name" placeholder="Item Name"
                                                                       type="text" class="form-control" name="name">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <select class="form-control" id="type_id" name="type_id">
                                                                    @foreach($types as $type)
                                                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <select class="form-control" id="category_id"
                                                                        name="category_id">
                                                                    @foreach($categories as $category)
                                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <button type="submit" class="btn btn-primary" onclick="uploadFile()">Submit
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="sm-content">
                                                <div class="sm-content-box">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="sm-wrapper">
                                                                <table class="table table-striped table-bordered nowrap w-in-100">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Name</th>
                                                                        <th>Remark</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php $no = 1; ?>
                                                                    @foreach($items as $item)
                                                                        <tr>
                                                                            <td>{{ $no++ }}</td>
                                                                            <td>{{ $item->name }}</td>
                                                                            <td>{{ $item->remark }}</td>
                                                                            <td width="20%">
                                                                                <form
                                                                                        action=""
                                                                                        method="Post">
                                                                                    <input type="hidden" name="_method"
                                                                                           value="add">
                                                                                    {{ csrf_field() }}

                                                                                    <input type="submit"
                                                                                           class="btn btn-outline-primary"
                                                                                           value="Add">
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
                                            <hr>

                                                    <div class="row mb-3">
                                                        <div class="col-lg-12"
                                                             style="margin-top: 15px;">
                                                            <button class="btn btn-primary btn-block"
                                                                    type="submit">
                                                                Place Order
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <img alt="" class="m-t-20 w-in-100"
                                                         src="http://via.placeholder.com/848x154">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--END PAGE CONTENT-->
        </div>
    </section>
    <!--END CONTENT-->
@endsection