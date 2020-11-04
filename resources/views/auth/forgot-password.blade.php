@extends('layouts.auth', ['title' => 'Forgot Password - GENTRA'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 col-lg-12">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group text-center">
                            <img src="{{ url('frontend/images/logo.png')}}" alt="" class="mb-4">

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Masukkan Alamat Email">

                            @error('email')
                            <div class="alert alert-danger mt-2">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">SEND PASSWORD RESET LINK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection