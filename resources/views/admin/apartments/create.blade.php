
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

    <form method="post" action="{{ route('admin.apartments.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
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
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"  value="{{ old('slug') }}">
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
            <label for="picture" class="form-label">Pictures</label>
            <input type="url" class="form-control @error('picture') is-invalid @enderror" id="picture" name="picture" value="{{ old('picture') }}">
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

        <div class="mb-3">
            <label for="uploaded_img" class="form-label">Images</label>
            <input class="form-control @error('uploaded_img') is-invalid @enderror" type="file" id="uploaded_img" name="uploaded_img">
            <div class="invalid-feedback">
                @error('uploaded_img')
                    <ul>
                        @foreach ($errors->get('uploaded_img') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="n_rooms" class="form-label">Rooms</label>
            <input type="number" class="form-control @error('n_rooms') is-invalid @enderror" id="n_rooms" name="n_rooms"  value="{{ old('n_rooms') }}"  min="1" max="10">
            @error('n_rooms')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('n_rooms') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="n_beds" class="form-label">Beds</label>
            <input type="number" class="form-control @error('n_beds') is-invalid @enderror" id="n_beds" name="n_beds"  value="{{ old('n_beds') }}"  min="1" max="10">
            @error('n_beds')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('n_beds') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="n_bathrooms" class="form-label">Baths</label>
            <input type="number" class="form-control @error('n_bathrooms') is-invalid @enderror" id="n_bathrooms" name="n_bathrooms"  value="{{ old('n_bathrooms') }}"  min="1" max="10">
            @error('n_bathrooms')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('n_bathrooms') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="square_metres" class="form-label">Squeare Meters</label>
            <input type="number" class="form-control @error('square_metres') is-invalid @enderror" id="square_metres" name="square_metres"  value="{{ old('square_metres') }}"  min="50" max="1000">
            @error('square_metres')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('square_metres') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="state" class="form-label">State</label>
            <input type="text" class="form-control @error('state') is-invalid @enderror" id="state" name="state"  value="{{ old('state') }}">
            @error('state')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('state') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city"  value="{{ old('city') }}">
            @error('city')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('city') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"  value="{{ old('address') }}">
            @error('address')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('address') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="apartment_number" class="form-label">House Number</label>
            <input type="text" class="form-control @error('apartment_number') is-invalid @enderror" id="apartment_number" name="apartment_number"  value="{{ old('apartment_number') }}">
            @error('apartment_number')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('apartment_number') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
