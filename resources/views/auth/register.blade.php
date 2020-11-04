@extends('layouts.auth', ['title' => 'Register - GENTRA'])

@section('content')
<div class="container">
    <div class="row">

        <div class="col-lg-12 col-md-6">
            <div class="card border-0 shadow rounded page-login">
                <div class="card-body text-center">
                    <img src="{{ url('frontend/images/logo.png')}}" alt="" class="mb-5">

                    <form action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label class="font-weight-bold">Full Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Masukkan Nama Lengkap">
                                    @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label class="font-weight-bold">Username</label>
                                    <input type="text" name="username" value="{{ old('username') }}"
                                        class="form-control @error('username') is-invalid @enderror"
                                        placeholder="Masukkan Userusername">
                                    @error('username')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label class="font-weight-bold">Email address</label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Masukkan Alamat Email">
                                    @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label class="font-weight-bold">Password</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Masukkan Password">
                                    @error('password')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label class="font-weight-bold">Konfirmasi Password</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="Masukkan Konfirmasi Password">
                                </div>
                            </div>


                        </div>

                        <button type="submit" class="btn btn-login mt-4">Sign up</button>


                        <div class="login mt-4 text-center">
                            <p>Sudah punya akun ? Login <a href="/login">Disini</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection