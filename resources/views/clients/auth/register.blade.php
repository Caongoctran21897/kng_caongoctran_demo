@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Register User</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                    autofocus placeholder="Name">
                                @error('name')
                                    <span class="red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" autofocus placeholder="Email">
                                @error('email')
                                    <span class="red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input id="address" type="text" class="form-control" name="address"
                                    value="{{ old('address') }}" autofocus placeholder="Address">
                                @error('address')
                                    <span class="red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input id="password" type="password" class="form-control" name="password"
                                    placeholder="Password">
                                @error('password')
                                    <span class="red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark">
                                    Sign up
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
