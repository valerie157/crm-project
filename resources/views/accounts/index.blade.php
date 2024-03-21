@extends('layouts.app')

@section('title', 'All Accounts')

@section('content')
    <div class="container">
        <h1 class="my-4">All Accounts</h1>

        <a href="{{ route('accounts.create') }}" class="btn btn-primary mb-3">Create Account</a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Industry</th>
                        <th>Size</th>
                        <th>Location</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($accounts as $account)
                        <tr>
                            <td>{{ $account->name }}</td>
                            <td>{{ $account->industry }}</td>
                            <td>{{ $account->size }}</td>
                            <td>{{ $account->location }}</td>
                            <td>
                                <a href="{{ route('accounts.show', $account->id) }}" class="btn btn-sm btn-info mr-2">
                                    <i class="fas fa-eye"></i> View
                                </a>
                                <a href="{{ route('accounts.edit', $account->id) }}" class="btn btn-sm btn-primary mr-2">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('accounts.destroy', $account->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you wantto delete this account?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
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