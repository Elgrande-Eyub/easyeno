<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Exception;
use Illuminate\Http\Request;

class contactController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'client' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'string|max:255',
            'note' => 'string|max:255',
            'phone' => 'string|max:255',
            'project' => 'string|max:255',
            'email' => 'string|max:255',
        ]);

        Contact::create($validatedData);

        return response()->json(['message' => 'Contact saved successfully']);
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
