@extends('layouts.app')

@section('content')
    <h1>{{ Auth::user()->name }}'s apartments</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($apartments as $apartment)
                <tr>
                    <th scope="row">{{ $apartment->id }}</th>
                    <td>{{ $apartment->title }}</td>
                    <td>
                        <a href="{{ route('admin.apartments.show', ['apartment' => $apartment]) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('admin.apartments.edit', ['apartment' => $apartment]) }}" class="btn btn-warning">Edit</a>
                        <button class="btn btn-danger btn_delete" data-id="{{ $apartment->slug}}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $apartments->links() }}

    <div>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-info" data-id="{{ $apartment->slug}}">Back to dashboard</a>
    </div>
@endsection
