@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
    </div>



    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('gallery.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="travel_packages_id"></label>
                    <select name="travel_packages_id" class="form-control" required>
                        <option value="">Pilih Paket Travel</option>
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
                <button type="submit" class="btn btn-primary btn-block">Save</button>




            </form>
        </div>
    </div>





</div>
<!-- /.container-fluid -->

@endsection