@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                @if (session('error_mess'))
                                    <span class="red">{{ session('error_mess') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">
                                @error('email')
                                    <span class="red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input id="password" type="password" class="form-control" name="password"
                                    autocomplete="current-password" placeholder="Password">
                                @error('password')
                                    <span class="red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark">
                                    Sign in
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
@endsection

@section('css')
    .red{
    color: #d70000;
    }
@endsection
