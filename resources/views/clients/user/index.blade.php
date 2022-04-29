@extends('layouts.app')

@section('title')
    Profile
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Welcome to Profile page</h1>
                <p>{{ 'Name: ' . $user->name }}</p>
                <p>{{ 'Email: ' . $user->email }}</p>
                <p>{{ 'Address: ' . $user->address }}</p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
