@extends('layouts.app')

@section('content')
<h1>{{ Auth::user()->name }}'s views</h1>
    @if($views->isEmpty())
        <p>No views to display</p>
        <div>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-info">Back to dashboard</a>
        </div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Apartment ID</th>
                    <th scope="col">User</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Views</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($apartments as $apartment)
                    <tr>
                        <th scope="row">{{ $apartment->title }}</th>
                        <td>{{ $apartment->user->name }}</td>
                        <td>{{ $apartment->address }}</td>
                        <td>{{ $apartment->city }}</td>
                        <td>
                            <ul>
                                @foreach ($apartment->views as $view)
                                    <li>IP address: {{ $view->IP }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    @if ($views->isEmpty())
        <p></p>
    @else
        {{ $views->links() }}
        <div>
            <canvas id="myChart"></canvas>
        </div>
        <div>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-info" data-id="{{ $apartment->slug}}">Back to dashboard</a>
        </div>
    @endif


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
    </script>

@endsection
