@extends('admin.layouts.back')

@section('title', 'View Item Data')

@section('content')

<!--BEGIN CONTENT-->
<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">View Item</a></li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">View Item</h6>
        </div>
        <!--END BREADCRUMB-->
		<div>
			<a href="{{ action('ItemController@create') }}" class="btn btn-wd btn-outline-primary m-t-5">
            Create New Item
            </a>
            <hr>
		</div>
        <!--BEGIN PAGE CONTENT-->
        <div class="sm-content">
            <div class="sm-content-box">
                @include('admin.errors.error')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper">
                            <div class="sm-box">
                                <table id="data-table" class="table table-striped table-bordered nowrap w-in-100" data-toggle="dataTable" data-form="deleteForm">
                                    <thead>
                                    <tr>
                                        <th>Item Code</th>
                                        <th>Name</th>
                                        <th>Color</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; ?>
                                    @foreach($items as $item)
                                        <tr>
                                            <td>{{ $item->itemCode }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->color->name }}</td>
                                            <td width="20%">
                                                <form id="deleteForm{{$item->id}}"
                                                    action="{{ action('ItemController@destroy', $item->id) }}"
                                                    method="Post">
                                                    <input type="hidden" name="_method" value="delete">
                                                    {{ csrf_field() }}

                                                    <a class="btn btn-outline-primary"
                                                       href="{{ action('ItemController@edit', $item->id) }}">Edit</a>

                                                    <input type="submit" class="btn btn-outline-danger deleteBtn" value="Delete">
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
        <!--END PAGE CONTENT-->
    </div>
</section>
<!--END CONTENT-->

@endsection
