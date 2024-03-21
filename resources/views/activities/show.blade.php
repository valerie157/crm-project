@extends('layouts.app')

@section('title', 'Activity Details')

@section('content')
    <h1>Activity Details</h1>

    <div>
        <p><strong>Type:</strong> {{ ucfirst($activity->type) }}</p>
        <p><strong>Subject:</strong> {{ $activity->subject }}</p>
        <p><strong>Description:</strong> {{ $activity->description }}</p>
        <p><strong>Date:</strong> {{ $activity->date }}</p>
        <!-- You may include additional details here -->
    </div>

    <a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this activity?')">Delete</button>
    </form>
@endsection
