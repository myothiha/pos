@extends('admin.layouts.back')

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
                            Sale Form
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
                                                        <form action="#" class="form-default" id="form">
                                                            <div class="col-lg-2">
                                                                <input id="itemCode" placeholder="Item Code"
                                                                       type="text" class="form-control" name="itemCode">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <input id="name" placeholder="Item Name"
                                                                       type="text" class="form-control" name="name">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <select class="form-control" id="type_id"
                                                                        name="type_id">
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

                                            <form class="form-default" action="{{ action('SaleController@store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <h3>Sale Form</h3>
                                                <hr class="m-t-0">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="voucherNo">Voucher No</label>
                                                            <input id="voucherNo" placeholder="Enter Voucher"
                                                                   type="text" class="form-control" name="voucherNo" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="saleType">Sale Type</label>
                                                            <select class="form-control" id="saleType" name="saleType" onchange="javascript:changeType()">
                                                                <option value="{{ \App\Constants::CASH_DOWN }}" selected>Cash Down</option>
                                                                <option value="{{ \App\Constants::CREDIT }}">Credit</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="customers">Customer</label>
                                                            <select class="form-control" id="customer_id" name="customer_id">
                                                                @foreach($customers as $customer)
                                                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
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
                                                                {{--<th class="product-size d-none d-lg-table-cell">
                                                                    Category
                                                                </th>--}}
                                                                <th class="product-price d-none d-md-table-cell">
                                                                    Price
                                                                </th>
                                                                <th class="product-quanity d-none d-md-table-cell">
                                                                    Quantity
                                                                </th>
                                                                <th class="product-total">Total</th>
                                                                <th width="50px;"></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody id="cardItems">
                                                            @foreach( Cart::instance(\App\Constants\Cart::SALE)->content() as $key => $item )
                                                                <tr class="cart-item">
                                                                    <td class="product-name">{{ $item->name }}</td>
                                                                    <td class="product-name">{{ $item->options->color }}
                                                                    </td>
                                                                    <td class="product-quanity d-none d-lg-table-cell">
                                                                        <input type="text" id="price{{ $item->id }}"
                                                                               class="form-control"
                                                                               onchange="updatePrice('{{ $item->rowId }}', '{{ $item->id }}')"
                                                                               value="{{ $item->price }}"/>
                                                                    </td>

                                                                    <td class="product-quanity d-none d-lg-table-cell">
                                                                        <input type="text" id="qty{{ $item->id }}"
                                                                               class="form-control"
                                                                               onchange="updateQty('{{ $item->rowId }}', '{{ $item->id }}')"
                                                                               value="{{ $item->qty }}"/>
                                                                    </td>
                                                                    <td class="product-total">
                                                                        <span>{{ $item->qty * $item->price }} MMK</span>
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
                                                                <td class="product-name" rowspan="3" colspan="3">
                                                                    <textarea name="remark" id="remark"
                                                                              class="form-control"
                                                                              cols="30" rows="3" placeholder="Remark"
                                                                              tabindex="4"></textarea></td>
                                                                <td class="product-list text-right"><label for="paid">Paid</label></td>
                                                                <td class="product-quanity d-none d-lg-table-cell">
                                                                    <input type="text" id="paid" class="form-control" name="paid" value="{{ Cart::total(0) }}" readonly=true onchange="updateBalance()" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="product-list text-right">Discount (0%)</td>
                                                                <td class="product-total">
                                                                    <span id="discount"> 0 MMK</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="product-list text-right">Balance</td>
                                                                <td class="product-total">
                                                                    <input type="hidden" id="balance" class="form-control" name="balance" value="0"/>
                                                                    <span id="balance_amount"> 0 MMK</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="product-list text-right" colspan="4">
                                                                    Total
                                                                </td>
                                                                <td class="product-total">
                                                                    <input type="hidden" id="total" class="form-control" name="total" value="{{ Cart::total(0) }}"/>
                                                                    <span id="total_price">{{ Cart::total(0) }} MMK</span>
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
        $(document).ready(function() {
            $('#customer_id').select2();
        });

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
            formdata.append("itemId", $itemId);
            formdata.append("cart", '{{ \App\Constants\Cart::SALE }}');
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
            formdata.append("rowId", rowId);
            formdata.append("cart", '{{ \App\Constants\Cart::SALE }}');
            var ajax = new XMLHttpRequest();
            ajax.upload.addEventListener("progress", progressHandler, false);
            ajax.addEventListener("load", addCompleteHandler, false);
            ajax.addEventListener("error", errorHandler, false);
            ajax.open("POST", "{{ action('AddToCartController@removeItem') }}"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
            //use file_upload_parser.php from above url
            ajax.send(formdata);
        }

        function updatePrice(rowId, itemId) {
            var token = "{{ csrf_token() }}";
            var price = _("price" + itemId).value;

            var formdata = new FormData();
            formdata.append("_token", token);
            formdata.append("rowId", rowId);
            formdata.append("cart", '{{ \App\Constants\Cart::SALE }}');
            formdata.append("itemId", itemId);
            formdata.append("price", price);
            var ajax = new XMLHttpRequest();
            ajax.upload.addEventListener("progress", progressHandler, false);
            ajax.addEventListener("load", addCompleteHandler, false);
            ajax.addEventListener("error", errorHandler, false);
            ajax.open("POST", "{{ action('AddToCartController@updateItem') }}"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
            //use file_upload_parser.php from above url
            ajax.send(formdata);
        }

        function updateQty(rowId, itemId) {
            var token = "{{ csrf_token() }}";
            var qty = _("qty" + itemId).value;

            var formdata = new FormData();
            formdata.append("_token", token);
            formdata.append("cart", '{{ \App\Constants\Cart::SALE }}');
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

        function changeType()
        {
            let saleType = _("saleType").value;

            if (saleType === "{{ \App\Constants::CASH_DOWN }}") {
                let total = _("total").value;
                _("paid").readOnly = true;
                _("paid").value = total;
                updateBalance();
            } else {
                _("paid").readOnly = false;
            }
        }

        function updateBalance()
        {
            let paid = _("paid").value;
            let total = _("total").value;
            let balance = total - paid;
            setBalanceAmount(balance);
        }

        function addCompleteHandler(event) {
            let items = JSON.parse(event.target.responseText);
            // console.log(items);

            let markUp = '';
            let total = 0;
            for (var key in items) {
                let item = items[key];
                let subTotal = item.price * item.qty;
                total += subTotal;
                markUp += `
                     <tr class="cart-item">
                        <td class="product-name">${item.name}</td>
                        <td class="product-name">${item.options.color}</td>
                        <td class="product-quanity d-none d-lg-table-cell">
                            <input type="text" id="price${item.id}" onchange="updatePrice('${item.rowId}', ${item.id})" value="${item.price}"
                            class="form-control"/>
                        </td>
                        <td class="product-quanity d-none d-lg-table-cell">
                            <input type="text" id="qty${item.id}" onchange="updateQty('${item.rowId}', ${item.id})" class="form-control" value="${item.qty}" />
                        </td>
                        <td class="product-total"><span>$ ${subTotal} USD</span></td>
                        <td class="product-remove">
                            <a href="javascript:void(0)" onclick="removeItem('${item.rowId}')" class="text-right pl-4">
                                <i class="ion-trash-a"></i>
                            </a>
                        </td>
                     </tr>
`;
            }
            _("cardItems").innerHTML = markUp;
            setTotalAmount(total);

            let saleType = _("saleType").value;
            if( saleType === "{{ \App\Constants::CASH_DOWN }}" )
            {
                _("paid").value = total;
            }

            let paid = _("paid").value;
            let balance = total - paid;
            updateBalance(balance);
        }

        function setTotalAmount(total) {
            _("total_price").innerHTML = total + " MMK";
            _("total").value = total;
        }

        function setBalanceAmount(balance) {
            _("balance_amount").innerHTML = balance + " MMK";
            _("balance").value = balance;
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
