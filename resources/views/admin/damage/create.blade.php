@extends('admin.layouts.back')

@section('title', 'Create Damage Data')

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
                            Damage Form
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
                            <form class="form-default" action="{{ action('DamageController@store', $item->id) }}" method="post" enctype="multipart/form-data">
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
                                                       class="nav-link active text-normal strong-600">Damage</a>
                                                </li>
                                            </ul>
                                            <br>
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group has-feedback">
                                                        <label for="location_id">Location</label>
                                                        <select class="form-control" id="select" name="location_id">
                                                            @foreach($locations as $location)
                                                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group has-feedback">
                                                        <label for="item_id">Item</label>
                                                        <input
                                                               type="text" class="form-control" value="{{ $item->id }}" name="item_id" hidden>
                                                        <input id="item_id"
                                                               type="text" class="form-control" value="{{ $item->name }}" disabled="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="quantity">Item Quantity</label>
                                                        <input id="quantity" placeholder="Enter Item Quantity"
                                                               type="text" class="form-control" name="quantity">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row m-t-20">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
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
