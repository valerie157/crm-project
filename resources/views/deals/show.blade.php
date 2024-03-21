@extends('layouts.app')

@section('title', 'Deal Details')

@section('content')
    <style>
        /* Custom styling for the deal details page */
        .deal-details-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .deal-details-container h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .deal-details-container p {
            margin-bottom: 20px;
        }

        .deal-details-container a {
            display: inline-block;
            padding: 8px 16px;
            margin-right: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .deal-details-container a:hover {
            background-color: #0056b3;
        }

        .deal-details-container form {
            display: inline-block;
        }

        .deal-details-container button {
            padding: 8px 16px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .deal-details-container button:hover {
            background-color: #bd2130;
        }
    </style>

    <div class="deal-details-container">
        <h1>{{ $deal->name }}</h1>

        <p>Deal Details:</p>
        <!-- Display other deal details as needed -->

        <a href="{{ route('deals.edit', $deal->id) }}">Edit</a>
        <form action="{{ route('deals.destroy', $deal->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
