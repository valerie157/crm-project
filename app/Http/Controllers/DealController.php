<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deal;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all deals from the database
        $deals = Deal::all();

        // Pass the deals to the view for display
        return view('deals.index', compact('deals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deals.create');
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
            'name' => 'required|string|max:255',
            // Add validation rules for other fields as needed
        ]);

        // Create a new Deal instance with the validated data
        $deal = new Deal();
        $deal->name = $request->name;
        // Set other fields as needed
        $deal->save();

        // Redirect to a route or return a response as needed
        return redirect()->route('deals.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find the deal by its ID
        $deal = Deal::findOrFail($id);

        // Return the view for editing the deal
        return view('deals.edit', compact('deal'));
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
            'name' => 'required|string|max:255',
            // Add validation rules for other fields as needed
        ]);

        // Find the deal by its ID
        $deal = Deal::findOrFail($id);

        // Update the deal with the validated data
        $deal->name = $request->name;
        // Set other fields as needed
        $deal->save();

        // Redirect to a route or return a response as needed
        return redirect()->route('deals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find the deal by its ID
        $deal = Deal::findOrFail($id);

        // Return the view to display the deal details
        return view('deals.show', compact('deal'));
    }
}
