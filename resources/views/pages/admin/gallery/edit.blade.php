@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel</h1>
    </div>

    {{--  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors as $error)
            <li>{{ $error}}</li>
    @endforeach
    </ul>
</div>

@endif --}}

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('gallery.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="travel_packages_id"></label>
                <select name="travel_packages_id" class="form-control" placeholder="{{ $item->travel_packages_id }}"
                    required>
                    <option value="{{ $item->travel_packages_id }}">{{ $item->title }}</option>
                    @foreach ($travel_packages as $travel_package)
                    <option value="{{ $travel_package->id}}">
                        {{ $travel_package->title}}
                    </option>
                    @endforeach
                </select>
                @error('travel_packages_id')

                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>

                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" placeholder="image">
                @error('image')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-block">Change</button>




        </form>
    </div>
</div>





</div>
<!-- /.container-fluid -->

@endsection