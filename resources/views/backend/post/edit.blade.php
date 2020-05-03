@extends('backend.components.layout')

@section('header')
    @includeIf('admin.header')
@endsection

@section('content')

    @includeIf('message.message')

    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <h3>Update Post</h3>
            </div>
            <div class="float-right">
                <a href="{{ route('posts.index') }}" class="btn btn-info">Manage Posts</a>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category_id" id="category" class="form-control">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option {{ $category->id == $post->category_id ? 'selected':'' }} value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="post_content">{{ $post->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="thumbnail">Image</label>
                    <input type="file" id="thumbnail" name="thumbnail">
                    <img style="width: 80px;" src="{{ asset('uploads/posts/'.$post->thumbnail) }}" alt="">
                </div>

                <div class="form-group">
                    <label for="category">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option {{ $post->status == 'published' ? 'selected':'' }} value="published">Published</option>
                        <option {{ $post->status == 'draft' ? 'selected':'' }} value="draft">Draft</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update Post</button>
            </form>
        </div>
    </div>
    <br>
    <br>
@endsection

@section('footer')
    @includeIf('components.footer')
@endsection
