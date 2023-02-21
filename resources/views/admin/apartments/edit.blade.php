@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('admin.apartments.update', ['apartment' => $apartment]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $apartment->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('title') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"  value="{{ old('slug', $apartment->slug) }}">
            @error('slug')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('slug') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input type="url" class="form-control @error('picture') is-invalid @enderror" id="picture" name="picture" value="{{ old('picture', $apartment->picture) }}">
            @error('picture')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('picture') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
