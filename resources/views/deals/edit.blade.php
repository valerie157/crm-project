@extends('layouts.app')

@section('title', 'Edit Deal')

@section('content')
    <h1>Edit Deal</h1>

    <form action="{{ route('deals.update', $deal->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $deal->name }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror

        <!-- Add other form fields as needed -->

        <button type="submit">Update Deal</button>
    </form>
    <style>
    h1 {
        text-align: center;
        margin-bottom: 2rem;
    }

    form {
        width: 50%;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 0.5rem;
    }

    input[type="text"] {
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 0.25rem;
        width: 100%;
    }

    button[type="submit"] {
        background-color: #007bff;
        border: none;
        color: #fff;
        padding: 0.5rem;
        border-radius: 0.25rem;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
    }

    button[type="submit"]:hover {
        background-color: #0069d9;
    }

    .error {
        color: red;
        font-size: 0.8rem;
    }
</style>
@endsection
