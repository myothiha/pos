@extends('admin.layouts.back')

@section('title', 'Sale Report Detail')

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
                            StockIn Report Detail
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
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="voucherNo">Voucher No</label>
                                                        <input id="voucherNo" value="{{ $stockIn->voucherNo }}"
                                                               type="text" class="form-control" name="voucherNo" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group has-feedback">
                                                        <label for="suppliers">Supplier</label>
                                                        <input id="voucherNo" value="{{ $supplier->name }}"
                                                               type="text" class="form-control" name="supplier" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group has-feedback">
                                                        <label for="location_id">Location</label>
                                                        <input id="voucherNo" value="{{ $location->name }}"
                                                               type="text" class="form-control" name="location" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active"
                                                     id="tabTwo-1">
                                                    <table class="table">
                                                        <thead>
                                                          <tr>
                                                              <th>#</th>
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
                                                        <tbody>
                                                            <?php $no = 0; ?>
                                                            @foreach( $items as $date => $item )
                                                                <tr class="odd gradeX">
                                                                    <td>{{ ++$no }}</td>
                                                                    <td>{{ $item->name }}</td>
                                                                    <td>{{ $item->color->name }}</td>
                                                                    <td>{{ $item->category->name }}</td>
                                                                    <td>{{ $item->pivot->quantity }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
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
