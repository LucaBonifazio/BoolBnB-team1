@extends('layouts.app')

@section('content')
    <h1>IP Address: {{ $view->IP }}</h1>

    <div class="controls mt-3">
        <a href="{{ route('admin.views.index', ['view' => $view]) }}" class="btn btn-info" data-id="{{ $view->slug}}">Turn back</a>
    </div>
@endsection
