@extends('layouts.admin')
@section('content')

<!-- Page Header-->
<div class="page-header no-margin-bottom">
    <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">News</h2>
    </div>
</div>
<!-- Breadcrumb-->
<div class="container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
        <li class="breadcrumb-item active">News </li>
    </ul>
</div>

<section class="no-padding-top">
    <div class="container-fluid">
        <p>
            <a href="{{ route('admin.news.create') }}" class="btn btn-success">Add New News</a>
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
                                    <th class="text-info">Author</th>
                                    <th class="text-info">Category</th>
                                    <th class="text-info">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($news))
                                @foreach($news as $n)
                                <tr>
                                    <td>{{ $n->id }}</td>
                                    <td>{{ $n->title }}</td>
                                    <td>{{ $n->author }}</td>
                                    <td>{{ $n->category->title }}</td>

                                    <td>
                                        <a href="{{ route('admin.news.edit',$n->id) }}" class="btn btn-info">Edit</a>
                                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                                        <form action="{{ route('admin.news.destroy',$n->id) }}" method="POST">
                                            @method('DELETE')
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5">No News Found</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        {{ $news->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection