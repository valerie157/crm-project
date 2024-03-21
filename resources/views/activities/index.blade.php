@extends('layouts.app')

@section('title', 'All Activities')

@section('content')
    <div class="container">
        <h1 class="my-4">All Activities</h1>

        <a href="{{ route('activities.create') }}" class="btn btn-primary mb-3">Create Activity</a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Type</th>
                        <th>Subject</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activities as $activity)
                        <tr>
                            <td>{{ ucfirst($activity->type) }}</td>
                            <td>{{ $activity->subject }}</td>
                            <td>{{ $activity->date }}</td>
                            <td>
                            <a href="{{ route('activities.show', $activity->id) }}" class="action-button view">View</a>
                                <a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-sm btn-info mr-2"><i class="fas fa-edit"></i> Edit</a>
                                <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this activity?')"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

<style>
    th, td {
        text-align: center;
        vertical-align: middle;
    }

    th {
        font-weight: bold;
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .table-responsive {
        overflow-x: auto;
    }

    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem;
    }

    .btn-info {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-info:hover {
        color: #fff;
        background-color: #138496;
        border-color: #117a8b;
    }

    .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #c82333;
        border-color: #bd2130;
    }
</style>