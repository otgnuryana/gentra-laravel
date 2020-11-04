@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
    </div>

    {{--  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            {{ $errors }}
    @foreach ($errors as $error)
    <li>{{ $error}}</li>
    @endforeach
    </ul>
</div>

@endif --}}

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('travel-package.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Title" class="form-control"
                    value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" placeholder="Location" class="form-control"
                    value="{{ old('location') }}">
                @error('location')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="about"></label>
                <textarea name="about" cols="30" rows="10"
                    class="d-block w-100 form-control">{{ old('about')}}</textarea>
                @error('about')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="featured_event">Featured Event</label>
                <input type="text" name="featured_event" id="featured_event" placeholder="Featured Event"
                    class="form-control" value="{{ old('featured_event') }}">
                @error('featured_event')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="language">Language</label>
                <input type="text" name="language" id="language" placeholder="Language" class="form-control"
                    value="{{ old('language') }}">
                @error('language')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="foods">Foods</label>
                <input type="text" name="foods" id="foods" placeholder="Foods" class="form-control"
                    value="{{ old('foods') }}">
                @error('foods')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="departure_date">Departure Date</label>
                <input type="date" name="departure_date" id="departure_date" placeholder="Departure date"
                    class="form-control" value="{{ old('departure_date') }}">
                @error('departure_date')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input type="text" name="duration" id="Duration" placeholder="duration" class="form-control"
                    value="{{ old('duration') }}">
                @error('duration')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" id="type" placeholder="Type" class="form-control"
                    value="{{ old('type') }}">
                @error('type')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" placeholder="Price" class="form-control"
                    value="{{ old('price') }}">
                @error('price')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-block">Save</button>




        </form>
    </div>
</div>





</div>
<!-- /.container-fluid -->

@endsection