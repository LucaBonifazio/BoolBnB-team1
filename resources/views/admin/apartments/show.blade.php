@extends('layouts.app')

@section('content')
    @if ($apartment)
    <div class="row">
            <div class="col">
                <img src="{{ $apartment->picture }}" class="card-img" alt="{{ $apartment->title }}">
            </div>
            <div class="col">
                <h5 class="card-title">Apartment name: {{ $apartment->title }}</h5>
                <div class="card-text">Rooms: {{ $apartment->n_rooms }}</div>
                <div class="card-text">Beds: {{ $apartment->n_beds }}</div>
                <div class="card-text">Bathrooms: {{ $apartment->n_bathrooms }}</div>
                <div class="card-text">Mq: {{ $apartment->square_meters }}</div>
                <div class="card-text">Latitude: {{ $apartment->latitude }}</div>
                <div class="card-text">Longitude: {{ $apartment->longitude }}</div>
                <div class="card-text">State: {{ $apartment->state }}</div>
                <div class="card-text">City: {{ $apartment->city }}</div>
                <div class="card-text">Address: {{ $apartment->address }}</div>
                <div class="card-text">Apartment number: {{ $apartment->apartment_number }}</div>
            </div>
        @else
            <div>
                <img class="d-flex m-auto" src="https://media.tenor.com/OTzJy4d4xGMAAAAC/computer-stick-man.gif" alt="gif">
            </div>
            @endif
    </div>

    <div class="controls mt-3">
        <a href="{{ route('admin.apartments.edit', ['apartment' => $apartment]) }}" class="btn btn-warning">Edit</a>
        <button class="btn btn-danger btn_delete" data-id="{{ $apartment->slug}}">Delete</button>
        <a href="{{ route('admin.apartments.index', ['apartment' => $apartment]) }}" class="btn btn-info" data-id="{{ $apartment->slug}}">Turn back</a>
    </div>

    @include('admin.partials.delete_confirmation', [
        'delete_name' => 'apartment',
    ])
@endsection
