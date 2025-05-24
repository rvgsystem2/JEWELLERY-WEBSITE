<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function index()
    {

        // Fetch all rates from the database
        $today = Carbon::today();
    $rates = Rate::whereDate('created_at', $today)->get();
        return view('rate.index', compact('rates'));
    }

    public function create()
    {
        return view('rate.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
             'name' => 'required|string|max:255',
            'gold_rate' => 'nullable',
        ]);

        // Store the rate data in the database
        Rate::create($request->all());

        // Redirect or return a response
        return redirect()->route('rate.index')->with('success', 'Rates created successfully.');
    }

    public function edit($id)
    {
        // Fetch the rate data for editing
        $rate = Rate::findOrFail($id);
       
        return view('rate.create', compact('rate'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the rate data
        $request->validate([
            'name' => 'required|string|max:255',
            'gold_rate' => 'nullable',
          
            
        ]);

        $rate = Rate::findOrFail($id);
        $rate->update($request->all());

        return redirect()->route('rate.index')->with('success', 'Rates updated successfully.');
    }

    public function delete($id)
    {
        // Delete the rate data
        $rate = Rate::findOrFail($id);
        $rate->delete();

        return redirect()->route('rate.index')->with('success', 'Rates deleted successfully.');
    }
}
