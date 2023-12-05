<?php

namespace App\Http\Controllers;

// use App\Models\appointment ;

use App\Models\appointment as ModelsAppointment;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\Request;

class appointment extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
        $validatedData = $request->validate([
            'name' => 'required',
            'dateReservation' => 'required',
            'daysNumber' => 'required',
            'type' => 'required',
            'produit' => 'nullable',
            'contact' => 'nullable',
        ]);

        ModelsAppointment::create($validatedData);


        return redirect()->route('ar-thank')->with('success', 'Appointment saved successfully');
    } catch (Exception) {
        return redirect()->back()->with('error', 'Please fill in all required fields.');
    }
        // return response()->json(['message' => 'Contact saved successfully']);
    }

    public function storeEn(Request $request)
    {
        try{
        $validatedData = $request->validate([
            'name' => 'required',
            'dateReservation' => 'required',
            'daysNumber' => 'required',
            'type' => 'required',
            'produit' => 'nullable',
            'contact' => 'nullable',
        ]);

        ModelsAppointment::create($validatedData);


        return redirect()->route('en-thank')->with('success', 'Appointment saved successfully');
    } catch (Exception) {
        return redirect()->back()->with('error', 'Please fill in all required fields.');
    }
        // return response()->json(['message' => 'Contact saved successfully']);
    }

    public function storeFr(Request $request)
    {
        try{
        $validatedData = $request->validate([
            'name' => 'required',
            'dateReservation' => 'required',
            'daysNumber' => 'required',
            'type' => 'required',
            'produit' => 'nullable',
            'contact' => 'nullable',
        ]);

        ModelsAppointment::create($validatedData);


        return redirect()->route('fr-thank')->with('success', 'Appointment saved successfully');
    } catch (Exception) {
        return redirect()->back()->with('error', 'Please fill in all required fields.');
    }
        // return response()->json(['message' => 'Contact saved successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
