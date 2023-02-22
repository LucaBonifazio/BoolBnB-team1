@extends('layouts.app')

@section('content')
<h1>{{ Auth::user()->name }}'s messages</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Message</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
                <tr>
                    <th scope="row">{{ $message->id }}</th>
                    <td>{{ $message->message }}</td>
                    <td>{{ $message->date }}</td>
                    <td>
                        <a href="{{ route('admin.messages.show', ['message' => $message]) }}" class="btn btn-primary">Show</a>
                        <button class="btn btn-danger btn_delete" data-id="{{ $message->slug}}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $messages->links() }}

    <div>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-info" data-id="{{ $message->slug}}">Back to dashboard</a>
    </div>
@endsection
