<?php

namespace App\Http\Controllers;

use App\Models\DniLetter;
use Illuminate\Http\Request;

class DniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function calculateDni(Request $request)
    {
        $request->validate([
            'dniNumber' => 'required|integer|between:0,99999999',
        ]);

        $dniNumber = $request->input('dniNumber');
        
        $remainder = $dniNumber % 23;
        
        $dniLetter = DniLetter::where('dniRemainder', $remainder)->first();

        if ($dniLetter) {
            return response()->json([
                'dniNumber' => $dniNumber,
                'dniLetter' => $dniLetter->letter,
            ]);
        }
        
        if (!$dniLetter) {
            return response()->json([
                'message' => 'No se pudo calcular la letra del DNI.',
            ], 404);
        }
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
        //
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
