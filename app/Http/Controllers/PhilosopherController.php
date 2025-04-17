<?php

namespace App\Http\Controllers;

use App\Models\Philosopher;
use App\Traits\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class PhilosopherController extends Controller
{

    use ApiResponse;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->success(Philosopher::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validated([
            "name" => "string|max:255",
            "life" => "string|max:255",
            "school" => "string|max:255",
            "notes" => "string",
        ]);

        try {
            $philosopher = Philosopher::create([
                $validated
            ]);
    
            return response()->json($philosopher, "Record stored successfully");
        } catch (Exception $e) {
            return $this->error(message: $e);
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Philosopher $philosopher)
    {
        return $this->success($philosopher);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Philosopher $philosopher)
    {
        $validated = $request->validated([
            "name" => "string|max:255",
            "life" => "string|max:255",
            "school" => "string|max:255",
            "notes" => "string",
        ]);

        try {
            $philosopher->update($validated);

            return $this->success($philosopher, "Record updated successfully");
        } catch (Exception $e) {
            return $this->error(message: $e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Philosopher $philosopher)
    {
        try {
            $philosopher->delete();

            return $this->success(message: "Record deleted successfully");
        } catch (Exception $e) {
            return $this->error(message: $e);
        }

    }
}
