@extends('layouts.app')

@section('content')
@if ($message)
    <div class="row">
        <div class="col">
            <div>Message text: {{ $message->message }}</div>
            <div>Date: {{ $message->date }}</div>
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

    @include('admin.partials.delete_confirmation', [
        'delete_name' => 'message',
    ])
@endsection
