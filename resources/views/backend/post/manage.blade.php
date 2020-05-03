@extends('backend.components.layout')

@section('header')
    @includeIf('admin.header')
@endsection

@section('content')

    @includeIf('message.message')

    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <h3>Manage Posts</h3>
            </div>
            <div class="float-right">
                <a href="{{ route('posts.create') }}" class="btn btn-info">New Post</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Sl No</th>
                    <th>Category</th>
                    <th>Username</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->title }}</td>
                        <td style="color: {{ $post->status ==='draft' ? 'red':'green' }}">{{ $post->status === 'draft' ? 'Draft':'Published' }}</td>
                        <td>
                            <a href="{{ route('posts.edit', [$post->id]) }}">Edit</a>
                            <form action="{{ route('posts.delete', $post->id) }}" method="POST" onclick="return confirm('...............?')">
                                @csrf
                                @method("DELETE")
                                <button type="submit" >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $posts->links() }}
            <p>Showing {{ $posts->firstItem() }} to {{ $posts->lastItem() }} of {{ $posts->total() }} entries</p>

        </div>
    </div>
    <br>
    <br>
@endsection

@section('footer')
    @includeIf('components.footer')
@endsection
