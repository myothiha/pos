@extends('admin.layouts.back')

@section('title', 'Dashboard')

@section('content')

<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Dashboard</h6>
        </div>
        <!--END BREADCRUMB-->
    </div>
</section>

@endsection
