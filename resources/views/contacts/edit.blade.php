<!-- resources/views/contacts/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Edit Contact</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $contact->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $contact->email }}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ $contact->phone }}">
                            </div>

                            <!-- Add more fields as needed -->

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Contact</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

    input[type="text"],
    input[type="email"],
    input[type="phone"] {
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
