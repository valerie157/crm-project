@extends('layouts.app')

@section('title', 'Create Activity')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Activity</div>

                    <div class="card-body">
                        <form action="{{ route('activities.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="type">Type:</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="call">Call</option>
                                    <option value="email">Email</option>
                                    <option value="meeting">Meeting</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="subject">Subject:</label>
                                <input type="text" name="subject" id="subject" class="form-control" value="{{ old('subject') }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}">
                            </div>

                            <!-- You may add fields for associating with accounts or deals here -->

                            <button type="submit" class="btn btn-primary">Create Activity</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .form-group {
        margin-bottom: 1rem;
    }

    label {
        display: inline-block;
        margin-bottom: 0.25rem;
        font-size: 0.8rem;
        font-weight: bold;
        color: #333;
    }

    select,
    input[type="text"],
    textarea,
    input[type="date"] {
        width: 50%;
        padding: 0.5rem;
        border-radius: 0.3rem;
        border: 1px solid #ccc;
        box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.1);
    }

    select:focus,
    input[type="text"]:focus,
    textarea:focus,
    input[type="date"]:focus {
        outline: none;
        box-shadow: 0 0 2px 0 rgba(0, 123, 255, 0.25);
    }

    button[type="submit"] {
        width: 30%;
        padding: 0.5rem;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 0.3rem;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
    }

    button[type="submit"]:hover {
        background-color: #0069d9;
    }

    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 2rem;
        border: 1px solid #ddd;
        border-radius: 0.3rem;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        background-color: crimson;
    }
    h1{
        text-align:center;
        margin:1rem;
    }
    </style>