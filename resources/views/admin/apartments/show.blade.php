@extends('layouts.app')

@section('content')
    @if ($apartment)
        <div class="card text-bg-dark w-75 m-auto">
            <img src="{{ $apartment->picture }}" class="card-img" alt="{{ $apartment->title }}">
            <div class="card-img-overlay">
                <h5 class="card-title">Nome appartamento: {{ $apartment->title }}</h5>
                <div class="card-text">Numero di stanze: {{ $apartment->n_rooms }}</div>
                <div class="card-text">Letti: {{ $apartment->n_beds }}</div>
                <div class="card-text">Bagni: {{ $apartment->n_bathrooms }}</div>
                <div class="card-text">Mq: {{ $apartment->square_metres }}</div>
                <div class="card-text">Latitudine: {{ $apartment->latitude }}</div>
                <div class="card-text">Longitudine: {{ $apartment->longitude }}</div>
                <div class="card-text">Stato: {{ $apartment->state }}</div>
                <div class="card-text">Città: {{ $apartment->city }}</div>
                <div class="card-text">Indirizzo: {{ $apartment->address }}</div>
                <div class="card-text">Numero civico: {{ $apartment->apartment_number }}</div>
            </div>
        </div>
    @else
    <div>
        <img class="d-flex m-auto" src="https://media.tenor.com/OTzJy4d4xGMAAAAC/computer-stick-man.gif" alt="gif">
    </div>
    @endif

    <div class="controls mt-3">
        <a href="{{ route('admin.apartments.edit', ['apartment' => $apartment]) }}" class="btn btn-warning">Edit</a>
        <button class="btn btn-danger btn_delete" data-id="{{ $apartment->slug}}">Delete</button>
        {{-- <a href="{{ route('guest.homepage') }}" class="btn btn-primary" data-id="{{ $apartment->slug}}">Torna alla Homepage</a> --}}
    </div>
@endsection
