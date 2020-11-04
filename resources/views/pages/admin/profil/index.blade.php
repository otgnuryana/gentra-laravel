@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profil {{ Auth::user()->name}}</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <p>Nama : {{ Auth::user()->name}}</p>
            <p>Email : {{ Auth::user()->email}}</p>
            <p>Username : {{ Auth::user()->username}}</p>






            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

@endsection