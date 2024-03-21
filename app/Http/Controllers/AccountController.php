<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    // Display a listing of the accounts.
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    // Show the form for creating a new account.
    public function create()
    {
        return view('accounts.create');
    }

    // Store a newly created account in the database.
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'industry' => 'nullable|string|max:255',
            'size' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);

        // Create the account
        Account::create($validatedData);

        return redirect()->route('accounts.index')->with('success', 'Account created successfully.');
    }

    // Show the form for editing the specified account.
    public function edit(Account $account)
    {
        return view('accounts.edit', compact('account'));
    }

    // Update the specified account in the database.
    public function update(Request $request, Account $account)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'industry' => 'nullable|string|max:255',
            'size' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);

        // Update the account
        $account->update($validatedData);

        return redirect()->route('accounts.index')->with('success', 'Account updated successfully.');
    }

    // Remove the specified account from the database.
    public function destroy(Account $account)
    {
        $account->delete();
        return redirect()->route('accounts.index')->with('success', 'Account deleted successfully.');
    }
    public function show($id)
{
    $account = Account::findOrFail($id);
    return view('accounts.show', compact('account'));
}

}
