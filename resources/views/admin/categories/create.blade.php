@extends('layouts.admin')
@section('content')

<!-- Page Header-->
<div class="page-header no-margin-bottom">
    <div class="container-fluid">
        <h2 class="h5 no-margin-bottom"> Add Category</h2>
    </div>
</div>
<!-- Breadcrumb-->
<div class="container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
        <li class="breadcrumb-item active">Add Category </li>
    </ul>
</div>

<section class="no-padding-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-11">
                <form class="form-horizontal" action="{{ route('admin.categories.store') }}" method="POST">
                    <div class="line"></div>
                    <div class="col-sm-12">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Title</label>
                        <div class="col-sm-12">
                            <input type="text" name="title" placeholder="Enter the title" class="form-control">
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="submit" class="btn btn-outline-success" value="Save">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection