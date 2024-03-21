@extends('layouts.app')

@section('content')
    <h1>Account Details</h1>
    <p><strong>Name:</strong> {{ $account->name }}</p>
    <p><strong>Industry:</strong> {{ $account->industry }}</p>
    <p><strong>Size:</strong> {{ $account->size }}</p>
    <p><strong>Location:</strong> {{ $account->location }}</p>
    {{-- Add more details as needed --}}
@endsection
