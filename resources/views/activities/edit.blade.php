@extends('layouts.app')

@section('title', 'Edit Activity')

@section('content')
    <div class="container">
        <h1 class="my-4">Edit Activity</h1>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('activities.update', $activity->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="type" class="fw-bold">Type:</label>
                        <select name="type" id="type" class="form-control">
                            <option value="call" {{ $activity->type == 'call' ? 'selected' : '' }}>Call</option>
                            <option value="email" {{ $activity->type == 'email' ? 'selected' : '' }}>Email</option>
                            <option value="meeting" {{ $activity->type == 'meeting' ? 'selected' : '' }}>Meeting</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="subject" class="fw-bold">Subject:</label>
                        <input type="text" name="subject" id="subject" class="form-control" value="{{ $activity->subject }}">
                    </div>

                    <div class="form-group">
                        <label for="description" class="fw-bold">Description:</label>
                        <textarea name="description" id="description" class="form-control">{{ $activity->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="date" class="fw-bold">Date:</label>
                        <input type="date" name="date" id="date" class="form-control" value="{{ $activity->date }}">
                    </div>

                    <!-- You may add fields for associating with accounts or deals here -->

                    <button type="submit" class="btn btn-primary fw-bold">Update Activity</button>
                </form>
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
        width: 100%;
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
        width: 100%;
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

    .card {
        border: none;
        border-radius: 0.3rem;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .card-body {
        padding: 2rem;
    }

    h1 {
        text-align: center;
        margin-bottom: 1rem;
    }
</style>