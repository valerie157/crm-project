<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return the view for creating a new activity
        return view('activities.create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all activities from the database
        $activities = Activity::all();

        // Pass the activities to the view for display
        return view('activities.index', compact('activities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'type' => 'required',
            'subject' => 'required',
            'date' => 'required|date',
            // Add validation rules for other fields as needed
        ]);

        // Create a new Activity instance with the validated data
        $activity = new Activity();
        $activity->type = $request->type;
        $activity->subject = $request->subject;
        $activity->description = $request->description;
        $activity->date = $request->date;
        // Set other fields as needed
        $activity->save();

        // Redirect to a route or return a response as needed
        return redirect()->route('activities.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find the activity by its ID
        $activity = Activity::findOrFail($id);

        // Return the view for editing the activity
        return view('activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'type' => 'required',
            'subject' => 'required',
            'date' => 'required|date',
            // Add validation rules for other fields as needed
        ]);

        // Find the activity by its ID
        $activity = Activity::findOrFail($id);

        // Update the activity with the validated data
        $activity->type = $request->type;
        $activity->subject = $request->subject;
        $activity->description = $request->description;
        $activity->date = $request->date;
        // Update other fields as needed
        $activity->save();

        // Redirect to a route or return a response as needed
        return redirect()->route('activities.index');
    }
    public function destroy($id)
    {
        // Find the activity by its ID
        $activity = Activity::findOrFail($id);

        // Delete the activity
        $activity->delete();

        // Redirect to a route or return a response as needed
        return redirect()->route('activities.index');
    }
    public function show($id)
    {
        // Find the activity by its ID
        $activity = Activity::findOrFail($id);

        // Return the view to display the activity details
        return view('activities.show', compact('activity'));
    }
}
