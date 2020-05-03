@extends('backend.components.layout')

@section('header')
    @includeIf('admin.header')
@endsection

@section('content')

    @includeIf('message.message')

    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <h3>Manage Contact</h3>
            </div>
            <div class="float-right">
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Eamil</th>
                    <th>Message</th>
                </tr>
                @foreach($contact as $row)
                    <tr>
                        <td></td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->message }}</td>
                        <td>
                            <form action="{{ route('posts.delete', $post->id) }}" method="POST" onclick="return confirm('...............?')">
                                @csrf
                                @method("DELETE")
                                <button type="submit" >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $contact->links() }}
            <p>Showing {{ $contact->firstItem() }} to {{ $contact->lastItem() }} of {{ $contact->total() }} entries</p>

        </div>
    </div>
    <br>
    <br>
@endsection

@section('footer')
    @includeIf('components.footer')
@endsection
