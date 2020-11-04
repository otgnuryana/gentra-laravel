@extends('layouts.auth', ['title' => 'Login - GENTRA'])

@section('content')

<main class="login-container">
    <div class="container">
        <div class="row d-flex page-login align-items-center">
            <div class="section-left col-12 col-md-6">
                <h1 class="mb-4">We explore the new <br>
                    life much better</h1>
                <img src="{{ url('frontend/images/login.png')}}" alt="" class="w-75 d-none d-sm-flex">
            </div>
            <div class="section-right col-12 col-md-4">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center">
                            <img src="{{ url('frontend/images/logo.png')}}" alt="" class="w-50 mb-4">

                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group text-left">
                                    <label>Username</label>
                                    <input type="text" name="username" value="{{ old('username') }}"
                                        class="form-control @error('username') is-invalid @enderror">
                                    @error('username')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror">
                            @error('username')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-login btn-block mt-3">Sign In</button>
                        <p class="text-center mt-4"><a href="{{url('/forgot-password')}}">Lupa Password?</a></p>
                        <div class="register mt-3 text-center">
                            <p>Belum punya akun ? Daftar <a href="{{ url('/register')}}">Disini</a></p>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>




{{--  <form action="{{ route('login') }}" method="POST">
@csrf
<div class="form-group">
    <label class="font-weight-bold text-uppercase">Username</label>
    <input type="username" name="username" value="{{ old('username') }}"
        class="form-control @error('username') is-invalid @enderror" placeholder="Masukkan Username">
    @error('username')
    <div class="alert alert-danger mt-2">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label class="font-weight-bold text-uppercase">Password</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
        placeholder="Masukkan Password">
    @error('password')
    <div class="alert alert-danger mt-2">
        {{ $message }}
    </div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">LOGIN</button>
<hr>

<a href="/forgot-password">Lupa Password ?</a>

</form>
</div>
</div>
<div class="register mt-3 text-center">
    <p>Belum punya akun ? Daftar <a href="{{ url('/register')}}">Disini</a></p>
</div>
</div> --}}

@endsection