@extends('admin.layouts.back')

@section('title', 'Create StockIn Data')

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
                            Stock In Form
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
                                                       class="nav-link active text-normal strong-600">Stock In</a>
                                                </li>
                                            </ul>

                                            <div class="search-box" style="margin-top: 22px;">
                                                <div class="container">
                                                    <div class="row">
                                                        <form action="#" class="form-default" id="form">
                                                            <div class="col-lg-2">
                                                                <input id="itemCode" placeholder="Item Code"
                                                                       type="text" class="form-control" name="itemCode">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <input id="name" placeholder="Item Name"
                                                                       type="text" class="form-control" name="itemName">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <select class="form-control" id="type_id"
                                                                        name="type_id">
                                                                    <option value="">Choose Type</option>
                                                                    @foreach($types as $type)
                                                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <select class="form-control" id="category_id"
                                                                        name="category_id">
                                                                    <option value="">Choose Category</option>
                                                                    @foreach($categories as $category)
                                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <button type="submit" class="btn btn-primary"
                                                                        onclick="searchItem()">Submit
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
                                                                        <tbody id="searchResult">

                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <hr>

                                            <form class="form-default" action="{{ action('StockInController@store') }}"
                                                  method="POST">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="voucherNo">Voucher No</label>
                                                            <input id="voucherNo" placeholder="Enter Voucher"
                                                                   type="text" class="form-control" name="voucherNo" value="{{ old('voucherNo') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="suppliers">Supplier</label>
                                                            <select class="form-control" id="suppliers"
                                                                    name="supplier_id">
                                                                @foreach($suppliers as $supplier)
                                                                    <option
                                                                            value="{{ $supplier->id }}" {{ old('supplier_id') == $supplier->id ? "selected" : " " }}>{{ $supplier->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="location_id">Location</label>
                                                            <select class="form-control" id="location_id"
                                                                    name="location_id">
                                                                @foreach($locations as $location)
                                                                    <option
                                                                            value="{{ $location->id }}" {{ old('location_id') == $location->id ? "selected" : " " }}>{{ $location->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active"
                                                         id="tabTwo-1">
                                                        <table class="table table-cart">
                                                            <thead>
                                                            <tr>
                                                                <th class="product-name">Item</th>
                                                                <th class="product-size d-none d-lg-table-cell">
                                                                    Color
                                                                </th>
                                                                <th class="product-size d-none d-lg-table-cell">
                                                                    Category
                                                                </th>
                                                                <th class="product-quanity d-none d-md-table-cell">
                                                                    Quantity
                                                                </th>
                                                                <th width="50px;"></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody id="cardItems">
                                                            @foreach( Cart::instance(\App\Constants\Cart::STOCK_IN)->content() as $key => $item )
                                                                <tr class="cart-item">
                                                                    <td class="product-name">{{ $item->name }}</td>
                                                                    <td class="product-name">{{ $item->options->color }}</td>
                                                                    <td class="product-quanity d-none d-lg-table-cell">
                                                                        {{ $item->model->category->name }}
                                                                    </td>
                                                                    <td class="product-quanity d-none d-lg-table-cell">
                                                                        <input type="text" id="qty{{ $item->id }}"
                                                                               class="form-control"
                                                                               onchange="updateQty('{{ $item->rowId }}', '{{ $item->id }}')"
                                                                               value="{{ $item->qty }}"/>
                                                                    </td>
                                                                    <td class="product-remove">
                                                                        <a href="javascript:void(0)"
                                                                           onclick="removeItem('{{ $item->rowId }}')"
                                                                           class="pl-4">
                                                                            <i class="ion-trash-a"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                            <tbody>
                                                            <tr>
                                                                <td class="product-name" rowspan="3" colspan="4">
                                                                    <textarea name="remark" id="remark"
                                                                              class="form-control"
                                                                              cols="30" rows="3" placeholder="Remark"
                                                                              tabindex="4">{{ old('remark') }}</textarea>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 text-right"
                                                     style="margin-top: 15px;">
                                                    <button class="btn btn-primary"
                                                            type="submit">
                                                        Place Order
                                                    </button>
                                                </div>
                                            </form>
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
        function _(el) {
            return document.getElementById(el);
        }

        function searchItem() {
            event.preventDefault();
            var name = _("name").value;
            var itemCode = _('itemCode').value;
            var type_id = _("type_id").value;
            var category_id = _("category_id").value;
            // alert(file.name+" | "+file.size+"  | "+file.type);

            var formdata = new FormData();
            formdata.append("name", name);
            formdata.append("itemCode", itemCode);
            formdata.append("type_id", type_id);
            formdata.append("category_id", category_id);
            var ajax = new XMLHttpRequest();
            ajax.upload.addEventListener("progress", progressHandler, false);
            ajax.addEventListener("load", searchCompleteHandler, false);
            ajax.addEventListener("error", errorHandler, false);
            ajax.open("POST", "{{ action('AddToCartController@searchItem') }}"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
            //use file_upload_parser.php from above url
            ajax.send(formdata);
        }

        function searchCompleteHandler(event) {
            // console.log(event.target.responseText);
            let items = JSON.parse(event.target.responseText);

            let markUp = '';
            items.forEach(function (item, index) {
                markUp += `
                     <tr>
                        <td>${++index}</td>
                        <td>${item.name}</td>
                        <td>${item.color.name}</td>
                        <td>${item.category.name}</td>
                        <td width="20%">
                        <form action="#" method="Post">
                            <input type="submit" class="btn btn-outline-primary" onclick="addItem(${item.id})" value="Add">
                        </form>
            </td>
        </tr>
`;
                _("searchResult").innerHTML = markUp;
            });
        }

        function addItem($itemId) {
            event.preventDefault();
            var token = "{{ csrf_token() }}";

            var formdata = new FormData();
            formdata.append("_token", token);
            formdata.append("cart", '{{ \App\Constants\Cart::STOCK_IN }}');
            formdata.append("itemId", $itemId);
            var ajax = new XMLHttpRequest();
            ajax.upload.addEventListener("progress", progressHandler, false);
            ajax.addEventListener("load", addCompleteHandler, false);
            ajax.addEventListener("error", errorHandler, false);
            ajax.open("POST", "{{ action('AddToCartController@addItem') }}"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
            //use file_upload_parser.php from above url
            ajax.send(formdata);
        }


        function removeItem(rowId) {
            event.preventDefault();
            var token = "{{ csrf_token() }}";

            var formdata = new FormData();
            formdata.append("_token", token);
            formdata.append("cart", '{{ \App\Constants\Cart::STOCK_IN }}');
            formdata.append("rowId", rowId);
            var ajax = new XMLHttpRequest();
            ajax.upload.addEventListener("progress", progressHandler, false);
            ajax.addEventListener("load", addCompleteHandler, false);
            ajax.addEventListener("error", errorHandler, false);
            ajax.open("POST", "{{ action('AddToCartController@removeItem') }}"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
            //use file_upload_parser.php from above url
            ajax.send(formdata);
        }

        function updateQty(rowId, itemId) {
            var token = "{{ csrf_token() }}";
            var qty = _("qty" + itemId).value;

            var formdata = new FormData();
            formdata.append("_token", token);
            formdata.append("cart", '{{ \App\Constants\Cart::STOCK_IN }}');
            formdata.append("rowId", rowId);
            formdata.append("itemId", itemId);
            formdata.append("qty", qty);
            var ajax = new XMLHttpRequest();
            ajax.upload.addEventListener("progress", progressHandler, false);
            ajax.addEventListener("load", addCompleteHandler, false);
            ajax.addEventListener("error", errorHandler, false);
            ajax.open("POST", "{{ action('AddToCartController@updateItem') }}"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
            //use file_upload_parser.php from above url
            ajax.send(formdata);
        }

        function addCompleteHandler(event) {
            let items = JSON.parse(event.target.responseText);
            console.log(items);

            let markUp = '';
            for (var key in items) {
                let item = items[key];
                markUp += `
                     <tr class="cart-item">
                        <td class="product-name">${item.name}</td>
                        <td class="product-name">${item.options.color}</td>
                        <td class="product-name">${item.options.category}</td>
                        <td class="product-quanity d-none d-lg-table-cell">
                            <input type="text" id="qty${item.id}" onchange="updateQty('${item.rowId}', ${item.id})" class="form-control" value="${item.qty}" />
                        </td>
                        <td class="product-remove">
                            <a href="javascript:void(0)" onclick="removeItem('${item.rowId}')" class="text-right pl-4">
                                <i class="ion-trash-a"></i>
                            </a>
                        </td>
                     </tr>
`;
            }
            _("cardItems").innerHTML = markUp;
        }

        function progressHandler(event) {
            /*_("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
            var percent = (event.loaded / event.total) * 100;
            _("progress").style.width = Math.round(percent) + "%";
            _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";*/
        }

        function errorHandler(event) {
            // _("status").innerHTML = "Upload Failed";
        }


    </script>
@endsection
