@extends('layouts.app')

@section('content')
    <h1>Create Account</h1>
    <form action="{{ route('accounts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="industry">Industry</label>
            <input type="text" name="industry" id="industry" class="form-control">
        </div>
        <div class="form-group">
            <label for="size">Size</label>
            <input type="text" name="size" id="size" class="form-control">
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" id="location" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
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
