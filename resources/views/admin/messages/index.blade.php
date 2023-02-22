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
@extends('layouts.app')

@section('content')
    @if ($message)
        <div class="card text-bg-dark w-75 m-auto">
            <img src="{{ $message->picture }}" class="card-img" alt="{{ $message->title }}">
            <div class="card-img-overlay">
                <div class="card-text">message text: {{ $message->message }}</div>
                <div class="card-text">Date: {{ $message->date }}</div>
            </div>
        </div>
    @else
    <div>
        <img class="d-flex m-auto" src="https://media.tenor.com/OTzJy4d4xGMAAAAC/computer-stick-man.gif" alt="gif">
    </div>
    @endif

    <div class="controls mt-3">
        <button class="btn btn-danger btn_delete" data-id="{{ $message->slug}}">Delete</button>
        <a href="{{ route('admin.messages.index', ['message' => $message]) }}" class="btn btn-info" data-id="{{ $message->slug}}">Turn back</a>
    </div>
@endsection
