@extends('layouts.app')

@section('title', 'All Deals')

@section('content')
    <style>
        /* Custom styling for the deals table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .action-buttons {
            display: flex;
            gap: 5px;
        }

        .action-button {
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .action-button.view {
            background-color: #007bff;
        }

        .action-button.view:hover {
            background-color: #0056b3;
        }

        .action-button.edit {
            background-color: #17a2b8;
        }

        .action-button.edit:hover {
            background-color: #117a8b;
        }

        .action-button.delete {
            background-color: #dc3545;
        }

        .action-button.delete:hover {
            background-color: #bd2130;
        }
    </style>

    <h1>All Deals</h1>

    <a href="{{ route('deals.create') }}" class="action-button create">Create Deal</a>


    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Stage</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deals as $deal)
                <tr>
                    <td>{{ $deal->name }}</td>
                    <td>{{ $deal->stage }}</td>
                    <td class="action-buttons">
                        <a href="{{ route('deals.show', $deal->id) }}" class="action-button view">View</a>
                        <a href="{{ route('deals.edit', $deal->id) }}" class="action-button edit">Edit</a>
                        <form action="{{ route('deals.destroy', $deal->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="action-button delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
