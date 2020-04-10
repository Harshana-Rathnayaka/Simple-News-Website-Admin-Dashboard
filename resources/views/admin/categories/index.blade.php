@extends('layouts.admin')
@section('content')

<!-- Page Header-->
<div class="page-header no-margin-bottom">
    <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Categories</h2>
    </div>
</div>
<!-- Breadcrumb-->
<div class="container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
        <li class="breadcrumb-item active">Categories </li>
    </ul>
</div>

<section class="no-padding-top">
    <div class="container-fluid">
        <p>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Add New Category</a>
        </p>
        <div class="row">
            <div class="col-lg-12">
                <div class="block">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-info">#</th>
                                    <th class="text-info">Title</th>
                                    <th class="text-info">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $c)
                                <tr>
                                    <td>{{ $c->id }}</td>
                                    <td>{{ $c->title }}</td>
                                    <td>
                                        <a href="{{ route('admin.categories.edit',$c->id) }}" class="btn btn-info">Edit</a>
                                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                                        <form action="{{ route('admin.categories.destroy',$c->id) }}" method="POST">
                                            @method('DELETE')
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
</section>
@endsection