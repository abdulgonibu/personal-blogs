@extends('backend.components.layout')

@section('title')
    Update Category | Blog
@endsection
@section('content')

    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Update Category</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInRight">
        <div class="col-sm-8 col-sm-offset-2">
            @includeIf('message.message')
            <div class="panel b-primary bt-md">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Update Category</h3>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('categories.manage') }}" class="btn btn-primary pull-right">Manage</a>
                        </div>
                    </div>
                    <hr style="margin-top: 0">
                    <form class="form-horizontal" method="POST" action="{{ route('categories.update') }}">
                        @csrf
                        @method('put')
                        <input type="hidden" name="id" value="{{ $category->id }}">
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

@endsection
