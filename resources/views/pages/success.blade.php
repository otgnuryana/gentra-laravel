@extends('layouts.success')
@section('title', 'Success Checkout')

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{ url('frontend/images/ic_mail.png')}}" alt="" class="img-success">
            <h2>Yay! Success</h2>
            <p class="text-muted">We’ve sent you email for trip instruction <br>
                please read it as well</p>
            <a href="{{ url('/')}}" class="btn btn-login mt-3 px-5">Home Page</a>
        </div>
    </div>
</main>

@endsection