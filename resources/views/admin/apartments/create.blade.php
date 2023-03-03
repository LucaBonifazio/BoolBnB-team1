
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

        {{-- <div class="mb-3">
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
        </div> --}}

        <div class="mb-3">
            <label for="uploaded_image" class="form-label">Uploaded Image</label>
            <input class="form-control @error('uploaded_image') is-invalid @enderror" type="file" id="uploaded_image" name="uploaded_image">
            <div class="invalid-feedback">
                @error('uploaded_image')
                    <ul>
                        @foreach ($errors->get('uploaded_image') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="n_rooms" class="form-label">Rooms</label>
            <input type="number" class="form-control @error('n_rooms') is-invalid @enderror" id="n_rooms" name="n_rooms"  value="{{ old('n_rooms') }}"  min="1" max="100">
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
            <input type="number" class="form-control @error('n_beds') is-invalid @enderror" id="n_beds" name="n_beds"  value="{{ old('n_beds') }}"  min="1" max="100">
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
            <input type="number" class="form-control @error('n_bathrooms') is-invalid @enderror" id="n_bathrooms" name="n_bathrooms"  value="{{ old('n_bathrooms') }}"  min="1" max="100">
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
            <label for="square_meters" class="form-label">Square Meters</label>
            <input type="number" class="form-control @error('square_meters') is-invalid @enderror" id="square_meters" name="square_meters"  value="{{ old('square_meters') }}"  min="50" max="90000">
            @error('square_meters')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('square_meters') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        {{-- <div class="mb-3">
            <label for="latitude" class="form-label">Latitude</label>
            <input type="regex" class="form-control @error('latitude') is-invalid @enderror" id="latitude" name="latitude" value="{{ old('latitude') }}">
            @error('latitude')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('latitude') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="longitude" class="form-label">Longitude</label>
            <input type="regex" class="form-control @error('longitude') is-invalid @enderror" id="longitude" name="longitude" value="{{ old('longitude') }}">
            @error('longitude')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('longitude') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div> --}}

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
            <label for="apartment_number" class="form-label">Apartment number</label>
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

        <div class="col-12">
            <h5>Services</h5>
            @foreach ($services as $service)
                <div class="form-check">
                    <input
                        id="service-{{ $service->id }}"
                        class="form-check-input"
                        type="checkbox"
                        value="{{ $service->id }}"
                        name="services[]"
                        @if (in_array($service->id, old('services', []))) checked @endif
                    >
                    <label class="form-check-label" for="service-{{ $service->id }}">
                        {{ $service->name }}
                    </label>
                </div>
            @endforeach
            @if ($errors->has('services') || $errors->has('services.*'))
                <div>
                    Ci sono problemi con i services
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
