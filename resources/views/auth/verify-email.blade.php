@extends('welcome')
@section('content')
<div class="container vh-100 d-flex flex-column justify-content-center">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-5 mb-3">
            <div class="shadow border p-4 rounded-3 ">
                <div class="mb-4 fs-6">
                    Thanks for signing up! Before getting started, please verify your email by clicking the link we just sent.
                </div>

                @if (session('message'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('message') }}
                </div>
                @endif

                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn btn-dark">
                        Resend Verification Email
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection