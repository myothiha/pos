@extends('admin.layouts.back')

@section('content')

<!--BEGIN CONTENT-->
<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Create Receivable</a></li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Create Receivable</h6>
        </div>
        <!--END BREADCRUMB-->

        <!--BEGIN PAGE CONTENT-->
        <div class="sm-content">
            <div class="sm-content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
                            <div class="sm-box">

                                <form class="form-default" action="{{ action('ReceivableController@store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <input type="hidden" name="customer_id" value="{{ $customer->id }}">

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="voucherNo">Voucher No</label>
                                                <input id="voucherNo" placeholder="Enter Voucher"
                                                       type="text" class="form-control" name="voucherNo">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="voucherNo">Balance</label>
                                                <input id="voucherNo" placeholder="Enter Voucher"
                                                       type="text" class="form-control" name="balance" value="{{ $customer->creditBalance->amount ?? 0 }}" readonly="true" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <label for="location">Location</label>
                                            <select class="form-control" id="location_id"
                                                        name="location_id">
                                                @foreach($locations as $location)
                                                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="amount">Amount</label>
                                                <input id="amount" placeholder="Enter Amount"
                                                       type="text" class="form-control" name="amount" required>
                                            </div>
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