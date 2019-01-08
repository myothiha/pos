@extends('admin.layouts.back')

@section('plugins')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@endsection

@section('content')

    <!--BEGIN CONTENT-->
    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Choose Customer</a></li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">Choose Customer</h6>
            </div>
            <!--END BREADCRUMB-->

            <!--BEGIN PAGE CONTENT-->
            <div class="sm-content">
                <div class="sm-content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
                                <div class="sm-box">

                                    <form class="form-default" action="{{ action('ReceivableController@create') }}" method="get" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-6">
                                                <select class="form-control" id="customer_id"
                                                        name="customer_id">
                                                    @foreach($customers as $customer)
                                                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="row m-t-20">
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>

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

@section('script')
    <script>
        $(document).ready(function() {
            $('#customer_id').select2();
        });
    </script>
@endsection