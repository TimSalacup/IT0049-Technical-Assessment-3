@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <h2>Profile</h2>

    @if ($user)
        <p><strong>Username:</strong> {{ $user->username }}</p>
        <p><strong>Full name:</strong> {{ $user->full_name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
    @else
        <p>No user profile was found. Run the database seeder.</p>
    @endif
@endsection