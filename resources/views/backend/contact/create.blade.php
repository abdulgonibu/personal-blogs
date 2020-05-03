@extends('backend.components.layout')

@section('header')
    @includeIf('admin.header')
@endsection

@section('content')

    @includeIf('message.message')

    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <h3>Add Post</h3>
            </div>
            <div class="float-right">
                <a href="{{ route('posts.index') }}" class="btn btn-info">Manage Posts</a>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Post title">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category_id" id="category" class="form-control">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="post_content"></textarea>
                </div>
                <div class="form-group">
                    <label for="thumbnail">Image</label>
                    <input type="file" id="thumbnail" name="thumbnail">
                </div>

                <div class="form-group">
                    <label for="category">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="published">Published</option>
                        <option value="draft">Draft</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add Post</button>
            </form>
        </div>
    </div>
    <br>
    <br>
@endsection

@section('footer')
    @includeIf('components.footer')
@endsection
