@extends('layouts.app')

@section('content')
<h1>{{ Auth::user()->name }}'s views</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID apartment</th>
                <th scope="col">IP address</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($views as $view)
                <tr>
                    <th scope="row">{{ $view->apartment_id }}</th>
                    <td>{{ $view->IP }}</td>
                    <td>
                        <a href="{{ route('admin.apartments.show', ['apartment' => $view->apartment ]) }}" class="btn btn-primary">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $views->links() }}

    <div>
        <a href="{{ route('admin.apartments.index') }}" class="btn btn-info">Back to apartment</a>
    </div>
@endsection
