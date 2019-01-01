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
                    <div class="profile-picture profile-picture--style-2 w-200"
                         style="margin: 0 auto !important;">
                        <img alt="" src="http://via.placeholder.com/128x128" class="img-center">
                        <a href="javascript:void(0)" class="btn-aux">
                            <i class="ion ion-edit"></i>
                        </a>
                    </div>
                    <h2 class="up-header m-b-5 text-white">
                        Andrew Heston
                    </h2>
                    <h6 class="up-sub-header text-white">
                        Product Designer at Facebook
                    </h6>
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
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                                                   class="nav-link active text-normal strong-600">Sale</a>
                                            </li>
                                        </ul>

                                        <div class="search-box" style="margin-top: 22px;">
                                            <div class="container">
                                                <div class="row">
                                                    <form class="form-default">
                                                        <div class="col-lg-2">
                                                            <input id="itemCode" placeholder="Item Code"
                                                       type="text" class="form-control" name="itemCode">
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <input id="name" placeholder="Item Name"
                                                       type="text" class="form-control" name="name">
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="form-control" id="select" name="type_id">
                                                                @foreach($types as $type)
                                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="form-control" id="select" name="category_id">
                                                                @foreach($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="sm-content">
                                            <div class="sm-content-box">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="sm-wrapper">
                                                            <div class="sm-box">
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
                                                                                    <input type="hidden" name="_method" value="add">
                                                                                    {{ csrf_field() }}

                                                                                    <input type="submit" class="btn btn-outline-primary" value="Add">
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

                                        <!-- Tab panes -->
                                        <div class="tab-content">

                                            <div role="tabpanel" class="tab-pane active"
                                                 id="tabTwo-1">
                                                <div class="tab-body">
                                                    <table class="table-cart">
                                                        <thead>
                                                        <tr>
                                                            <th class="product-image">Img</th>
                                                            <th class="product-name">Product</th>
                                                            <th class="product-size d-none d-lg-table-cell">
                                                                Size
                                                            </th>
                                                            <th class="product-price d-none d-lg-table-cell">
                                                                Price
                                                            </th>
                                                            <th class="product-quanity d-none d-md-table-cell">
                                                                Quantity
                                                            </th>
                                                            <th class="product-total">Total</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="cart-item">
                                                            <td class="product-image">
                                                                <a href="javascript:void(0)">
                                                                    <img alt=""
                                                                         src="http://via.placeholder.com/600x600">
                                                                </a>
                                                            </td>

                                                            <td class="product-name">
                                                                Seagate Backup Plus Slim 1TB
                                                                Portable
                                                            </td>

                                                            <td class="product-price d-none d-lg-table-cell">
                                                                $279 USD
                                                            </td>

                                                            <td class="product-quantity d-none d-md-table-cell">
                                                                <div class="input-group input-group--style-2 pr-4"
                                                                     style="width: 130px;">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-number"
                                                                                type="button"
                                                                                data-type="minus"
                                                                                data-field="quantity[1]"
                                                                                disabled="disabled">
                                                                            <i class="ion-minus"></i>
                                                                        </button>
                                                                    </span>
                                                                    <input type="text"
                                                                           name="quantity[1]"
                                                                           class="form-control input-number"
                                                                           placeholder="3" value="1"
                                                                           minlength="1"
                                                                           maxlength="10">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-number"
                                                                                type="button"
                                                                                data-type="plus"
                                                                                data-field="quantity[1]">
                                                                             <i class="ion-plus"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="product-total">
                                                                <span>$279.00 USD</span>
                                                            </td>
                                                            <td class="product-remove">
                                                                <a href="javascript:void(0)"
                                                                   class="text-right pl-4">
                                                                    <i class="ion-trash-a"></i>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <!-- Cart item -->
                                                        <tr class="cart-item">
                                                            <td class="product-image">
                                                                <a href="javascript:void(0)">
                                                                    <img alt=""
                                                                         src="http://via.placeholder.com/600x600">
                                                                </a>
                                                            </td>

                                                            <td class="product-name">
                                                                Amazon Echo - Powered by Dolby
                                                            </td>

                                                            <td class="product-price d-none d-lg-table-cell">
                                                                $578 USD
                                                            </td>

                                                            <td class="product-quantity d-none d-md-table-cell">
                                                                <div class="input-group input-group--style-2 pr-4"
                                                                     style="width: 130px;">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-number"
                                                                                type="button"
                                                                                data-type="minus"
                                                                                data-field="quantity[2]">
                                                                            <i class="ion-minus"></i>
                                                                        </button>
                                                                    </span>
                                                                    <input type="text"
                                                                           name="quantity[2]"
                                                                           class="form-control input-number"
                                                                           placeholder="3" value="2"
                                                                           minlength="1"
                                                                           maxlength="10">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-number"
                                                                                type="button"
                                                                                data-type="plus"
                                                                                data-field="quantity[2]">
                                                                             <i class="ion-plus"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="product-total">
                                                                <span>$1156.00 USD</span>
                                                            </td>
                                                            <td class="product-remove">
                                                                <a href="javascript:void(0)"
                                                                   class="text-right pl-4">
                                                                    <i class="ion-trash-a"></i>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <!-- Cart item -->
                                                        <tr class="cart-item">
                                                            <td class="product-image">
                                                                <a href="javascript:void(0)">
                                                                    <img alt=""
                                                                         src="http://via.placeholder.com/600x600">
                                                                </a>
                                                            </td>

                                                            <td class="product-name">
                                                                Sony MDR-XB450 On-Ear Headphones
                                                            </td>

                                                            <td class="product-price d-none d-lg-table-cell">
                                                                $365 USD
                                                            </td>

                                                            <td class="product-quantity d-none d-md-table-cell">
                                                                <div class="input-group input-group--style-2 pr-4"
                                                                     style="width: 130px;">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-number"
                                                                                type="button"
                                                                                data-type="minus"
                                                                                data-field="quantity[3]"
                                                                                disabled="disabled">
                                                                            <i class="ion-minus"></i>
                                                                        </button>
                                                                    </span>
                                                                    <input type="text"
                                                                           name="quantity[3]"
                                                                           class="form-control input-number"
                                                                           placeholder="3" value="1"
                                                                           minlength="1"
                                                                           maxlength="10">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-number"
                                                                                type="button"
                                                                                data-type="plus"
                                                                                data-field="quantity[3]">
                                                                             <i class="ion-plus"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="product-total">
                                                                <span>$368.00 USD</span>
                                                            </td>
                                                            <td class="product-remove">
                                                                <a href="javascript:void(0)"
                                                                   class="text-right pl-4">
                                                                    <i class="ion-trash-a"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
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